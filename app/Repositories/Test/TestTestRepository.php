<?php

namespace App\Repositories\Test;

use App\Models\Test\TestTest;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\Test\TestValidator;
use Larfree\Repositories\LarfreeRepository;

/**
 * Class TestRepositoryEloquent.
 *
 * @package namespace App\Repositories\Test;
 */
class TestTestRepository extends LarfreeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TestTest::Class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
//        $this->pushCriteria(app(RequestCriteria::class));
    }

}
