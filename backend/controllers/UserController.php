<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\User;
/**
 * Site controller
 */
class UserController extends Controller
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
    	 
    	$query = User::find();
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
		$LastName = $request->get('lastname',null);
		$FirstName = $request->get('firstname',null);
		$identity = $request->get('identity',null);
		$phone = $request->get('phone',null);
		$address = $request->get('address',null);
		$email = $request->get('email',null);
		$username = $request->get('username',null);
		$password = $request->get('password',null);
		$type = "1";
	
		$baseUrl = \Yii::getAlias('@web');
		if($id ==null){
			$model = new User();
		}else{
			$model = User::findOne($id);
		}
		
		$model->LastName = $LastName;
		$model->FirstName = $FirstName;
		$model->identity = $identity;
		$model->phone = $phone;
		$model->address = $address; 
		$model->email =  $email; 
		$model->username =  $username;
		$model->password = $password;
		$model->type = $type;
		
		if($model->save()){
			echo "success";
		}else{
			echo "unsuccess";
		}
		return $this->redirect($baseUrl."/user/index");
	}
	
	public function actionDelete()
	{
		$request = Yii::$app->request;
		$id = $request->get('id',null);
		$baseUrl = \Yii::getAlias('@web');
		 
		$model = User::findOne($id);
		$model->delete();
		return $this->redirect($baseUrl."/user/index");
	}
	
	public function actionEdit()
	{
		$request = Yii::$app->request;
		$id = $request->get('id',null);
		$model = User::findOne($id);
		 
		return $this->render('edit', [
				'model' => $model,
		]);
	}

}
