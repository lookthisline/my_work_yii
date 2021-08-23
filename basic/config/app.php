<?php

$params = file_exists(__DIR__ . '/params.php') ? require __DIR__ . '/params.php' : require $base_path . '/common/config/params.php';
$db     = file_exists(__DIR__ . '/db.php') ? require __DIR__ . '/db.php' : require $base_path . '/common/config/db.php';

$config = [
	'id'        => 'basic',
	'basePath'  => $app_path,
	'bootstrap' => ['log'],
	'aliases'   => [
		'@bower' => '@base_path/vendor/bower-asset',
		'@npm'   => '@base_path/vendor/npm-asset',
	],
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'DaYpmXo_ROUoUo_txYAcsMYd8YeSSHPD',
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'user' => [
			'identityClass'   => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			// 'errorAction' => 'site/error',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'db' => $db,
		// 'urlManager' => [
		// 	'enablePrettyUrl' => true,
		// 	'showScriptName' => false,
		// 	'rules' => [
		// 	],
		// ],
	],
	'params' => $params,
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
