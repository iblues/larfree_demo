<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Common;
use Larfree\Services\LarfreeService;
use App\Repositories\Common\CommonPayRepository;
class CommonPayService extends LarfreeService
{
    /**
     * @var CommonPayRepository
     */
    public $repository;
    public function __construct(CommonPayRepository $repository )
    {
        $this->repository = $repository;
        parent::__construct();
    }
}