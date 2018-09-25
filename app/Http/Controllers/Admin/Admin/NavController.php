<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Admin;

use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Models\Admin\AdminNav;
class NavController extends Controller
{
    public function __construct(AdminNav $model )
    {
        $this->model = $model;
        parent::__construct();
    }
}