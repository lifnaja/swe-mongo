<?php
$this->title = 'เพิ่มข้อมูลห้องพัก';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>
<div class="container">
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				<b>เพิ่มข้อมูลห้องพัก/Room Data Insert</b>
			</div>
 			<div class="panel-body">
  				<form action="<?=$BaseUrl."/room/save" ?>" method="get">
					<div class="form-group">
      					<label for="inputEmail3" class="control-label col-sm-2">หมายเลขห้อง/Room Number:</label>
       						<div class="col-sm-2">
       							<input type="hidden" name="id" value="<?=$model['_id']?>">
         						<input type="text" class="form-control" name="roomID" value="<?=$model['roomID']?>">
     						</div>       
							<div class="form-group">
    							<label  class="col-sm-2 control-label" >ประเภทห้อง/Type Room :</label>
      								<div class="col-sm-2">
        								<select name="type" class="form-control" >
		            						<option value="0">ประเภทห้อง/Type Room</option>
		            						<option value="1">Single Bedroom</option>
		            						<option value="2">Family Bedroom</option>
		            						<option value="3">King Size Bedroom</option>
        								</select>
        							</div>
        					</div>
							<div class="form-group">
       							<label for="inputEmail3" class="control-label col-sm-1">ราคา/Price :</label>
       								<div class="col-sm-1">
         								<input type="text" class="form-control" name="roomID"  value="<?=$model['price']?>">
     								</div>
     								<label for="inputEmail3" class="control-label col-sm-1">บาท/Bath</label>
     						</div>
     						 <div class="form-group">
       									<button type="submit" class="btn btn-primary" name="submit">เพิ่มข้อมูล/Data Insert </button>
     					   			</div>
     				</div>
				</form>			
			</div>
		</div>
	</div>
</div>

				
				
