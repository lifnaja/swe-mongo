<?php
$this->title = 'เพิ่มข้อมูลพนักงาน';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');

?>

<form action="<?=$BaseUrl."/booking/save" ?>" method="get">
	<div class="container">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading"><b>Check-In/Check-Out</b></div>
 					<div class="panel-body">
   						<form action="">
     						<div class="form-group">
       							<label for="inputEmail3" class="control-label col-sm-2">เลขห้อง:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="roomID"  
         							value="<?=$model['roomID']?>" disabled>
     							</div>
     							<div class="form-group">
       								<label for="inputPassword3" class="col-sm-1 control-label">startDate:</label>
       								<div class="col-sm-2">
         								<input type="text" class="form-control" name="startDate"
         								value="<?=$model['startDate']?>" disabled>
       								</div>
       							</div>
     						</div>
     						<br><br><br>
      						<div class="form-group">
       							<label for="inputEmail3" class="col-sm-2 control-label">endDate:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="endDate"
         							value="<?=$model['endDate']?>" disabled>
       							</div>
       						</div>
       						<br><br>
     						<div class="form-group">
       							<label for="inputPassword3" class="col-sm-2 control-label">check-in:</label>
       							<div class="col-sm-2">
         							<input type="text" class="form-control" name="Checkin"
         							value="<?=$model['Checkin']?>">
      	 						</div>
      	 					</div>
      	 					<br><br>
       						<div class="form-group">
					       		<label for="inputPassword3" class="col-sm-2 control-label">check-out:</label>
					       		<div class="col-sm-4">
					         		<input type="text" class="form-control" name="CheckOut"
         							value="<?=$model['CheckOut']?>">
					       		</div>
     						</div>
     						<br><br><br><br>
     						<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">Paydate:</label>
						       <div class="col-sm-4">
						         <input type="email" class="form-control" name="Paydate" 
						         value="<?=$model['Paydate']?>">
						       </div>
     						</div>
     						<br><br>
     						<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">Pay:</label>
						       <div class="col-sm-2">
						         <input type="text" class="form-control" name="Pay" 
						         value="<?=$model['Pay']?>" disabled> 
						       </div>
						   </div>
						   <br><br><br><br>
     					   <div class="col-md-12 col-md-offset-4">
       							<button type="submit" class="btn btn-primary" name="submit">บันทึก</button>
     					   </div>
   						</form>
					</div>
				</div>
			</div>
		</div>
</form>