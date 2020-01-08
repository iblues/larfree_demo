<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Common;

use App\Repositories\Common\CommonUserRepository;
use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Services\Common\CommonUserService;
class UserController extends Controller
{
    /**
     * @var CommonUserService
     */
    protected $service;
    public function __construct(CommonUserService $service)
    {
        $this->service = $service;
        $this->service = $service->setAdmin();
        parent::__construct();
    }

    public function show($id,Request $request){
        if($id==0){
            $id = getLoginUserID();
        }
        return parent::show($id,$request);
    }
}
