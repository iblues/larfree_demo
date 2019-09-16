<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AdminNav;
use App\Validators\Test\TestValidator;
use Larfree\Repositories\LarfreeRepository;

/**
 * Class TestRepositoryEloquent.
 *
 * @package namespace App\Repositories\Test;
 */
class NavRepository extends LarfreeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AdminNav::Class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
//        $this->pushCriteria(app(RequestCriteria::class));
    }


    /**
     * 返回后台的目录.
     * @author Blues
     * @param int $tree 树状结构
     * @return array
     */
    public function getAdminNav($tree=1){
        $nav = $this->model->where('status',1)->orderBy('ranking','desc')->get();
        $nav = $nav->toArray();
        if(!$tree)
            return $nav;
        return  listToTree($nav, 'id', 'parent_id', 'child');

    }

}
