<?php
return [
    'detail'=>[
        
            'id'=>[
                'name'=>'id',
                'tip'=>'',
                'type'=>'text',
            ],
            'name'=>[
                'name'=>'姓名',
                'tip'=>'',
                'type'=>'text',
            ],
            'nickname'=>[
                'name'=>'昵称',
                'tip'=>'',
                'type'=>'text',
            ],
            'picture'=>[
                'name'=>'头像',
                'tip'=>'',
                'type'=>'imgurl',
            ],
            'phone'=>[
                'name'=>'手机号',
                'tip'=>'',
                'type'=>'text',
                'rule'=>['required','min:2'=>'最小11位','max:10'=>'最大11位'],
            ],
            'email'=>[
                'name'=>'邮箱',
                'tip'=>'',
                'type'=>'text',
            ],
            'password'=>[
                'name'=>'密码',
                'tip'=>'',
                'type'=>'password',
            ],
            'brithday'=>[
                'name'=>'生日',
                'tip'=>'',
                'type'=>'date',
            ],
            'sex'=>[
                'name'=>'性别',
                'tip'=>'',
                'type'=>'select',
                'option'=>[1=>'男',2=>'女'],
            ],
            'user_type'=>[
                'name'=>'用户类型',
                'tip'=>'',
                'type'=>'text',
            ],
//            'coupon'=>[
//                'name'=>'优惠卷',
//                'tip'=>'',
//                'type'=>'select',
//                'link'=>[
//                    'model'=>[
//                        'belongsToMany',
//                        'App\\Models\\Shop\\ShopCoupon',
//                    ],
//                    'select'=>['id','name'],
//                    'field'=>['id','name']
//                ],
//                'multi'=>true,
//            ],
            'api_token'=>[
                'name'=>'api_token',
                'tip'=>'',
                'type'=>'text',
            ],
            'openid'=>[
                'name'=>'openid',
                'tip'=>'',
                'type'=>'text',
            ],
            'remember_token'=>[
                'name'=>'remember_token',
                'tip'=>'',
                'type'=>'text',
            ],
            'created_at'=>[
                'name'=>'created_at',
                'tip'=>'',
                'type'=>'timestamp',
            ],
            'updated_at'=>[
                'name'=>'updated_at',
                'tip'=>'',
                'type'=>'timestamp',
            ],
    ],
];