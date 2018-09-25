<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Test;
use Illuminate\Http\Request;
use ApiController as Controller;
use App\Models\Test\TestTest;
class TestController extends Controller
{
    public function __construct(TestTest $model)
    {
        $this->model = $model;
        parent::__construct();
    }
}