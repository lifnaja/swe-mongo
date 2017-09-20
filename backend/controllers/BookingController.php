<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Booking;
use backend\models\DetailBooking;
use backend\models\Room;


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
	
	
    public function actionShow()
    {
    	$baseUrl = \Yii::getAlias('@web');
    	 
    	$request = Yii::$app->request;
    	$checkin = $request->get('CIn',null);
    	$checkOut = $request->get('COut',null);
    	
    	//ห้องไม่ว่าง
    	$roomNot = DetailBooking::find()->where(['status'=> 1 ])
    	->andWhere(['>=', 'startDate', $checkin])
    	->andWhere(['<=', 'endDate', $checkOut])->all();
    	 
    	$i=0;
    	
    	foreach ($roomNot as $roomNum){
    		$rn[$i] = $roomNum['roomID'];
    		$i++;
    	}

    	
    	//ห้องที่ว่าง
    	$query = Room::find()->where(['not in','roomID',$rn])->all();
    	
    	//หาจำนวนห้องว่างแต่ละประเภท
    	$faBed=0;
    	$KingBed=0;
    	$SingleBed=0;
    	foreach ($query as $room){
    		if($room['type']== "2 king bed")
    		{
    			$faBed++;
    		}
    		elseif ($room['type']=="1 king bed")
    		{
    			$KingBed++;
    		}else {
    			$SingleBed++;
    		}
    	}
    	
    	
    	return $this->render('show', [
    			'rn' => $rn,
    			'one' => $faBed,
    			'two' => $KingBed,
    			'three' => $SingleBed,
    	]);
    }
   
	

}
