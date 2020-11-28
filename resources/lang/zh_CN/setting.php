<?php

return [
    'labels' => [
        'setting' => '系统设置',
        'tabs'    => [
            'basic' => '网站基本设置',
            'email' => '邮件设置',
        ],
        'fields_help' => [
            'site_title'       => '网站标题一般不超过 80 个字符',
            'site_short_title' => '网站简称用于在网页上引用时使用',
            'site_keywords'    => '网站关键字一般不超过 100 个字符',
            'site_description' => '网站描述一般不超过 200 个字符',
            'site_url'         => '网站中所有链接将使用此域名为根，请以 http(s):// 开头',
            'site_icp'         => '网站域名的工信部 ICP 备案号，主机在中国大陆境内需要展示此信息',
            'header_code'      => '附加在全站头部的代码，可添加自定义样式或需要先行执行的脚本代码',
            'footer_code'      => '附加在全站底部的代码，可添加流量统计、在线客服等代码',
            'email_account'    => '请确认邮箱已开通 SMTP 发信功能',
            'email_password'   => '此项将加密保存，请放心填写，建议使用邮箱的客户端授权码，而非邮箱主密码',
        ],
    ],
    'fields' => [
        'site_title'       => '网站标题',
        'site_short_title' => '网站简称',
        'site_logo'        => '网站LOGO',
        'site_keywords'    => '网站关键词',
        'site_description' => '网站描述',
        'site_url'         => '网站地址',
        'site_icp'         => '网站ICP备案号',
        'header_code'      => '头部附加代码',
        'footer_code'      => '底部附加代码',
        'email_smtp'       => 'SMTP地址',
        'email_port'       => 'SMTP端口',
        'email_account'    => '发信账号',
        'email_password'   => '发信密码',
        'email_nickname'   => '发信昵称',
    ],
    'options' => [],
];
