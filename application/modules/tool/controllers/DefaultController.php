<?php

namespace app\modules\tool\controllers;

use yii\web\Controller;

/**
 * Default controller for the `tool` module
 */
class DefaultController extends Controller
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
