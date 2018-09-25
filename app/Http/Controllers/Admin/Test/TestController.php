<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Test;

use App\Models\Test\TestTest;
use Illuminate\Http\Request;

use AdminApiController as Controller;

/**
 * @OA\Put(
 *   summary="简介",
 *   description="请求该接口需要先登录。",
 *   path="/admin/nav/{id}",
 *   tags={"string"},
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
class TestController extends Controller
{
    public function __construct(TestTest $model )
    {
        $this->model = $model;
        parent::__construct();
    }
}