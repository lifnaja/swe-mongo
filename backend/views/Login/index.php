<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$BaseUrl = \Yii::getAlias('@web');

?>


    <div class="container">

      <form class="form-horizontal" action="<?=$BaseUrl."/login/loginaction" ?>" method="Post" >
        <div class="panel panel-default">
  			<div class="panel-heading">
    			<center><h3><label>เข้าสู่ระบบ</label></h3></center></div>
        			<div class="form-group">
  						<div class="panel-body">
  							<div class="form-group">
    							<label for="input_username" class="col-sm-4 control-label">ชื่อผู้ใช้</label>
    							<div class="col-sm-5">
      								<input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้">
    							</div>
  							</div>
  							<div class="form-group">
    							<label for="inputPassword3" class="col-sm-4 control-label">รหัสผ่าน</label>
    							<div class="col-sm-5">
      								<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
    							</div>
  							</div>						
		</form>
			<div class="form-group">
    			<div class="col-sm-offset-4 col-sm-10">
    				<a href="<?=$BaseUrl."/login/register" ?>" class="btn btn-warning" role="button">สมัครสมาชิก</a>
      					<button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
    			</div>
  			</div>
	</div>


