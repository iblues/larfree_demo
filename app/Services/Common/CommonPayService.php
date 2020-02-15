<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */

namespace App\Services\Common;

use App\Models\Common\CommonPay;
use App\Repositories\Common\CommonPayRepository;
use Larfree\Services\SimpleLarfreeService;

class CommonPayService extends SimpleLarfreeService
{
    /**
     * @var CommonPay
     */
    public $model;

    public function __construct(CommonPay $model)
    {
        $this->model = $model;
        parent::__construct();
    }
}
