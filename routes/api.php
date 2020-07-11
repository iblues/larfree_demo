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

Route::middleware('api.auth')->group(function (){
    Route::apiResource('common/user', 'Api\Common\UserController');//用户管理
    Route::apiResource('common/pay', 'Api\Common\PayController');//支付管理
    Route::apiResource('test/test', 'Api\Test\TestController');//自动添加-API
});
//需要命名个login. 否则验证会找不到login
Route::post('user/session', 'Api\User\SessionController@store')->name('login');



