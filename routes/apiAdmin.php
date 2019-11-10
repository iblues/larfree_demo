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


//测试用
Route::resource('test/test', 'Admin\Test\TestController');

Route::resource('common/user', 'Admin\Common\UserController');//用户管理
Route::post('user/session', 'Admin\User\SessionController@store');//后台登录
//测试用
Route::delete('user/session', 'User\SessionController@loginout');//后台登录
/** 导航 */

Route::get('admin/nav/tree',  'Admin\Admin\Admin\NavController@tree');
Route::get('user/admin/{id}',  'Admin\Common\UserController@show');
Route::resource('admin/nav', 'Admin\Admin\NavController');
