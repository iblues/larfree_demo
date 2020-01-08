<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Admin;
use App\Models\Admin\AdminNav;
use App\Repositories\Admin\AdminNavRepository;
use Larfree\Services\SimpleLarfreeService;

class AdminNavService extends SimpleLarfreeService
{
    /**
     * @var AdminNav
     */
    protected $model;
    public function __construct(AdminNav $model )
    {
        $this->model = $model;
        parent::__construct();
    }

    public function getTreeNav()
    {
        return $this->model::getTreeNav($this->model);
    }

}
