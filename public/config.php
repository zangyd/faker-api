<?php
/**
 * @copyright   Copyright (c) ZacharyAll rights reserved.
 *
 * Faker    全局配置文件
 *
 * @author      zachary <zangyd@163.com>
 * @date        2020/6/7
 */

// 公共文件夹目录,index.php目录更换后需要改动
define('APP_PUBLIC_PATH', '');


define('BIND_MODULE', 'api');

/**
 * 检查是否安装
 * 在未安装完成之前,除"index"模块外,访问其他模块都会报错
 */
$path = APP_PATH . 'install/data';

if (file_exists($path) && !is_file($path . '/install.lock')) {
    define('BIND_MODULE', 'install');
}