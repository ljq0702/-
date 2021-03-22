<?php

namespace app\index\model;

use think\Model;
use think\Db;
class User extends Model
{
    //验证用户登录
    public function checkUser(array $data)
    {
        $ret = $this->where('username',$data['username'])->find();
        if (!$ret)
        {
            return false;
        }
        //判断密码是否正确
        $pws=$ret['password'];
        $inputpass=md5($data['password']);
        if ($pws!=$inputpass)
        {
            return false;
        }
        //登录成功就保存在session中
        session('user',$ret);
        return true;

    }
    public function add(array $data)
    {
        $res=db('user')->where('username',$data['username'])->select();
        if ($res==null){
            $data['password']=md5($data['password']);
            $ret=Db::name('user')->insert($data);
            if(!$ret)
            {
                return 0;
            }else
            {
                return 1;
            }
        }else{
            return 2;
        }

    }

}
