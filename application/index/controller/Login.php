<?php

namespace app\index\controller;

use app\index\model\User;
use app\index\validate\UserValidate;
use think\Controller;
use think\facade\View;
use think\Request;

class Login extends Controller
{
    public function index()
    {
        return view('index@index/login');
    }
    //登录处理
    public function login(Request $request)
    {
        $data=$request->post();
        //验证
        $ret=$this->validate($data,UserValidate::class);
        //判断验证是否通过
        if (!$ret)
        {
            return $this->error('请重新输入');
        }
        //查询数据库
        $ret=model('user')->checkUser($data);
        if ($ret) {
            return view('index@index/main');
        }else
        {
            echo "<script>alert('你输入的用户名或密码不正确')</script>";
            return view('index@index/login');
        }
    }
    //添加数据
    public function ct(Request $request)
    {
        $data=$request->post();
        $ret=$this->validate($data,UserValidate::class);

        if (!$ret)
        {
            return $this->error('请重新输入');
        }
        //添加数据
        unset($data['__token__']);
        $ret=model('user')->add($data);
        if ($ret==0)
        {
            return $this->error('注册失败');
        }else if($ret==1)
        {
            echo "<script>alert('注册成功')</script>";
            return view('index@index/login');
        }else{
            echo "<script>alert('用户名存在')</script>";
            return view('index@index/login');
        }
    }
}
