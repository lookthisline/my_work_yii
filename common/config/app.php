<?php

use yii\caching\FileCache;
use yii\log\FileTarget;
use yii\swiftmailer\Mailer;
use yii\web\JsonParser;

return [
	'timeZone'   => 'Asia/Shanghai',
	'components' => [
		'request' => [
			'parsers' => [
				'application/json' => JsonParser::class,
			],
		],
		'cache' => [
			'class' => FileCache::class,
		],
		'errorHandler' => [
			'errorAction' => null,
		],
		'mailer' => [
			'class' => Mailer::class,
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			// 'enableStrictParsing' => true, // 启用严格解析
			'showScriptName' => false, // 是否显示 index.php
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'       => FileTarget::class,
					'levels'      => ['error', 'warning'],
					'logFile'     => '@runtime/logs/error/' . date('Ymd') . '.log',
					'maxLogFiles' => 32,
					'logVars'     => ['*'],
				],
			],
		],
	],
	'bootstrap' => ['log'],
];
