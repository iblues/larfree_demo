<?php
/**
 * 没有任何逻辑的Model类
 * @author blues
 */

namespace App\Models\Common;

use Larfree\Models\ApiUser;
use Tymon\JWTAuth\Contracts\JWTSubject;

class CommonUser extends ApiUser implements JWTSubject
{

    /**
     * 手机号加密
     * @author Blues
     * @param $value
     * @return $this
     */
    public function setPasswordAttribute($value)
    {
        if ($value)
            $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT);
        else
            unset($this->attributes['password']);
        return $this;
    }

    /**
     * 获取jwt的主键
     * @author Blues
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    /**
     * @author Blues
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return ['test'=>123];
    }


    /**
     * @author Blues
     * @param $phone
     * @return CommonUser
     */
    static public function findByPhone($phone){
        return static::where('phone',$phone)->first();
    }


}
