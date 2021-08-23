<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'], true)) {
	die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

$app_path  = dirname(__DIR__);
$base_path = dirname($app_path);

require $base_path . '/vendor/autoload.php';
require $base_path . '/vendor/yiisoft/yii2/Yii.php';
require $base_path . '/common/config/bootstrap.php';

$config = file_exists($app_path . '/config/test.php') ? require $app_path . '/config/test.php' : require $base_path . '/common/config/test.php';
(new yii\web\Application($config))->run();
