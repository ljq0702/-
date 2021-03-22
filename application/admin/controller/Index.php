<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\response\Json;

class Index extends Controller
{
    public function index()
    {
        return view('admin@index/index');
    }
    public function welcome(){
        $wenjuan_count=db('wenjuan')->count();
        $user_count=db('user')->count();
        $this->assign('wenjuan_count',$wenjuan_count);
        $this->assign('user_count',$user_count);
        return view('admin@index/welcome');
    }

    //查找用户的问卷信息
    public function wj(Request $request){
       //$data=$_POST;
        $id=$request->get();
//        //dump($id);
        ///dump($data);
       $wjList=db('wenjuan')->where('userid',$id['id'])->paginate('5',false,['query'=>['id'=>$id['id']]]);
        $page=$wjList->render();
        //dump($wjList);
       $this->assign('wjList',$wjList);
       $this->assign('page',$page);
        return view('admin@index/wj');
    }
    public function user(){
        //查找用户信息
        $res=db('user')->order('id','desc')->paginate('5');
        //dump($res);
        $this->assign('res',$res);
        return view('admin@index/user');
    }

    //查找所有问卷的信息
     public function wjAll(){
        $res=db('wenjuan')->order('userid','desc')->paginate('5');
        $page=$res->render();
        $this->assign('res',$res);
        $this->assign('page',$page);
        return view('admin@index/wjAll');
     }

     //查看页面信息
    public function show(Request $request){
        $data=$request->get();
        //dump($data);
        $res=db('showhtml')->where('paperid',$data['id'])->select();
        //dump($res);
        foreach ($res as $v){
            $html=$v['htmlcontent'];
            return json($html);
        }

        //dump($html);
        //echo json_encode($html);

    }

    //进行问卷审核
    public function audit(Request $request){
        $data=$request->get();
        //dump($data);
        db('wenjuan')->where('paperid',$data['id'])->update(['status'=>1]);
        return 1;
    }

    public function audit2(Request $request){
        $data=$request->get();
        //dump($data);
        db('wenjuan')->where('paperid',$data['id'])->update(['status'=>2]);
        return 1;
    }
}
