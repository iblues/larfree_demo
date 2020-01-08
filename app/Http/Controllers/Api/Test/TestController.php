<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Test;
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
}
