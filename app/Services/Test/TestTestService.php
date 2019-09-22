<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Test;
use Larfree\Services\LarfreeService;
use App\Repositories\Test\TestTestRepository;
class TestTestService extends LarfreeService
{
    /**
     * @var TestTestRepository
     */
    public $repository;
    public function __construct(TestTestRepository $repository )
    {
        $this->repository = $repository;
        parent::__construct();
    }
}