<?php

return [
	// 方式一
	// 'GET,POST test' => 'abc/index/route-rule-test', // {{host}}/test
	// 'index-test' => 'index/route-rule-test', // {{host}}/index-test
	// 方式二
	// [
	// 	// 对控制器的方法重命名
	// 	// {{host}}/abc/index/test
	// 	'class'         => \yii\rest\UrlRule::class,
	// 	'controller'    => ['abc/index'],
	// 	'pluralize'     => false,
	// 	'extraPatterns' => [
	// 		'GET,POST test' => 'route-rule-test',
	// 	],
	// ],
];
