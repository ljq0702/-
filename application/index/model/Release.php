<?php

namespace app\index\model;

use think\Model;

class Release extends Model
{
    //查找问卷信息
    public function check($data){
        //dump($data);
        //查询问卷
        $wenjuan=db('wenjuan')->where('paperid',$data['id'])->select();
        //查找问卷问题
        $question=db('question')->where('papred',$data['id'])->select();
        //dump($question);
        //查询选项
        $option=db('xuanxiang')->where('paperid',$data['id'])->select();
        $wj[]=['wenjuan'=>$wenjuan,'question'=>$question,'option'=>$option];
        return array($wj);
    }
    //添加回收的问卷信息到数据库
    //添加选择题到数据库
    public function addSelect($data)
    {
        $paperid=$data['dd'][0][0]['paperid'];
        $reslut=db('answer')->where('paperid',$paperid)->find();
        //dump($reslut);
        if ($reslut['user_ip']==$data['dd'][0][0]['user_ip']){
            return false;
        }else{
//            $select = array();
            foreach ($data['dd'] as $value) {
                foreach ($value as $v) {
                    //$select[] = $v;
                    db('answer')->insert($v);
                }
            }
            return true;
        }

    }


    //添加填空题到数据库
    public function addText($data){
        $text=array();
        $paperid=$data['db'][0][0]['paperid'];
        $reslut=db('text')->where('paperid',$paperid)->find();
        //dump($reslut);
        if ($reslut['user_ip']==$data['db'][0][0]['user_ip']){
            return false;
        }else{
            foreach($data['db'] as $value){
                foreach ($value as $v)
                {
                    $text[]=$v;
                }
            }
            //dump($text);
            foreach ($text as $v){
                db('text')->insert($v);
            }
            return true;
        }


    }
}
