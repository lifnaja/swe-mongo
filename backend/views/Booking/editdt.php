<?php
$this->title = 'Check-in/CheckOut';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');

?>

<form action="<?=$BaseUrl."/booking/Savecheckin" ?>" method="get">
	<div class="container">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading"><b>Check-In/Check-Out</b></div>
 					<div class="panel-body">
     					<div class="form-group">
       						<label for="inputEmail3" class="control-label col-sm-2">เลขห้อง/Room Number:</label>
       						<div class="col-sm-2">
         					    <input type="text" class="form-control" name="roomID" value="<?=$model['roomID']?>" disabled>
     						  </div>
              			
     					<div class="form-group">
       						<label for="inputPassword3" class="col-sm-1 control-label">startDate:</label>
       						<div class="col-sm-2">
         							<input type="text" class="form-control" name="startDate" value="<?=$model['startDate']?>" disabled>
       						</div>
       				</div>
               
     						     						
      				<div class="form-group">
       					  <label for="inputEmail3" class="col-sm-2 control-label">endDate:</label>
       						<div class="col-sm-2">
         					    <input type="text" class="form-control" name="endDate" value="<?=$model['endDate']?>" disabled>
       						</div>
       				</div>
       						<br><br><br>
     					<div class="form-group">
       						<label for="inputPassword3" class="col-sm-2 control-label">check-in:</label>
       						<div class="col-sm-2">
       							<?php if($model['Checkin']=="null") {?>
         					    	<input type="date" class="form-control" name="Checkin">
         					    <?php }else{ ?>
         					    	<input type="text" class="form-control" name="Checkin" value="<?=$model['Checkin']?>" disabled>
         					     <?php } ?>
      	 					</div>
      	 			</div>
      	 					<br><br>
       				<div class="form-group">
					       	<label for="inputPassword3" class="col-sm-2 control-label">check-out:</label>
					       	<div class="col-sm-2">
					       		<?php if($model['CheckOut']=="null") {?>
					           		<input type="date" class="form-control" name="CheckOut">
					           	 <?php }else{ ?>
					           	 	<input type="text" class="form-control" name="Checkin" value="<?=$model['CheckOut']?>" disabled>
					           	 <?php } ?>
					       		</div>
     					</div>
     						<br><br><br>
     					<div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">Pay:</label>
						       <div class="col-sm-2">
						         <input type="text" class="form-control" name="Pay" value="<?=$model['Pay']?>" disabled>  
						       </div>
						  </div>
						   <br><br>
						   <div class="form-group">
						       <label for="inputPassword3" class="col-sm-2 control-label">Paydate:</label>
						       <div class="col-sm-2">
						       		<?php if($model['CheckOut']=="null") {?>
						         		<input type="date" class="form-control" name="Paydate" >
						         	 <?php }else{ ?>
						         	 	<input type="text" class="form-control" name="Checkin" value="<?=$model['Paydate']?>" disabled>
					           	 	 <?php } ?>
						         
						       </div>
     					</div>
     						<input type="hidden" name="id" value="<?=$idOb?>">
     						<input type="hidden" name="index" value="<?=$index?>">
     					   <div class="col-md-12 col-md-offset-4">
       							<button type="submit" class="btn btn-primary" name="submit">บันทึก/Save</button>
     					   </div>
   						
					</div>
				</div>
			</div>
		</div>
</form>