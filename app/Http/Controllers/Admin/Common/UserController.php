<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Common;

use Iblues\AnnotationTestUnit\Annotation as ATU;
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

    /**
     * @param $id
     * @param Request $request
     * @return \Larfree\Services\model
     * @throws \Exception
     * @author Blues
     *
     * @ATU\Api()
     */
    public function show($id,Request $request){
        if($id==0){
            $id = getLoginUserID();
        }
        return parent::show($id,$request);
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     * @author Blues
     * @ATU\Api(
     *
     * )
     */
    public function index(Request $request){
        return parent::index($request);
    }

}
