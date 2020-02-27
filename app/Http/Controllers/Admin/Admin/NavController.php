<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Admin;

use Iblues\AnnotationTestUnit\Annotation as ATU;
use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Services\Admin\AdminNavService;
class NavController extends Controller
{
    /**
     * @var AdminNavService
     */
    public $service;
    public function __construct( AdminNavService $service )
    {
        $this->service = $service;
        $this->service->setAdmin();
        parent::__construct();
    }


    /**
     * 获取树状结构的菜单栏
     * @return array
     * @ATU\Api()
     */
    public function tree(){
        $nav = $this->service->getTreeNav();
        return $nav;
    }

}
