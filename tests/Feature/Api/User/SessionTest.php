<?php

namespace Tests\Feature\Api\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->testError();
        $this->testLogin();
    }

    /**
     * 测试必填规则
     * @author Blues
     */
    public function testError()
    {
        $response = $this->post('/api/user/session', []);
        $response->assertStatus(422);
    }

    /**
     * 测试登录
     * @author Blues
     */
    public function testLogin()
    {
        $response = $this->post('/api/user/session',
            [
                'phone' => '18008010521',
                'password' => '123'
            ]
        );
        $response->assertStatus(200);
    }
}
