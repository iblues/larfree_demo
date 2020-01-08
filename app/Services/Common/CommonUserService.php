<?php
/**
 * 仓库类. 所有数据交互通过此模式
 * @author blues
 */
namespace App\Services\Common;
use App\Models\Common\CommonUser;
use Larfree\Services\SimpleLarfreeService;
class CommonUserService extends SimpleLarfreeService
{
    /**
     * @var CommonUser
     */
    public $model;
    public function __construct(CommonUser $model )
    {
        $this->model = $model;
        parent::__construct();
    }

    public function findByPhone($phone){
        return $this->model->link()->where('phone',$phone)->first();
    }

}
