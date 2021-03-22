<?php

namespace app\admin\controller;

use app\admin\validate\UserValidate;
use think\Controller;
use think\Request;

class Login extends Controller
{
    public function index(){
        return view('admin@login/index');
    }
    public function loginHandler(Request $request){
        $data=$request->post();
        //验证
        $ret=$this->validate($data,UserValidate::class);
        if (true !== $ret){
            return $this->error('请重新登录');
        }

        //调用admin模型的方法
        $ret=model('admin')->checkAdmin($data);
        if ($ret){
            return redirect('admin/index/index');
        }else{
            return $this->error("用户名或密码错误");
        }
    }
}
