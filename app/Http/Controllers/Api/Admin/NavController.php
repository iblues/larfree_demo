<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Api\Admin;
use Illuminate\Http\Request;
use ApiController as Controller;
use App\Models\Admin\AdminNav;
class NavController extends Controller
{
    public function __construct(AdminNav $model)
    {
        $this->model = $model;
        parent::__construct();
    }
}