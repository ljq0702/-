<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return view('index@index/login');
    }

    public function login()
    {
        return view('index@index/main');
    }

}
