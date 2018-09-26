#安装Larfree

##1.发布资源

php artisan publish 

选择larfree

##2.添加中间件
kernel.php

     protected $middlewareGroups = [
            'api' => [
                ...
                \Larfree\Middleware\ApiFormat::class, //Api格式化用
                \Larfree\Middleware\ApiDoc::class,  //记录返回格式用的
            ],
      ];