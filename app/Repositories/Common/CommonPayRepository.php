<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Repositories\Common;
use Larfree\Repositories\LarfreeRepository;
use App\Models\Common\CommonPay;
class CommonPayRepository extends LarfreeRepository
{
    /**
     * @var CommonPay
     */
    public $model;
    
    /**
     * 可以指定为其他的model
     * @return string
     */
    public function model()
    {
        return CommonPay::Class;
    }
}