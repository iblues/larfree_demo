<?php
/**
 * Larfree Api类
 * @author blues
 */

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Larfree\Controllers\ApisController as Controller;

class SessionController extends Controller
{
    public $in = [
        'store' => [
            'phone' => [
                'name' => '手机号', // 无model支持.所以需要自定义名字
                'rule' => 'required'
            ],
            'password' => [
                'name' => '密码', // 无model支持.所以需要自定义名字
                'rule' => 'required'
            ]
        ]
    ];

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * 登录
     * @author Blues
     * @param Request $request
     * @return \Illuminate\Contracts\Auth\Authenticatable|mixed|null
     * @throws \Larfree\Exceptions\ApiException
     */
    public function store(Request $request)
    {
        $credentials = $request->only('phone', 'password');
        if (Auth::guard('api')->attempt($credentials)) {
            $this->setMsg('登录成功');
            return getLoginUser();
        }else{
            apiError('登录失败');
        }
    }
}
