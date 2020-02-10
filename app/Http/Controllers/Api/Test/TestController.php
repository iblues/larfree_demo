<?php
/**
 * Larfree Api类
 * @author blues
 */

namespace App\Http\Controllers\Api\Test;

use App\UserController;
use Iblues\AnnotationTestUnit\Annotation as ATU;
use Illuminate\Http\Request;
use Larfree\Controllers\ApisController as Controller;
use App\Repositories\Test\TestTestRepository;
use App\Services\Test\TestTestService;

class TestController extends Controller
{
    public function __construct(TestTestService $service)
    {
        $this->service = $service;
        parent::__construct();
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     * @author Blues
     * @ATU\Api(
     *     @ATU\Request(),
     *     @ATU\Response(200,{
     *      "code":true,
     *      "data":{{"id":true,"user":true}}
     *     }),
     * )
     *
     *
     * @ATU\Api(
     *     @ATU\Now(),
     *     @ATU\Response({
     *      "data":true,"status":1
     *     }),
     * )
     *
     * 验证权限中间件
     * @ATU\Api(
     *     @ATU\Now(),
     *     @ATU\Login(false),
     *     @ATU\Response(401),
     * )
     */
    public function index(Request $request)
    {
        return parent::index($request); // TODO: Change the autogenerated stub
    }

    /**
     *  没有路由的方法,用来测试ATU用
     *  @ATU\Api(
     *     @ATU\Ignore
     * )
     */
    public function noRoute(){
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     * @author Blues
     * @ATU\Api(
     *     path=@ATU\GetParam("test.id"),
     *     method="GET",
     *     @ATU\Before("createTest"),
     *     @ATU\Response({
     *      "status":1,
     *      "data":{"title":@ATU\GetParam("test.title")},
     *     }),
     *     @ATU\Assert("assertDatabaseHas",{"test_test",{"title":@ATU\GetParam("test.title")} }),
     * )
     */
    public function show($id, Request $request)
    {
        return parent::show($id, $request); // TODO: Change the autogenerated stub
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     * @author Blues
     * @ATU\Api(
     *     @ATU\Before("createTest",{"param":"not use"}),
     *     @ATU\Request({"title":"测试","content":@ATU\GetParam("test.title"),"user_id":"123"}),
     *     @ATU\Response({
     *        "data":{"id":true,"title":@ATU\GetRequest("title")}
     *       },
     *       @ATU\Assert("assertSee",{"测试"}),
     *       @ATU\Assert("assertSee",{@ATU\GetRequest("title")}),
     *       @ATU\Assert("assertJson", {{"data":@ATU\GetRequest}} ),
     *       @ATU\Assert("assertOk"),
     *     ),
     *     @ATU\Assert("assertDatabaseHas",{"test_test",{"id":1}} ),
     *     @ATU\Assert("assertDatabaseHas",{"test_test",@ATU\GetRequest()} ),
     *     @ATU\Assert("assertDatabaseHas",{"test_test",
     *      { "title" : @ATU\GetResponse("data.title") }
     *     }),
     * ),
     *
     * @ATU\Api(
     *     @ATU\Request({"title":1}),
     *     @ATU\Response(422,{
     *      "data":{"title":true}
     *     })
     * )
     */
    public function store(Request $request)
    {
        return parent::store($request); // TODO: Change the autogenerated stub
    }
}
