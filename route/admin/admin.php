<?php
//后台
use think\facade\Route;
Route::group(['prefix'=>'admin/','name'=>'admin'],function (){
    //登录
    Route::get('login','login/index')->name('admin/login/index');
    Route::post('login','login/loginHandler')->name('admin/login/loginHandler');
    Route::group(["middleware"=>["Check"]],function (){
        Route::get('index','index/index')->name('admin/index/index')->middleware(\app\http\middleware\Check::class);
        Route::get('welcome','index/welcome')->name('admin/index/welcome')->middleware(\app\http\middleware\Check::class);
        Route::get('user','index/user')->name('admin/index/user')->middleware(\app\http\middleware\Check::class);
        Route::get('wj','index/wj')->name('admin/index/wj')->middleware(\app\http\middleware\Check::class);
        Route::post('wj','index/wj')->name('admin/index/wj')->middleware(\app\http\middleware\Check::class);
        //所有问卷信息
        Route::get('wjAll','index/wjAll')->name('admin/index/wjAll')->middleware(\app\http\middleware\Check::class);
        Route::get('show','index/show')->name('admin/index/show')->middleware(\app\http\middleware\Check::class);
        //审核问卷
        Route::get('audit','index/audit')->name('admin/index/audit')->middleware(\app\http\middleware\Check::class);
        Route::get('audit2','index/audit2')->name('admin/index/audit2')->middleware(\app\http\middleware\Check::class);

    });

});

