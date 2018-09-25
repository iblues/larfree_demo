<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Test;
use Illuminate\Http\Request;
use ApiController as Controller;
use App\Models\Test\TestTestDetail;
class TestDetailController extends Controller
{
    public function __construct(TestTestDetail $model)
    {
        $this->model = $model;
        parent::__construct();
    }
}