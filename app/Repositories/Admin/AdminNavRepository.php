<?php

namespace App\Repositories\Admin;

use App\Events\Permission\FilterNavEvent;
use App\Models\Admin\AdminNav;
use App\Validators\Test\TestValidator;
use Larfree\Repositories\LarfreeRepository;

/**
 * Class TestRepositoryEloquent.
 *
 * @package namespace App\Repositories\Test;
 */
class AdminNavRepository extends LarfreeRepository
{
    /**
     * @var AdminNav
     */
    protected $model;
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


}
