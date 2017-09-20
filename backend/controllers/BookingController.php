<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Booking;


class BookingController extends Controller
{
   
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

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    
  
    public function actionIndex()
    {
        return $this->render('index');

    }
	public function actionShow()
	    {
		return $this->render('show', [

		]);
	}

	
	
 	public function actionTest()
    {
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);
    	
    	$query = Booking::find();
    	if($search != null){
    		$query->where(["type" => $search]);
    	}
    	
    	$result = $query->all();
    	echo $search;
    	 
    	return $this->render('test', [
    			'input' => $search,
    			'result' => $result
    			 
    	]);
    }
    
    public function actionDetail()
    {
    	
		$request = Yii::$app->request;
		$id = $request->get('id',null);
		$model = Booking::findOne($id);
		 
		return $this->render('detail', [
				'model' => $model,
		]);
    }
	
	
	
	
	
	

}
