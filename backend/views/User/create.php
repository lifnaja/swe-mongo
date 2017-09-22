<?php
$this->title = 'เพิ่มข้อมูลพนักงาน';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>

<form action="<?=$BaseUrl."/user/save" ?>" method="get">
	<div class="container">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading"><b>เพิ่มข้อมูลพนักงาน</b></div>
 					<div class="panel-body">
   						<form action="">
     						<div class="form-group">
       							<label for="inputEmail3" class="control-label col-sm-2">ชื่อ:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="firstname" placeholder="ชื่อ">
     							</div>
     							<div class="form-group">
       								<label for="inputPassword3" class="col-sm-1 control-label">นามสกุล:</label>
       								<div class="col-sm-2">
         								<input type="text" class="form-control" name="lastname" placeholder="นามสกุล">
       								</div>
       							</div>
       							<div class="form-group">
       								<label for="inputPassword3" class="col-sm-1 control-label">ประเภท:</label>
       								<div class="col-sm-2">
										<select name="type" class="form-control">
										  <option value="0">ผู้จัดการ</option>
										  <option value="1">พนักงาน</option>
										</select>
       								</div>
       							</div>
     						</div>
     						<br><br><br>
      						<div class="form-group">
       							<label for="inputEmail3" class="col-sm-2 control-label">รหัสบัตรประชาชน:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="identity" placeholder="รหัสบัตรประชาชาน">
       							</div>
       						</div>
       						<br><br>
     						<div class="form-group">
       							<label for="inputPassword3" class="col-sm-2 control-label">เบอร์โทรศัพท์ :</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="phone" placeholder="088-888-888-8">
      	 						</div>
      	 					</div>
      	 					<br><br>
       						<div class="form-group">
					       		<label for="inputPassword3" class="col-sm-2 control-label">ที่อยู่ :</label>
					       		<div class="col-sm-4">
					         		<textarea class="form-control" name="address" placeholder="กรอกข้อมูลที่อยู่" rows="3"></textarea>
					       		</div>
     						</div>
     						<br><br><br><br>
     						<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">อีเมลล์ :</label>
						       <div class="col-sm-4">
						         <input type="email" class="form-control" name="email" placeholder="Frist.Name@example.com">
						       </div>
     						</div>
     						<br><br>
     						<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">ชื่อผู้ใช้ :</label>
						       <div class="col-sm-2">
						         <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" ></input>
						       </div>
						   </div>
						   <br><br>
						   <div class="form-group">
						   		<label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน :</label>
						       	<div class="col-sm-2">
						        	<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
						       </div>
						   </div>
						   <br><br><br><br>
     					   <div class="col-md-12 col-md-offset-4">
       							<button type="submit" class="btn btn-primary" name="submit">เพิ่มข้อมูล</button>
     					   </div>
   						</form>
					</div>
				</div>
			</div>
		</div>
</form>