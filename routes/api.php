<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('common/user', 'Api\Common\UserController');//自动添加-API
Route::resource('common/pay', 'Api\Common\PayController');//自动添加-API

Route::resource('admin/common/user', 'Admin\Common\UserController');//自动添加-ADMIN
Route::resource('admin/common/pay', 'Admin\Common\PayController');//自动添加-ADMIN
Route::resource('common/pay', 'Api\Common\PayController');//自动添加-API
Route::resource('admin/common/pay', 'Admin\Common\PayController');//自动添加-ADMIN
Route::resource('test/test', 'Api\Test\TestController');//自动添加-API
Route::resource('admin/test/test', 'Admin\Test\TestController');//自动添加-ADMIN
Route::resource('test/test_detail', 'Api\Test\TestDetailController');//自动添加-API
Route::resource('admin/test/test_detail', 'Admin\Test\TestDetailController');//自动添加-ADMIN