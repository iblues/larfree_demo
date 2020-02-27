<?php
/**
 * Larfree Api类
 * @author blues
 */

namespace App\Http\Controllers\Admin\User;

use Iblues\AnnotationTestUnit\Annotation as ATU;
use Illuminate\Http\Request;
use Larfree\Controllers\ApisController as Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public $in = [
        'store' => [
            'phone' => [
                'name' => '邮箱地址', // 无model支持.所以需要自定义名字
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
     * @ATU\Api(
     *     title="后台登录接口",
     *     @ATU\Request({"phone":"18008010521","password":123}),
     *     @ATU\Response({"data":{"token":true}})
     * )
     */
    public function store(Request $request)
    {
        $credentials = $request->only('phone', 'password');
        if ($token = Auth::guard('api')->attempt($credentials)) {
            $this->setMsg('登录成功');
            $user = getLoginUser();
            $user->token = $token;
            return $user;
        } else {
            apiError('登录失败');
        }
    }

    public function loginout()
    {
        //前端清理掉token即可
        return '退出成功';
    }
}
