<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use LarfreePermission\Models\User\UserAdmin;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function loginAdmin($id=null){
        if(!$id) {
            $user = UserAdmin::query()->first()->user;
            $this->actingAs($user);
        }
    }
}
