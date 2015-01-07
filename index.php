<?php
// 应用入口文件
define('DIR_SECURE_FILENAME', 'default.html');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

define('BIND_MODULE', 'Home');
//define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
//define('BUILD_MODEL_LIST', 'User, Menu');

// 定义应用目录
define('APP_PATH','./App/');

define('COMMON_PATH', './Common/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
