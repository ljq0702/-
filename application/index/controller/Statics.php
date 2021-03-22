<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use yii\debug\panels\DumpPanel;

class Statics extends Controller
{
    public function index(Request $request){
        $data=$request->get();
        $res=model('wenjuan')->checkwj($data);
        //dump($res);
        $wenjuan=array();
        $question=array();
        $option=array();
        $select=array();
        $text=array();
        foreach ($res as $v){
            //dump($v);
            $wenjuan=$v['wenjuan'];
            $question=$v['question'];
            $option=$v['option'];
            $select=$v['select'];
            $text=$v['text'];
        }
        //dump($wenjuan);
        //dump($question);
        //dump($option);
        //dump($select);
        $count=array();
        $op=array_count_values(array_column($select,'option_id'));
        foreach ($question as $value){
            foreach ($select as $val){
                if ($val['question_id']==$value['question_id']){
                    $count[]=['question_id'=>$value['question_id']];
                }
            }
        }
        $opz=array_count_values(array_column($count,'question_id'));
        //dump($count);
        //dump($op);
        //dump($opz);
        $this->assign('op',$op);
        $this->assign('opz',$opz);
        $this->assign('wenjuan',$wenjuan);
        $this->assign('question',$question);
        $this->assign('option',$option);
        $this->assign('select',$select);
        $this->assign('text',$text);
        return view('index@statics/statistics');
    }



}
