<?php
/**
 * 其他可以用组建默认的参数
 * 也可以自己指定
 */
return [
    'detail' => [
        'table' => [
            'search' => [
                'id',
                'name',
                'phone',
                'email',

            ],
            'adv_search' => [
                'nickname',
                'brithday',
                'sex',
                'user_type',
            ],
            'fields' => [
                'id',
                'name',
                'nickname',
                'picture',
                'phone',
                'email',
                //'password',
                'brithday',
                'sex',
                'user_type',
//            'coupon',
                //'api_token',
                //'openid',
                //'remember_token',
                //'created_at',
                //'updated_at'
            ],
        ],
        'password' => [
            'fields' => [
                'password'
            ],
        ],
        'add' => [
            'fields' => [
                'name',
                'nickname',
                'picture',
                'phone',
                'email',
                //'password',
                'brithday',
                'sex',
                'user_type',
                //'own',
                //'api_token',
                //'openid',
                //'remember_token'
            ],
        ],
        'edit' => [
            'fields' => [
                'name',
                'nickname',
                'picture',
                'phone',
                'email',
                //'password',
                'brithday',
                'sex',
                'user_type',
//            'coupon',
                //'api_token',
                //'openid',
                //'remember_token'
            ],
        ],
        'detail' => [
            'fields' => [
                'id',
                'name',
                'nickname',
                'picture',
                'phone',
                'email',
                //'password',
                'brithday',
                'sex',
                'user_type',
                //'own',
                //'api_token',
                //'openid',
                //'remember_token',
                //'created_at',
                //'updated_at'
            ],
        ],
    ],
];
