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
Route::resource('test/test', 'Test\TestController');

Route::resource('common/user', 'Common\UserController');//用户管理
Route::post('user/session', 'User\SessionController@store');//后台登录
