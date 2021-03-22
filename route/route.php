<?php
use think\facade\Route;
//Route::get('think', function () {
//    return 'hello,ThinkPHP5!';
//});
//
//Route::get('hello/:name', 'index/hello');
//
//return [
//
//];

//Route::group('admin',function (){
//    Route::get('login','@admin/login/index')->name('admin/login/index');
//    Route::post('login','@admin/login/loginHandler')->name('admin/login/index');
//});
    //登录页面
    Route::get('login','@index/login/index')->name('index/login/index');
    Route::post('login','@index/login/login')->name('index/login/index');
    Route::post('ct','@index/login/ct')->name('index/login/ct');

    Route::group(['middleware'=>['CheckLogin']],function (){
        Route::get('manage','@index/main/manage')->name('index/main/manage');
        Route::get('statics','@index/main/statics')->name('index/main/statics');
        Route::get('personal','@index/main/personal')->name('index/main/personal');
        Route::post('person','@index/main/person')->name('index/main/person');
        //主页
        Route::get('main','@index/main/index')->name('index/main/index');
        //安全退出处理
        Route::get('logout','@index/main/logout')->name('index/main/logout');
        //修改页面
        Route::get('edit','@index/edit/index')->name('index/edit/index');
        //问卷提交处理
        Route::post('edit','@index/edit/sub')->name('index/edit/sub');
        //页面提交
        Route::post('save','@index/edit/saveHtml')->name('index/edit/saveHtml');
        //访问问卷管理页面
        Route::post('del','@index/edit/del')->name('index/edit/del');
        //查看问卷
        Route::get('show','@index/edit/show')->name('index/edit/show');
        //修改问卷
        Route::post('upd','@index/edit/upd')->name('index/edit/upd');
        //发布问卷
        Route::get('release','@index/release/index')->name('index/release/index');

        Route::get('submit','@index/release/submit')->name('index/release/submit');

        //统计问卷
        Route::get('statistics','@index/statics/index')->name('index/statics/index');
        Route::get('clearCache','@index/cachec/clearCache')->name('index/cachec/clearCache');
    });
    //二维码扫描后的页面
Route::get('rs','@index/release/rs')->name('index/release/rs');
    //用户填写后提交的路由
Route::post('subselect','@index/release/subselect')->name('index/release/subselect');
Route::post('subtext','@index/release/subtext')->name('index/release/subtext');
//提交成功后，跳转页面
Route::get('sucThank','@index/release/sucThank')->name('index/release/sucThank');

    include route_path().'/admin/admin.php';



