<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    //检查管理员是否登录
    public function checkAdmin(array $data){
        $ret=db('admin')->where('admin_name',$data['username'])->find();
        if (!$ret){
            return false;
        }
        //判断密码是否正确
        $pws=$ret['password'];
        if ($pws != $data['password']){
            return false;
        }
        session('admin.user',$ret);
        return true;
    }


}
