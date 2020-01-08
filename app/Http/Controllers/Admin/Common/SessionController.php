<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/22
 * Time: 15:53
 */

namespace App\Http\Controllers\Admin\Common;

use App\Models\Common\User;
use App\Repositories\Common\CommonUserRepository;
use App\Services\Common\CommonUserService;
use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController;

class SessionController extends AdminApisController
{

    public $in = [
        'store' => [
            'phone' => [
                'rule' => 'required|min:11|max:11'
            ],
            'password' => [
                'rule' => 'required'
            ]
        ],
    ];

    /**
     * @var CommonUserService
     */
    protected $service;

    public function __construct(CommonUserService $service)
    {
        $this->service = $service;
    }


    /**
     * @OA\Post(
     *   summary="用户登录",
     *   description="用户登录成功返回登录用户的数据",
     *   path="/user/session",
     *   tags={"用户相关"},
     *   @OA\Response(
     *     response="200",
     *     description="登录成功 md5:007e2d630723fb37e4afe441c3f84315",
     *   ),
     * )
     */
    public function store(Request $request)
    {

        $User = $this->service;

        $user = $User->findByPhone($request->phone);

        if (!$user) {
            apiError('该手机未注册');
        }

        try {
            if (!$token = JWTAuth::attempt($request)) {
                apiError("账号或者密码错误");
            }
        } catch (JWTException $e) {
            apiError("token 无法生成");
        }

        $user->api_token = $token;

        return Response()->success($user, '登录成功');
    }


    public function show($id, Request $request)
    {

    }

    public function index(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
