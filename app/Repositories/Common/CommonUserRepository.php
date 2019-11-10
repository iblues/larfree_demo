<?php

namespace App\Repositories\Common;

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

    /**
     * @author Blues
     * @param $phone
     * @return CommonUser
     */
    public function findByPhone($phone){
        return $this->model->where('phone',$phone)->first();
    }
}
