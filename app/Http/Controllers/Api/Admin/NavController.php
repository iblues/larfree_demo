<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Admin;
use Illuminate\Http\Request;
use Larfree\Controllers\ApisController as Controller;
use App\Repositories\Admin\AdminNavRepository;
use App\Services\Admin\AdminNavService;
class NavController extends Controller
{
    public function __construct(AdminNavRepository $repository ,AdminNavService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
        parent::__construct();
    }
}