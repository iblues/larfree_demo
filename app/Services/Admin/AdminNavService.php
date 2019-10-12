<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Admin;
use Larfree\Services\LarfreeService;
use App\Repositories\Admin\AdminNavRepository;
class AdminNavService extends LarfreeService
{
    /**
     * @var AdminNavRepository
     */
    public $repository;
    public function __construct(AdminNavRepository $repository )
    {
        $this->repository = $repository;
        parent::__construct();
    }

    public function getTreeNav()
    {
        return $this->repository->getTreeNav();
    }

}
