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
   
	
 	public function actionHistory()
    {
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);
    	
    	$query = Booking::find();
    	
    	$result = $query->all();
    	
    	 
    	return $this->render('history', [
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
				'idOb'	=> $id,
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
    		if($room['type']== "Family Bedroom")
    		{
    			$faBed++;
    		}
    		elseif ($room['type']=="King Size Bedroom")
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
    	$nameWhoBook = $request->get('nameWhoBook',null);
    	//หาจำนวนห้องที่จอง
    	$all=$num1+$num2+$num3;
    	
    	$checkin = $request->get('stDate',null);
    	$checkOut = $request->get('endDate',null);
   
    	$all=$num1+$num2+$num3;
    	
    	$userID = "59c47db50974f718640079e6";
    	
    	$date = new \DateTime();
    	$bookDate = $date->format('Y-m-d');
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

    	
		//booking
    	$model = new Booking();
    	 
    	$model->bookingID = $total;
    	$model->bookingDate = $bookDate;
    	$model->userID = $userID;
    	$model->nameWhoBooK = $nameWhoBook;
    	
    	$bookingdetail =[];
    	$j=0;
    	

    	
    	//family bedroom
    	if($num1!=0){
    		$roomBusyByType	= Room::find()->where(['not in','roomID',$rn])
    		->andWhere(['type' => "Family Bedroom"])
    		->limit($num1)
    		->all();

    		$i=0;
    		foreach ($roomBusyByType as $roomID){
    			$room[$i] = $roomID['roomID'];
    			$i++;
    		}
    		 
    		
    		for ($i=0; $i<$num1 ; $i++){
    			//collection booking
    			$bookingdetail[$j]['roomID'] = $room[$i];
    			$bookingdetail[$j]['startDate'] = $checkin;
   	    		$bookingdetail[$j]['endDate'] =  $checkOut;
    		  	$bookingdetail[$j]['Checkin'] = $n;
    		   	$bookingdetail[$j]['CheckOut'] = $n;
    		    $bookingdetail[$j]['Paydate'] = $n;
    		    
    		    //count date and cal Pay

    		    $startTimeStamp = strtotime($checkin);
    		    $endTimeStamp = strtotime($checkOut);
    		    
    		    $timeDiff = abs($endTimeStamp - $startTimeStamp);
    		    $numberDays = $timeDiff/86400; 
    		    $numberDays = intval($numberDays);
    		   
    		    $Pay = $numberDays * 3500;
    		    
    		   	$bookingdetail[$j]['Pay'] = $Pay;
    		   	
    		   	//collection detailBooking
    		   	$modelDetailBooking = new DetailBooking();
    		   	$modelDetailBooking->bookingID = $total;
    		   	$modelDetailBooking->startDate= $checkin;
    		   	$modelDetailBooking->endDate = $checkOut;
    		   	$modelDetailBooking->status = 1;
    		   	$modelDetailBooking->roomID = $room[$i];
    		   	
    		   	$modelDetailBooking->save();
    		   	
    		   	$j++;
    		  }
    
    	}

    	if($num2!=0){
    		$roomBusyByType	= Room::find()->where(['not in','roomID',$rn])
    		->andWhere(['type' => "King Size Bedroom"])
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
    			
    			//count date and cal Pay
    			
    			$startTimeStamp = strtotime($checkin);
    			$endTimeStamp = strtotime($checkOut);
    			
    			$timeDiff = abs($endTimeStamp - $startTimeStamp);
    			$numberDays = $timeDiff/86400;
    			$numberDays = intval($numberDays);
    				
    			$Pay = $numberDays * 2000;
    			
    			$bookingdetail[$j]['Pay'] = $Pay;
    	
    			
    			//collection detailBooking
    			$modelDetailBooking = new DetailBooking();
    			$modelDetailBooking->bookingID = $total;
    			$modelDetailBooking->startDate= $checkin;
    			$modelDetailBooking->endDate = $checkOut;
    			$modelDetailBooking->status = 1;
    			$modelDetailBooking->roomID = $room[$i];
    			
    			$modelDetailBooking->save();
    			
    			$j++;
    			$j++;
    		}
    	
    	}

    	if($num3!=0){
    		$roomBusyByType	= Room::find()->where(['not in','roomID',$rn])
    		->andWhere(['type' => "Single Bedroom"])
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
    			
    			//count date and cal Pay
    			
    			$startTimeStamp = strtotime($checkin);
    			$endTimeStamp = strtotime($checkOut);
    			
    			$timeDiff = abs($endTimeStamp - $startTimeStamp);
    			$numberDays = $timeDiff/86400;
    			$numberDays = intval($numberDays);
    				
    			$Pay = $numberDays * 1500;
    			
    			$bookingdetail[$j]['Pay'] = $Pay;
    			
    			
    			
    			//collection detailBooking
    			$modelDetailBooking = new DetailBooking();
    			$modelDetailBooking->bookingID = $total;
    			$modelDetailBooking->startDate= $checkin;
    			$modelDetailBooking->endDate = $checkOut;
    			$modelDetailBooking->status = 1;
    			$modelDetailBooking->roomID = $room[$i];
    			
    			$modelDetailBooking->save();
    			
    			$j++;
    		}
    			
    	}
    	
    	$model->detailBooking = $bookingdetail;
    	$model->save();
    	
    	$query = Booking::find();
    	 
    	$result = $query->all();
    	
    	return $this->render('history', [
    			'result' => $result,
    	]);
    }
    
    public function actionEditdt()
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
    
    
    	return $this->render('editdt', [
    			'model' => $detail,
    			'index' => $index,
    			'idOb' => $id,
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
