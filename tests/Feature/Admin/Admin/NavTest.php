<?php
/**
 * 基础API测试
 * @author blues
 */

namespace Tests\Feature\Admin;
use Tests\TestCase;

class NavTest extends TestCase
{
    /**
     * 一个基础的功能测试示例。
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->json('GET', '/api/admin/admin/nav');
        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
            ]);
    }
}