<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Test;
use Illuminate\Http\Request;
use Larfree\Controllers\ApisController as Controller;
use App\Models\Test\TestTest;
class TestController extends Controller
{
    public function __construct(TestTest $model)
    {
        $this->model = $model;
        parent::__construct();
    }


    /**
     * @OA\Put(
     *   summary="简介",
     *   description="请求该接口需要先登录。",
     *   path="/nav/{id}",
     *   tags={"分组"},
     *   security={{
     *     "jwt":{}
     *   }},
     *   @OA\Property(
     *      property="name",
     *      type="string",
     *      description="The product name"
     *   ),
     *   @OA\Response(
     *     response="200",
     *      description="An example resource"
     *   ),
     *     @OA\Parameter(
     *         name="title",
     *         in="query",
     *         description="描述",
     *         required=true,
     *         schema={"type":"array","items":{"type":"integer"}},
     *         examples="123",
     *     ),
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="描述",
     *         required=true,
     *         schema={"type":"integer"},
     *         examples="123",
     *     ),
     * )
     */
    public function index(Request $request)
    {
        return parent::index($request); // TODO: Change the autogenerated stub
    }
}