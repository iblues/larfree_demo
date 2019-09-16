<?php

namespace App\Repositories\User;

use App\Models\Common\CommonUser;
use App\Validators\Test\TestValidator;
use Larfree\Repositories\LarfreeRepository;

/**
 * Class TestRepositoryEloquent.
 *
 * @package namespace App\Repositories\Test;
 */
class UserRepository extends LarfreeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CommonUser::Class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
//        $this->pushCriteria(app(RequestCriteria::class));
    }

}
