<?php

namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
	/**
	 * @path index/index
	 */
	public function actionIndex()
	{
		echo date('Y-m-d');
	}
}
