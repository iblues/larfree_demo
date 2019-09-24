<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Common;

use App\Repositories\User\CommonUserRepository;
use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Services\Common\CommonUserService;
class UserController extends Controller
{
    /**
     * UserController constructor.
     * @param CommonUserRepository $repository
     * @param CommonUserService $service
     */
    public function __construct(CommonUserRepository $repository, CommonUserService $service )
    {
        $this->repository = $repository;
        $this->service = $service;
        parent::__construct();
    }
}
