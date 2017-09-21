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
class LoginController extends Controller
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
	
    public function beforeAction($action)
    {
    	$this->enableCsrfValidation = false;
    	return parent::beforeAction($action);
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
	{
	      $request = Yii::$app->request;
	      $baseUrl = \Yii::getAlias('@web');
	      $session = Yii::$app->session;
	
	      if($session->has('user'))
	      {
	        return $this->redirect($baseUrl."hotel/index");
	      }else {
	        return $this->render('login');
	      }
    }

  
    public function actionLogout()
    {
          $session = Yii::$app->session;
	      $baseUrl = \Yii::getAlias('@web');
	      $session->remove('user');
	      return $this->redirect($baseUrl."/");
    }
    public function actionRegister()
    {
    	return $this->render('register', [
    			 
    	]);
    }
    
    public function actionLoginaction()
    {
    	//config
    	$request = Yii::$app->request;
    	$baseUrl = \Yii::getAlias('@web');
    	$session = Yii::$app->session;
    
    	$username = $request->post('username',null);
    	$pass = $request->post('password',null);
    	
    	$customer = User::findOne(['username' => $username]);
    	if(isset($customer) && ( $pass == $customer->password ))
    	{
    		$session->set('user', $customer);
    		$session->setFlash('success', " ยินดีต้อนรับเข้าสู่ระบบ");
    		return $this->redirect($baseUrl."/hotel/index");
    	}
    	else 
    	{
    		$session->setFlash('danger', " ชื่อใช้หรือรหัสผ่านไม่ถูก กรุณาเข้าสู่ระบบใหม่อีกครั้ง");
    		return $this->redirect($baseUrl."/login/index");
    	}
    }
    
    public function actionLoginsave()
    {
    	//config
    	$request = Yii::$app->request;
    	$baseUrl = \Yii::getAlias('@web');
    
    
    }
    
    
    public function actionRegistersave()
    {
    	//config
    	$request = Yii::$app->request;
    	$baseUrl = \Yii::getAlias('@web');
    
    	//get id edit , not id -> new
    	$fname = $request->get('firstname',null);
    	$lname = $request->get('lastname',null);
    	$email = $request->get('email',null);
    	$phone = $request->get('phone',null);
    	$pass = $request->get('password',null);
    	$address = $request->get('address',null);
    	$customer = new User();
    
    	$customer->firstname= $fname;
    	$customer->lastname= $lname;
    	$customer->phone= $phone;
    	$customer->email= $email;
    	$customer->password=  md5($pass);
    	$customer->address= $address;
    
    	if($customer->save()){
    		echo "success";
    	}else {
    		echo "error";
    	}
    	return $this->redirect($baseUrl."/login/index");
    }
}
