
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$BaseUrl = \Yii::getAlias('@web');
Html::csrfMetaTags()
?>


    <div class="container">

      <form class="form-horizontal" method="post" action="<?=$BaseUrl."/login/loginaction" ?>"  >
        <div class="panel panel-default">
  			<div class="panel-heading">
    			<center><h3><label>เข้าสู่ระบบ/Log In</label></h3></center></div>
        			<div class="form-group">
  						<div class="panel-body">
  							<div class="form-group">
    							<label for="input_username" class="col-sm-4 control-label">ชื่อผู้ใช้/Username</label>
    							<div class="col-sm-5">
      								<input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้">
    							</div>
  							</div>
  							<div class="form-group">
    							<label for="inputPassword3" class="col-sm-4 control-label">รหัสผ่าน/Password</label>
    							<div class="col-sm-5">
      								<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
    							</div>
  							</div>	
  							<div class="col-sm-offset-4 col-sm-10">
  								<button type="submit" class="btn btn-success">เข้าสู่ระบบ/Log In</button>	
  							</div>				
		</form>
		
	</div>


