<?php

namespace app\modules\tool\controllers;

use common\controllers\BaseController;

/**
 * Default controller for the `tool` module
 */
class DefaultController extends BaseController
{
	/**
	 * Renders the index view for the module
	 * @path tool/default/index
	 * @return string
	 */
	public function actionIndex()
	{
		echo 'this is tool module default controller index function';
		exit(0);
	}
}
