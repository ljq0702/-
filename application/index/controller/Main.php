<?php

namespace app\index\controller;

use think\Controller;
use think\facade\Session;
use think\Db;
use think\Request;

class Main extends Controller
{
    public function index()
    {
        return view('index@index/main');
    }
    public function manage()
    {
        $ret=Db::name('wenjuan')->select();
        $this->assign('ret',$ret);
        $userid=session('user')['id'];
        $list=Db::name('wenjuan')->where('userid',$userid)->order(['paperid'=>'desc'])->paginate(5);
        $page=$list->render();
        $this->assign('list',$list);
        $this->assign('page',$page);
        return $this->fetch('index@index/manage');
    }
    public function personal()
    {
        return view('index@index/personal');
    }
    public function person(Request $request){
        $data=$request->post();
        $user=db('user')->where('id',$data['uid'])->select();
        $wenjuan=db('wenjuan')->where('userid',$data['uid'])->count();
//        dump($user);
        $data2=array();
        foreach ($user as $value){
            $data2[]=['id'=>$value["id"],'username'=>$value["username"],'password'=>$value['password'],'count'=>$wenjuan];
        }
        return json_encode($data2);
    }
    public function statics()
    {
        $ret=Db::name('wenjuan')->select();
        $this->assign('ret',$ret);
        $userid=session('user')['id'];
        $list=Db::name('wenjuan')->where('userid',$userid)->order(['paperid'=>'desc'])->paginate(5);
        $page=$list->render();
        $this->assign('list',$list);
        $this->assign('page',$page);
        return view('index@index/statics');
    }
    public function logout()
    {
        Session::delete('user');
        return view('index@index/login');
    }

}
