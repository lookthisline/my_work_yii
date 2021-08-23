<?php

use yii\helpers\ArrayHelper;
use yii\web\Application;

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$app_path  = dirname(__DIR__);
$base_path = dirname($app_path);

require $base_path . '/vendor/autoload.php';
require $base_path . '/vendor/yiisoft/yii2/Yii.php';
require $base_path . '/common/config/bootstrap.php';

$config = ArrayHelper::merge(
	require $app_path . '/config/app.php',
	require $base_path . '/common/config/app.php',
);

(new Application($config))->run();
