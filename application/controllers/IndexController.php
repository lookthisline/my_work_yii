<?php

namespace app\controllers;

use common\controllers\BaseController;

class IndexController extends BaseController
{
	/**
	 * @path index/index
	 */
	public function actionIndex()
	{
		return ['id' => 123];
	}

	public function actionRouteRuleTest()
	{
		return ['route rule test'];
	}
}
