<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Common;
use App\Repositories\Common\CommonUserRepository;
use Illuminate\Http\Request;
use Larfree\Controllers\ApisController as Controller;
use App\Services\Common\CommonUserService;
class UserController extends Controller
{
    public function __construct(CommonUserRepository $repository ,CommonUserService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
        parent::__construct();
    }
}
