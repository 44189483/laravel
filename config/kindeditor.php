<?php
/**
 * Created by PhpStorm.
 * Author: ChenHua <Http://www.ichenhua.cn>
 * Date: 2018/6/15 11:31
 */

return [
    "default"     => 'local', //默认返回存储位置url
    "dirver"      => ['local'], //存储平台 ['local', 'qiniu', 'aliyun']
    "connections" => [
        "local"  => [
            'prefix' => 'uploads/kindeditor', //本地存储位置，默认uploads
        ],
        "qiniu"  => [
            'access_key' => '',
            'secret_key' => '',
            'bucket'     => '',
            'prefix'     => '', //文件前缀 file/of/path
            'domain'     => '' //七牛自定义域名
        ],
        "aliyun" => [
            'ak_id'     => '',
            'ak_secret' => '',
            'end_point'  => '',
            'bucket'    => '',
            'prefix'    => '',
        ],
    ],
];
