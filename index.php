<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//检查是否安装
if(!is_file('./Application/Install/Data/install.lock')){
    header('Location: ./install.php');
    exit;
}

//判断php版本
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//打开调试
define('APP_DEBUG',True);

// 定义模块目录
define('APP_PATH','./Application/');
//默认目录
define('BIND_MODULE', 'Home');
// 缓存模块
define('RUNTIME_PATH','./Runtime/');

// 引用框架
require './ThinkPHP/ThinkPHP.php';

