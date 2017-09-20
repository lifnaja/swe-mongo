<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Room;
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
    		$query->where(["type" => $search]);
    	}
    	$result = $query->all();
    	echo $search;
    	
    	return $this->render('index', [
    			'input' => $search,
    			'result' => $result
    	
    	]);
	}
	
	public function actionCreate()
	{
		return $this->render('create', [
				 
		]);
	}
	
	public function actionSave()
	{
		$request = Yii::$app->request;
		$id = $request->get('id',null);
		$roomID = $request->get('roomID',null);
		$type = $request->get('type',null);
		$price = $request->get('price',null);
		 
	
		$baseUrl = \Yii::getAlias('@web');
		if($id ==null){
			$model = new Room();
		}else{
			$model = Room::findOne($id);
		}
		$model->roomID = $roomID;
		$model->type = $type;
		$model->price = $price;
		if($model->save()){
			echo "success";
		}else{
			echo "unsuccess";
		}
		return $this->redirect($baseUrl."/room/index");
	}
	
	public function actionDelete()
	{
		$request = Yii::$app->request;
		$id = $request->get('id',null);
		$baseUrl = \Yii::getAlias('@web');
		 
		$model = Room::findOne($id);
		$model->delete();
		return $this->redirect($baseUrl."/room/index");
	}
	
	public function actionEdit()
	{
		$request = Yii::$app->request;
		$id = $request->get('id',null);
		$model = Room::findOne($id);
		 
		return $this->render('edit', [
				'model' => $model,
		]);
	}

}
