<?php


$this->title = 'ห้องว่างทั้งหมด';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>

	<div class="panel panel-default">
  		<div class="panel-heading">
			<h3><label>ห้องว่างทั้งหมด/Empty Room All</label></h3></div>
			<div class="panel-body">
  				<form>
  					<input type="hidden" name="stDate" value="<?=$stDate?>">
  					<input type="hidden" name="endDate" value="<?=$endDate?>">
    				<h4><label>ประเภทห้อง/Type Room</label>
   	 				<div class="form-group">
        				<h5><label  class="col-sm-2 control-label" >Family Bedroom</label></h5>
    				</div>
    				<div class="form-group">
        				<h5><label  class="col-sm-2 control-label" >จำนวนห้องว่าง/Empty room Number</label></h5>
      					<div class="col-sm-2">
        					<input type="text" class="form-control" name="one" value="<?=$one ?>" disabled>
      					</div>

   		 			</div>
   		 			<br><br>
    				<div class="form-group">
        				<h5><label  class="col-sm-2 control-label" >King Size Bedroom</label></h5>
    				</div>
    				<div class="form-group">
        				<h5><label  class="col-sm-2 control-label" >จำนวนห้องว่าง/Empty room Number</label></h5>
      						<div class="col-sm-2">
        						<input type="text" class="form-control" name="two" value="<?=$two ?>" disabled>
      						</div>

    				</div>
    				<br><br>
    				<div class="form-group">
        				<h5><label  class="col-sm-2 control-label" >Single Bedroom</label></h5>
    				</div>
    				<div class="form-group">
        				<h5><label  class="col-sm-2 control-label" >จำนวนห้องว่าง/Empty room Number</label></h5>
      					<div class="col-sm-2">
        					<input type="text" class="form-control" name="three" value="<?=$three ?>" disabled>
      					</div>

    				</div>
    				<br><br>
					<a href="<?=$BaseUrl."/hotel/index" ?>" class="btn btn-default" role="button">กลับ/Back</a>
				</form>
      		</div>
		</div>
