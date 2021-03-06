<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
	<div class="container">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading"><b>สมัครสมาชิก/Register</b></div>
 					<div class="panel-body">
   						<form action="">
     						<div class="form-group">
       							<label for="inputEmail3" class="control-label col-sm-2">ชื่อ/Name:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="firstname" placeholder="ชื่อ">
     							</div>
     							<div class="form-group">
       								<label for="inputPassword3" class="col-sm-1 control-label">นามสกุล/Lastname:</label>
       								<div class="col-sm-2">
         								<input type="text" class="form-control" name="lastname" placeholder="นามสกุล">
       								</div>
       							</div>
     						</div>
     						<br><br><br>
      						<div class="form-group">
       							<label for="inputEmail3" class="col-sm-2 control-label">รหัสบัตรประชาชน/ID:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="firstname" placeholder="รหัสบัตรประชาชาน">
       							</div>
       						</div>
       						<br><br>
     						<div class="form-group">
       							<label for="inputPassword3" class="col-sm-2 control-label">เบอร์โทรศัพท์ /Phone Number:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="phone" placeholder="088-888-888-8">
      	 						</div>
      	 					</div>
      	 					<br><br>
       						<div class="form-group">
					       		<label for="inputPassword3" class="col-sm-2 control-label">ที่อยู่ /Address:</label>
					       		<div class="col-sm-4">
					         		<textarea class="form-control" name="address" placeholder="กรอกข้อมูลที่อยู่" rows="3"></textarea>
					       		</div>
     						</div>
     						<br><br><br><br>
     						<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">อีเมลล์ /E-mail:</label>
						       <div class="col-sm-4">
						         <input type="email" class="form-control" name="email" placeholder="Frist.Name@example.com">
						       </div>
     						</div>
     						<br><br>
     						<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">ชื่อผู้ใช้/Username:</label>
						       <div class="col-sm-2">
						         <input type="text" class="form-control" name="address" placeholder="ชื่อผู้ใช้" ></input>
						       </div>
						   </div>
						   <br><br>
						   <div class="form-group">
						   		<label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน/Password:</label>
						       	<div class="col-sm-2">
						        	<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
						       </div>
						   </div>
						   <br><br><br><br>
     					   <div class="col-md-12 col-md-offset-4">
       							<button type="submit" class="btn btn-primary" name="submit">ยืนยัน/Accept</button>
     					   </div>
   						</form>
					</div>
				</div>
			</div>
		</div>