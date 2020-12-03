<?php
return [
        'labels' => [
                'Slide' => '幻灯',
                'slide' => '幻灯',
                'validate' => [
                        'category_id' => [
                                'required' => '请选择所属分类'
                        ],
                        'image' => [
                                'required' => '请上传幻灯图片'
                        ],
                        'title' => [
                                'max' => '幻灯标题最多 :max 个字符'
                        ]
                ]
        ],
        'fields' => [
                'category_id' => '所属分类',
                'object_id' => '对象编号',
                'image' => '幻灯图片',
                'title' => '幻灯标题',
                'url_type' => '链接类型',
                'url' => '链接'
        ],
        'options' => []
];
