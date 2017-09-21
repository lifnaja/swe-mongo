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
    	 
    	
    	if ($roomNot != null)
    	{
    		$i=0;
	    	foreach ($roomNot as $roomNum){
	    		$rn[$i] = $roomNum['roomID'];
	    		$i++;
	    	}
    	}
    	else 
    	{
    		$rn=0;
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
    			'stDate' => $checkin,
    			'endDate' => $checkOut,
    			'one' => $faBed,
    			'two' => $KingBed,
    			'three' => $SingleBed,
    	]);
    }
   
    
    public function actionSave()
    {
    	
    	$request = Yii::$app->request;
     	$id = $request->get('id',null);
    	$num1 = $request->get('one',null);
    	$num2 = $request->get('two',null);
    	$num3 = $request->get('three',null);
    	//หาจำนวนห้องที่จอง
    	$all=$num1+$num2+$num3;
    	
    	$checkin = $request->get('stDate',null);
    	$checkOut = $request->get('endDate',null);
   
    	$all=$num1+$num2+$num3;
    	
    	$userID = 1;
    	$nameWhobooK = "Qqw";
    	$bookDate = null;
    	$n="null";
    	
    	//หาเลขbookingID
    	$booking = Booking::find()->all();
    	$total = count((array)$booking);
    	$total++;
    	

    	//ห้องไม่ว่าง
    	$roomNot = DetailBooking::find()->where(['status'=> 1 ])
    	->andWhere(['>=', 'startDate', $checkin])
    	->andWhere(['<=', 'endDate', $checkOut])->all();
    	
    	
    	
    	if ($roomNot != null)
    	{
    		$i=0;
	    	foreach ($roomNot as $roomNum){
	    		$rn[$i] = $roomNum['roomID'];
	    		$i++;
	    	}
    	}
    	else 
    	{
    		$rn=0;
    	}

    	

    	$model = new Booking();
    	 
    	$model->bookingID = $total;
    	$model->bookingDate = $bookDate;
    	$model->userID = $userID;
    	$model->nameWhoBooK = $nameWhobooK;
    	
    	$bookingdetail =[];
    	$j=0;
    	//family bedroom
    	if($num1!=0){
    		$roomBusyByType	= Room::find()->where(['not in','roomID',$rn])
    		->andWhere(['type' => "2 king bed"])
    		->limit($num1)
    		->all();

    		$i=0;
    		foreach ($roomBusyByType as $roomID){
    			$room[$i] = $roomID['roomID'];
    			$i++;
    		}
    		 
    		
    		for ($i=0; $i<$num1 ; $i++){
    			$bookingdetail[$j]['roomID'] = $room[$i];
    			$bookingdetail[$j]['startDate'] = $checkin;
   	    		$bookingdetail[$j]['endDate'] =  $checkOut;
    		  	$bookingdetail[$j]['Checkin'] = $n;
    		   	$bookingdetail[$j]['CheckOut'] = $n;
    		    $bookingdetail[$j]['Paydate'] = $n;
    		   	$bookingdetail[$j]['Pay'] = $n;
    		   	$j++;
    		  }
    
    	}

    	if($num2!=0){
    		$roomBusyByType	= Room::find()->where(['not in','roomID',$rn])
    		->andWhere(['type' => "1 king bed"])
    		->limit($num2)
    		->all();
    		

    		$i=0;
    		foreach ($roomBusyByType as $roomID){
    			$room[$i] = $roomID['roomID'];
    			$i++;
    		}
    		 
    		
    		for ($i=0; $i<$num2 ; $i++){
    			$bookingdetail[$j]['roomID'] = $room[$i];
    			$bookingdetail[$j]['startDate'] = $checkin;
    			$bookingdetail[$j]['endDate'] =  $checkOut;
    			$bookingdetail[$j]['Checkin'] = $n;
    			$bookingdetail[$j]['CheckOut'] = $n;
    			$bookingdetail[$j]['Paydate'] = $n;
    			$bookingdetail[$j]['Pay'] = $n;
    			$j++;
    		}
    	
    	}

    	if($num3!=0){
    		$roomBusyByType	= Room::find()->where(['not in','roomID',$rn])
    		->andWhere(['type' => "2 single bed"])
    		->limit($num3)
    		->all();
    		 

    		$i=0;
    		foreach ($roomBusyByType as $roomID){
    			$room[$i] = $roomID['roomID'];
    			$i++;
    		}
    	
    	
    		for ($i=0; $i<$num3 ; $i++){
    			$bookingdetail[$j]['roomID'] = $room[$i];
    			$bookingdetail[$j]['startDate'] = $checkin;
    			$bookingdetail[$j]['endDate'] =  $checkOut;
    			$bookingdetail[$j]['Checkin'] = $n;
    			$bookingdetail[$j]['CheckOut'] = $n;
    			$bookingdetail[$j]['Paydate'] = $n;
    			$bookingdetail[$j]['Pay'] = $n;
    			$j++;
    		}
    			
    	}
    	
    	$model->detailBooking = $bookingdetail;
    	$model->save();
    	
    	
    	return $this->render('save', [
    			'model' => $roomBusyByType,
    	]);
    }
    
    public function actionEditdetail()
    {
    
    	$request = Yii::$app->request;
    	$id = $request->get('id',null);
    	$index = $request->get('index',null);
    	$model = Booking::findOne($id);
    
    	$i=0;
    	foreach ($model->detailBooking as $abc)
    	{
    		if($i<=$index){
    			$detail = $abc;
    		}
    		$i++;
    	}
    
    
    	return $this->render('editdetail', [
    			'model' => $detail,
    			'index' => $index,
    	]);
    }
    
    public function actionSavecheckin()
    {
    
    	$request = Yii::$app->request;
    	$id = $request->get('id',null);
    	$index = $request->get('index',null);
    	$model = Booking::findOne($id);
    
    	$i=0;
    	foreach ($model->detailBooking as $abc)
    	{
    		if($i<=$index){
    			$detail = $abc;
    		}
    		$i++;
    	}
    
    
    	return $this->render('editdetail', [
    			'model' => $detail,
    			'index' => $index,
    	]);
    }
	

}
