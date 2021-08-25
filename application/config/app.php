<?php

use app\modules\tool\Module as ToolModule;

$params = file_exists(__DIR__ . '/params.php') ? require __DIR__ . '/params.php' : require $base_path . '/common/config/params.php';
$db     = file_exists(__DIR__ . '/db.php') ? require __DIR__ . '/db.php' : require $base_path . '/common/config/db.php';
$router = require_once __DIR__ . '/router.php';

$config = [
	'id'           => 'application',
	'basePath'     => $app_path,
	'bootstrap'    => ['log'],
	'defaultRoute' => 'index',
	'aliases'      => [
		'@bower' => $base_path . '/vendor/bower-asset',
		'@npm'   => $base_path . '/vendor/npm-asset',
	],
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey'    => 'DaYpmXo_ROUoUo_txYAcsMYd8YeSSHPD',
			'enableCookieValidation' => false, // 禁用 cookie 校验
			'enableCsrfValidation'   => false, // 禁用 csrf 校验
		],
		'response' => [
			'format' => 'json',
		],
		'user' => [
			// 'identityClass'   => 'app\models\User',
			'enableSession'   => false, // user组件禁用 session
			'enableAutoLogin' => false, // user组件禁用自动登录
		],
		'db'         => $db,
		'urlManager' => [
			'rules' => $router,
		],
	],
	'params'  => $params,
	'modules' => [
		// 载入自定义模块 tool
		'tool' => [
			'class'        => ToolModule::class,
			'defaultRoute' => 'index',
		],
	],
];

if (YII_ENV_DEV) {
	$config['bootstrap'][]      = 'debug'; // 启动项目时加载此模块
	$config['modules']['debug'] = [
		'class' => 'yii\debug\Module',
		// uncomment the following to add your IP if you are not connecting from localhost.
		//'allowedIPs' => ['127.0.0.1', '::1'],
	];

	$config['bootstrap'][]    = 'gii'; // 启动项目时加载此模块
	$config['modules']['gii'] = [
		'class' => 'yii\gii\Module',
		// uncomment the following to add your IP if you are not connecting from localhost.
		//'allowedIPs' => ['127.0.0.1', '::1'],
	];
}

return $config;
