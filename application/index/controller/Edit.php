<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\facade\Session;
use think\Request;
use app\index\model\Wenjuan;

class Edit extends Controller
{
    public function index()
    {
        return view('index@index/edit');
    }
    //提交问卷数据
    public function sub(Request $request)
    {
        //获取页面传来的post数据
        $data=$request->post();
        //获取用户登录的session的id
        $data[]=['id'=>session('user')['id']];
        //调用wenjuan模型，请求数据库数据
        $wenjuanid=model('wenjuan')->addTo($data);
        model('wenjuan')->addxx($data,$wenjuanid);

        //return view('index@index/manage');
    }
    //保存问卷页面
    public function saveHtml(Request $request){
        $data=$request->post();
        model('wenjuan')->saveHtml($data);

        //dump($data);

    }
    //删除操作
    public function del(Request $request){
        $data=$request->post();
        model('wenjuan')->del($data);
    }
    //查看页面
    public function show(Request $request){
        $data=$request->get();
        $htmljson=model('wenjuan')->show($data);
        return $htmljson;
        //dump($data);
        //return view('index@index/show');
    }
    //修改问卷
    public function upd(Request $request){
        $data=$request->post();
        //dump($data);
        model('wenjuan')->upd($data);
    }
}
