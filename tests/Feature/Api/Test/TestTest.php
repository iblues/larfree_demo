<?php
/**
 * 基础API测试
 * @author blues
 */

namespace Tests\Feature\Api;

use Carbon\Carbon;
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
        $response = $this->json('GET', '/api/test/test');
        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
            ]);
    }

    public function testAdd()
    {
        $response = $this->json('POST', '/api/test/test',
            [
                'title' => 123,
                'content' => 321,
                'user_id' => 312,
                'upload' => '333',
                'file' => 321,
                'price' => 123,
                'float'=>0.2,
                'ip'=>'192.168.0.1',
                'datetime'=>Carbon::now()->toDateTimeString(),
            ]
        );

        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
                'data'=> true,
            ]);
        $data = json_decode($response->getContent());
        $id = $data->data->id;
        $this->update($id);
    }

    /**
     * 测试更新
     * @author Blues
     * @param $id
     */
    public function update($id){
        $response = $this->json('PUT', '/api/test/test/'.$id,
            [
                'title'=>1111,
                'users'=>[1,2]
            ]
            );

        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
            ]);

        $data = json_decode($response->getContent());
        $this->assertNotEquals(count($data->data->users),0);

        //继续删除测试
        $this->delete($id);
    }

    public function delete($id){
        $response = $this->json('delete', '/api/test/test/'.$id);

        $response
            ->assertStatus(200)
            ->assertJson([
                'code' => true,
            ]);
    }
}
