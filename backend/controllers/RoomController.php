<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class RoomController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
		//             'access' => [
				//                 'class' => AccessControl::className(),
				//                 'rules' => [
						//                     [
								//                         'actions' => ['login', 'error'],
								//                         'allow' => true,
								//                     ],
						//                     [
								//                         'actions' => ['logout', 'index'],
								//                         'allow' => true,
								//                         'roles' => ['@'],
								//                     ],
						//                 ],
				//             ],
						//             'verbs' => [
								//                 'class' => VerbFilter::className(),
								//                 'actions' => [
										//                     'logout' => ['post'],
										//                 ],
								//             ],
		];
	}

	
	public function actionIndex()
	{
		$request = Yii::$app->request;
    	$search = $request->get('search',null);
    	 
    	$query = Room::find();
    	if($search != null){
    		$query->where(["name" => $search]);
    	}
    	$result = $query->all();
    	echo $search;
    	
    	return $this->render('index', [
    			'input' => $search,
    			'result' => $result
    	
    	]);
	}


}
