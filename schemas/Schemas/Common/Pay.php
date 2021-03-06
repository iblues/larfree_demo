<?php
return [
    'detail'=>[
        
            'id'=>[
                'name'=>'id',
                'tip'=>'',
                'type'=>'text',
            ],
            'model'=>[
                'name'=>'Model地址',
                'tip'=>'',
                'type'=>'text',
            ],
            'price'=>[
                'name'=>'金额',
                'tip'=>'',
                'type'=>'text',
            ],
            'order_id'=>[
                'name'=>'订单号',
                'tip'=>'',
                'type'=>'text',
            ],
            'pay_id'=>[
                'name'=>'流水号',
                'tip'=>'',
                'type'=>'text',
            ],
            'user_id'=>[
                'name'=>'用户',
                'tip'=>'',
                'type'=>'select',
                'link'=>[
                    'model'=>[
                        'belongsTo',
                        'App\\Models\\Common\\CommonUser',
                        'user_id',
                        'id',
                    ],
                    'field'=>['id','name'],
                    'select'=>['id','name'],
                ]
            ],
            'pay_type'=>[
                'name'=>'支付方式',
                'tip'=>'',
                'type'=>'text',
            ],
            'created_at'=>[
                'name'=>'支付时间',
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