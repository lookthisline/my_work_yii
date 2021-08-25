<?php

namespace app\controllers\abc;

use common\controllers\BaseController;

class IndexController extends BaseController
{
	/**
	 * @path abc/index/index
	 */
	public function actionIndex()
	{
		echo time();
	}

	public function actionRouteRuleTest()
	{
		return ['route rule test'];
	}
}
