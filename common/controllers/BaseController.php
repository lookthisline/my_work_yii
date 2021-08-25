<?php

namespace common\controllers;

use Exception;
use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
	public function __construct($id, $module, $config = [])
	{
		parent::__construct($id, $module, $config);
	}

	public function beforeAction($action)
	{
		// CORS
		if (Yii::$app->request->getIsOptions()) {
			$response = Yii::$app->response;
			try {
				$header = Yii::$app->request->getHeaders()->toArray();
				$response->headers->set('Access-Control-Allow-Methods', array_key_exists('access-control-request-method', $header) ? $header['access-control-request-method'] : 'GET,POST,OPTIONS,PUT,PATCH,DELETE');
				$response->headers->set('Access-Control-Allow-Headers', array_key_exists('access-control-request-headers', $header) ? $header['access-control-request-headers'] : 'Authorization,Content-Type,Accept,Origin,User-Agent,DNT,Cache-Control,X-Mx-ReqToken,Keep-Alive,X-Requested-With,If-Modified-Since');
			} catch (Exception $exception) {
				Yii::error(json_encode([
					'message' => $exception->getMessage(),
					'line'    => $exception->getLine(),
					'trace'   => $exception->getTraceAsString(),
				], JSON_UNESCAPED_UNICODE), 'option request filter');
			} finally {
				$response->statusCode = 204;
				// $response->data       = ['message' => 'successful'];
				$response->send();
			}
		}
		return parent::beforeAction($action);
	}

	public function behaviors()
	{
		return parent::behaviors();
	}
}
