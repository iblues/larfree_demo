<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * 返回JSON格式的Swagger定义
 *
 * @OA\Info(
 *     title="My First API",
 *      version="0.1"
 * )
 * @OA\Server(url="http://larfree.com/admin/")
 *
 *  @OA\SecurityScheme(
 *   securityScheme="jwt",
 *   type="apiKey",
 *   in="header",
 *   name="Authorization"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
