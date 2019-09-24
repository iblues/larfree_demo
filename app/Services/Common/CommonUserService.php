<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Common;
use App\Repositories\User\CommonUserRepository;
use Larfree\Services\LarfreeService;
class CommonUserService extends LarfreeService
{
    /**
     * @var CommonUserRepository
     */
    public $repository;
    public function __construct(CommonUserRepository $repository )
    {
        $this->repository = $repository;
        parent::__construct();
    }
}
