<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Test;
use App\Models\Test\TestTest;
use App\Repositories\Test\TestTestRepository;
use Larfree\Services\SimpleLarfreeService;

class TestTestService extends SimpleLarfreeService
{
    /**
     * @var TestTest
     */
    protected $model;
    public function __construct(TestTest $model )
    {
        $this->model = $model;
        parent::__construct();
    }
}
