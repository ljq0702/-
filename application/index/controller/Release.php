<?php

namespace app\index\controller;

use phpDocumentor\Reflection\Types\Array_;
use think\Controller;
use think\Model;
use think\Request;

class Release extends Controller
{
    public function index(){
        return view('index@Release/index');
    }
    public function rs(Request $request){
        $data=$request->get();
       //dump($data);
        $wj=model('release')->check($data);
        //dump($wj);

        foreach ($wj as $value){
            foreach ($value as $v){
                //dump($v);
                $wenjuan=$v['wenjuan'];
                $question=$v['question'];
                $option=$v['option'];
            }
        }
        $userid=session('user')['id'];
        $this->assign('wenjuan',$wenjuan);
        $this->assign('question',$question);
        $this->assign('option',$option);
        //$this->assign(['wj'=>json_encode($wj)]);
       return view('index@Release/qrcode',['id'=>$data['id'],'userid'=>$userid]);

    }
    //回收提交回来的表单数据
    public function subselect(Request $request){
        $data=$request->post();
        $res=array();
        $res2=array();
        if (array_key_exists('dd',$data)){
            $res=model('release')->addSelect($data);
            if (array_key_exists('db',$data)){
                $res2=model('release')->addText($data);
            }
        }else{
            if (array_key_exists('db',$data)){
                $res2=model('release')->addText($data);
            }
        }


        //dump($data);
        if ($res==true||$res2==true){
            return 1;
        }else{
            return 0;
        }
        //return view('index@Release/qrcode');
    }
//    public function subtext(Request $request){
//        $data=$request->post();
//        $res=model('release')->addText($data);
//        if ($res==true){
//            return true;
//        }else{
//            return false;
//        }
//        //dump($data);
//    }

    public function sucThank(){
        return view('index@release/success');
    }
}
