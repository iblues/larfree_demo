<?php

namespace Tests\Feature;

use Iblues\AnnotationTestUnit\Libs\Console;
use Tests\TestCase;

/**
 * 基于配置方法.先一个个测试下是否正常访问
 * Class BaseOnRouterApiTest
 * @package Tests\Feature
 */
class BaseOnSchemasApiTest extends TestCase
{
    protected $prefix='/api/admin/';
    /**
     *后台验证
     */
    public function testAdmin()
    {
        //跳过的API
        $blackApiList = [
            'common/pay' => false,//后台不需要支付
            'test/test_detail' => false,
            'config/test' => false,
            'config/test_test' => false,
            'system/api_doc' => false,
            'system/component' => false,
            'system/config' => false,
        ];

        $this->loginAdmin();
        // 断言每个模块的get请求.初步建成
        $dirs = $this->dirToArray(schemas_path('/Schemas'));
        foreach ($dirs as $key => $dir) {
            foreach ($dir as $model) {
                //get APi
                $name = explode('.', $model);
                $url = strtolower($key) . '/' . lcfirst($name[0]);
                $url = humpToLine($url);
                $this->assertApi($url, $blackApiList);

                //base.table system/component/admin/nav/base.table
                $module = strtolower($key) . '.' . lcfirst($name[0]);
                $module = humpToLine($module);
                $url = "system/component/{$module}/base.table";
                $this->assertApi($url, $blackApiList);
                $url = "system/component/{$module}/base.edit";
                $this->assertApi($url, $blackApiList);
                $url = "system/component/{$module}/base.add";
                $this->assertApi($url, $blackApiList);
            }
        }
    }

    /**
     * 检查接口
     * @param $url
     * @param array $urlList
     * @throws \Exception
     * @author Blues
     *
     */
    public function assertApi($url, $urlList = [])
    {
        $fullUrl = $this->prefix.$url;
        //判断$url存在才执行验证操作,如果不存在就不执行验证操作
        if (@$urlList[$url]) {
            $url = $urlList[$url];
        } elseif (isset($urlList[$url]) && $urlList[$url] == false) {
            return ;
        }
        $response = $this->json('get', $fullUrl);
        try {
            $response->assertOk();
        } catch (\Exception $exception) {
            Console::error($url . ' T_T');
            $return = $response->getOriginalContent();
            if (@$return['message']) {
                Console::error($return['message']);
            }
            throw $exception;
        }
        ob_flush();


    }


    protected function dirToArray($dir)
    {
        $result = array();
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value, array(".", ".."))) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $result[$value] = $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                } else {
                    $result[] = $value;
                }
            }
        }
        return $result;
    }



}
