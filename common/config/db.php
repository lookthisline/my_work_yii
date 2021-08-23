<?php

return [
	// 'tablePrefix' => 'module_',
	'class' => 'yii\db\Connection',
	// 当host为localhost时，mysql会采用unix domain socket连接；当host填写为127.0.0.1时，mysql会采用tcp方式连接；属于linux套接字网络的特性
	'dsn'      => 'mysql:host=127.0.0.1;dbname=my_work',
	'username' => 'root',
	'password' => '123456',
	'charset'  => 'utf8',
	// 'on afterOpen' => function ($event) {
	// 	// $event->sender refers to the DB connection
	// 	$event->sender->createCommand("SET time_zone = 'UTC'")->execute();
	// },

	// Schema cache options (for production environment)
	// 'enableSchemaCache'   => true,
	// 'schemaCacheDuration' => 60,
	// 'schemaCache'         => 'cache',
];
