<?php
/**
 * 基础API测试
 * @author blues
 */

namespace Tests\Feature\Api;
use Tests\TestCase;

class TestDetailTest extends TestCase
{
    /**
     * 一个基础的功能测试示例。
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->json('GET', '/api/test/test_detail');
        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
            ]);
    }
}