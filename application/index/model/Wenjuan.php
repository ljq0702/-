<?php

namespace app\index\model;

use think\facade\Session;
use think\Model;
use think\db;
use think\facade\Cache;

class Wenjuan extends Model
{
    //将创建的问卷写入数据库
    public function addTo($data)
    {
        //添加问卷名称
        $wenjuanTitle = ['title' => $data['questionTitle'], 'fu_title' => $data['questionExamTitle'], 'userid' => $data[0]['id']];
        $wenjuanID = db::name('wenjuan')->insertGetId($wenjuanTitle);
        //判断是否存在questionItems的键，如果存 在则执行里面的代码
        if (array_key_exists('questionItems', $data)) {
            //将问卷中的问题添加到数据库
            $question = $data["questionItems"];
            //获取问卷问题的数目
            //$count=count($question);
            //echo $count;
            //设置一个空数组，用来存放问题题目的数据
            $res = array();
            //用来存入每道题选项的数据
            foreach ($question as $value) {
                $res[] = ['title' => $value['QItemsTitle'], 'papred' => $wenjuanID, 'topic' => $value["topic_id"]];
            }
            //执行问题添加操作
            db::name('question')->insertAll($res);
            //添加选择题选项到数据库
            //db('xuanxiang')->insertAll($xuanxiang);
        }
        return $wenjuanID;
    }

    //添加选项
    public function addxx($data, $x)
    {
        $eee = array();
        //设置一个空数组，用来存放选项id
        $xxid = array();
        $oldquestion = db::name('question')->where('papred', $x)->select();
        $oldxuanxiang = db::name('xuanxiang')->where('paperid', $x)->select();
        foreach ($oldquestion as $v) {
            //将每个问题的id存入$eee数组
            $eee[] = ['questionid' => $v['question_id']];
        }
        foreach ($oldxuanxiang as $v) {
            $xxid[] = ['selectid' => $v['select_id']];
        }
        if (array_key_exists('questionItems', $data)) {
            //将问卷中的问题添加到数据库
            $question = $data["questionItems"];
            //dump($question);
            //获取问卷问题的数目
            $count = count($question);
            echo $count;
            //设置一个空数组，用来存放问题题目的数据
            $res = array();
            //用来存入每道题选项的数据
            $xuanxiang = array();
            //dump($question);
            foreach ($question as $key => $value) {
                //dump($value);
                if (is_array($value) && isset($value['qListItems'])) {
                    foreach ($value['qListItems'] as $v) {
                        $xuanxiang[] = ['Scontent' => $v['value'], 'paperid' => $x, 'question_id' => $eee[$key]['questionid']];

                    }
                }

                $res[] = ['title' => $value['QItemsTitle'], 'papred' => $x, 'topic' => $value["topic_id"]];
            }
            dump($res);
            //dump($xuanxiang);
            //执行问题添加操作
            //$questionadd=db::name('question')->insertAll($res);
            //dump($questionFan);
            //添加选择题选项到数据库
            db('xuanxiang')->insertAll($xuanxiang);
        }
    }

    //保存问卷的页面信息
    public function saveHtml($data)
    {
        if (array_key_exists('htmlid', $data)) {
            //如果存在就进行修改操作
            $hid = $data['htmlid'];
            $oldhtml = db::name('showhtml')->where('paperid', $hid)->select();
            $shid = array();
            foreach ($oldhtml as $v) {
                $shid[] = ['shid' => $v['show_id']];
            }
            unset($data['htmlid']);
            $upHtml = ['htmlcontent' => json_encode($data)];
            foreach ($shid as $value) {
                db::name('showhtml')->where('show_id', $value['shid'])->update($upHtml);
            }


        } else {
            //如果不存在就进行添加操作
            //取得问卷的id
            $wenjuanid = db::name('wenjuan')->max('paperid');
            dump($wenjuanid);
            $saveHtml = ['htmlcontent' => json_encode($data), 'paperid' => $wenjuanid];
            //dump($saveHtml);
            //将问卷的页面以json形式存入数据库
            Db::name('showhtml')->insert($saveHtml);
        }
//
    }

    //删除问卷
    public function del($data)
    {
        $id = array();
        foreach ($data['wenjuan'] as $v) {
            $id[] = $v;
        }
        dump($id);
        //db::name('question')->where('papred',$id)
        foreach ($id as $v) {
            db::name('wenjuan')->where('paperid', $v)->delete();
            db::name('question')->where('papred', $v)->delete();
            db::name('xuanxiang')->where('paperid', $v)->delete();
            db::name('showhtml')->where('paperid', $v)->delete();
        }

    }

    //查询问卷信息
    public function show($data)
    {
        //循环遍历获取问卷id
        foreach ($data as $v) {
            //dump($v);
            //利用问卷id进行问卷查询
            $ret = Db::name('showhtml')->where('paperid', $v)->select();
            //dump($ret);
            //将获取的数组进行遍历，获取到问卷页面的信息
            foreach ($ret as $va) {
                $html = $va['htmlcontent'];
                //dump($html);
                //echo json_encode($html);
                return json($html);
            }
        }

        //$ret=Db::name('showHtml')->where('paperid',$v);
    }

    //修改问卷
    public function upd($data)
    {
        /*
         * 修改问卷是进行了添加问题或者删除问题操作
         * 添加问题：获得问题的数量，获取到问题的id，对原有数量的问题进行修改操作，添加的问题进行添加操作
         * 如何让每个选项对应自己的问题id？
         * 找到第一个问题下的选项数量，然后将 问题id循环赋予选项。
        */
        //获取问卷的id
        //dump($data);
        $hid = $data["htmlid"];
        //添加问卷名称
        $wenjuanTitle = ['title' => $data['questionTitle'], 'fu_title' => $data['questionExamTitle']];
        $wenjuanID = db::name('wenjuan')->where('paperid', $hid)->update($wenjuanTitle);
        //设置一个空数组，用来存放需要修改的问题id
        $eee = array();
        //设置一个空数组，用来存放选项id
        $xxid = array();
        $oldquestion = db::name('question')->where('papred', $hid)->select();
        $oldxuanxiang = db::name('xuanxiang')->where('paperid', $hid)->select();
        foreach ($oldquestion as $v) {
            //将每个问题的id存入$eee数组
            $eee[] = ['questionid' => $v['question_id']];
        }
        foreach ($oldxuanxiang as $v) {
            $xxid[] = ['selectid' => $v['select_id']];
        }
        //dump($eee);
        dump($xxid);
        //判断是否存在questionItems的键，如果存 在则执行里面的代码
        if (array_key_exists('questionItems', $data)) {
            //将问卷中的问题添加到数据库
            $question = $data["questionItems"];
            //获取问卷问题的数目
            $count = count($question);
            //echo $count;
            //设置一个空数组，用来存放问题题目的数据
            $res = array();
            dump($question);
            //用来存入每道题选项的数据
            $xuanxiang = array();
            foreach ($question as $key => $value) {
                //dump($value);
                if (is_array($value) && isset($value['qListItems'])) {
                    foreach ($value['qListItems'] as $v) {
                            $xuanxiang[] = ['Scontent' => $v['value'], 'paperid' => $hid, 'question_id' => $eee[$key]['questionid']];
                    }
                }

                $res[] = ['title' => $value['QItemsTitle'], 'papred' => $hid, 'topic' => $value["topic_id"]];
            }
            dump($res);
            //dump($xuanxiang);
            //判断 原有的问题进行修改操作，剩下的进行添加操作
            //执行问题修改操作
            foreach ($res as $key => $val) {
                //dump($key);
                //dump($val);
                //问卷修改的题目数量 大于等于 原本的题目数量
                if (count($res) >= count($eee)) {
                    if ($key <= (count($eee) - 1)) {
                        db::name('question')->where('question_id', $eee[$key]['questionid'])->update($res[$key]);
                    } elseif ($key > count($eee) - 1) {
                        db::name('question')->insert($val);
                    }
                } elseif (count($res) < count($eee)) {
                    //如果题目数量小于原来的题目数量，则
                    //如果键值小于等于问题数量
                            db::name('question')->where('question_id', $eee[$key]['questionid'])->update($res[$key]);
//                            array_splice($eee, 0, count($res));
//                            db::name('question')->where('question_id',$eee)->delete();
                    }
                }
                //如果问题数组不为空，则将剩余的进行删除
            if (!empty(array_splice($eee, 0, count($res)))){
                foreach ($eee as $v){
                    db::name('question')->where('question_id',$v['questionid'])->delete();
                }

            }


                //修改选择题选项到数据库
            if (count($xuanxiang)>=count($xxid)){
                foreach ($xuanxiang as $k=>$v) {
                    if ($k<=count($xxid)-1){
                        db('xuanxiang')->where('select_id', $xxid[$k]['selectid'])->update($xuanxiang[$k]);
                    }else{
                        db::name('xuanxiang')->insert($v);
                    }
                }
//                if (!empty(array_splice($xxid, 0, count($xuanxiang)))) {
//                    array_splice($xuanxiang, 0, count($xxid));
//                    db::name('xuanxiang')->insertAll($xuanxiang);
//                }
            }elseif (count($xuanxiang)<count($xxid)){
                foreach ($xuanxiang as $k=>$value){
                    if ($k<=count($xxid)-1){
                        db('xuanxiang')->where('select_id', $xxid[$k]['selectid'])->update($xuanxiang[$k]);
                    }

                }
                if (!empty(array_splice($xxid, 0, count($xuanxiang)))){
                    foreach ($xxid as $v){
                        db::name('xuanxiang')->where('select_id',$v['selectid'])->delete();
                    }

                }
            }


            }
        }
        //查询问卷的信息
        public function checkwj($data){
            $wjTitle=db('wenjuan')->where('paperid',$data['id'])->select();
            $wjQuestion=db('question')->where('papred',$data['id'])->select();
            $wjOption=db('xuanxiang')->where('paperid',$data['id'])->select();
            $wjselect=db("answer")->where('paperid',$data['id'])->select();
            $wjtext=db('text')->where('paperid',$data['id'])->select();
            $v=array();
            $v[]=['wenjuan'=>$wjTitle,'question'=>$wjQuestion,'option'=>$wjOption,'select'=>$wjselect,'text'=>$wjtext];
            //dump($v);
            return $v;

        }

}
