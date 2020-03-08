<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Test;
use Larfree\Services\SimpleLarfreeService;
use App\Models\Test\TestTestDetail;
class TestTestDetailService extends SimpleLarfreeService
{
    /**
     * @var TestTestDetail
     */
    protected $model;
    public function __construct(TestTestDetail $model )
    {
        $this->model = $model;
        parent::__construct();
    }
}