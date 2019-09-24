<?php

namespace App\Repositories\User;

use App\Models\Common\CommonUser;
use App\Validators\Test\TestValidator;
use Larfree\Repositories\LarfreeRepository;

class CommonUserRepository extends LarfreeRepository
{

    /**
     * @var CommonUser
     */
    public $model;
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

    public function findByPhone($phone){
        $this->model->where('phone',$phone)->first();
    }
}
