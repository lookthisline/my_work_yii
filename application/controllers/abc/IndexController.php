<?php

namespace app\controllers\abc;

class IndexController extends \yii\web\Controller
{
	/**
	 * @path abc/index/index
	 */
	public function actionIndex()
	{
		echo time();
	}
}
