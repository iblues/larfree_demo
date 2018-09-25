<?php
/**
 * 基础API测试
 * @author blues
 */

namespace Tests\Feature\Api;
use Tests\TestCase;

class TestTest extends TestCase
{
    /**
     * 一个基础的功能测试示例。
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->json('GET', '/api/test/test', ['name' => 'Sally']);
        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
            ]);
    }
}