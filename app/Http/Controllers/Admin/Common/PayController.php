<?php
/**
 * Larfree Api类
 * @author blues
 */
namespace App\Http\Controllers\Admin\Common;

use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Models\Common\CommonPay;

class PayController extends Controller
{
    public function __construct(CommonPay $model )
    {
        $this->model = $model;
        parent::__construct();
    }
}