<?php
return [
        'labels' => [
                'SlideCategory' => '幻灯分类',
                'slide-category' => '幻灯分类',
                'validate' => [
                        'title' => [
                                'required' => '请输入分组名称',
                                'max' => '分组名称最多 :max 个字符'
                        ],
                        'description' => [
                                'max' => '分组说明最多 :max 个字符'
                        ]
                ]
        ],
        'fields' => [
                'object_id' => '对象编号',
                'title' => '分组名称',
                'description' => '分组说明'
        ],
        'options' => []
];
