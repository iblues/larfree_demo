<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Common;

use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Repositories\Common\CommonPayRepository;
use App\Services\Common\CommonPayService;
class PayController extends Controller
{
    public function __construct(CommonPayRepository $repository, CommonPayService $service )
    {
        $this->repository = $repository;
        $this->service = $service->setAdmin();
        parent::__construct();
    }
}
