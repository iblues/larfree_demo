#安装Larfree

##1.发布资源

php artisan publish 

选择larfree

##2.添加中间件
kernel.php

     protected $middlewareGroups = [
            'api' => [
                ...
                \Larfree\Middleware\ApiFormat::class, //添加api中间件
            ],
      ];