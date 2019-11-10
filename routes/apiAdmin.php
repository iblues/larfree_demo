<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| 后台API
|--------------------------------------------------------------------------
|
| 自动加了admin前缀
|
*/

Route::post('user/session', 'User\SessionController@store');//后台登录

Route::middleware('api.auth')->group(function () {
    Route::resource('test/test', 'Admin\Test\TestController');//测试用

    Route::resource('common/user', 'Admin\Common\UserController');//用户管理
    Route::get('user/admin/{id}', 'Admin\Common\UserController@show');//获取当前用户信息
    Route::post('user/session', 'Admin\User\SessionController@store');//后台登录
    Route::delete('user/session', 'Admin\User\SessionController@loginout');//后台退出

    Route::get('admin/nav/tree', 'Admin\Admin\NavController@tree');//树桩导航
    Route::resource('admin/nav', 'Admin\Admin\NavController');//导航管理
    /* 新增的导航请写在这里*/
});

/* 以下需要整理自行完善 */
