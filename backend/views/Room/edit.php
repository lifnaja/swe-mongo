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
				<b>เพิ่มข้อมูลห้องพัก</b>
			</div>
 			<div class="panel-body">
  				<form action="<?=$BaseUrl."/room/save" ?>" method="get">
					<div class="form-group">
      					<label for="inputEmail3" class="control-label col-sm-2">หมายเลขห้อง:</label>
       						<div class="col-sm-2">
       							<input type="hidden" name="id" value="<?=$model['_id']?>">
         						<input type="text" class="form-control" name="roomID" value="<?=$model['roomID']?>">
     						</div>       
							<div class="form-group">
    							<label  class="col-sm-2 control-label" >ประเภทห้อง :</label>
      								<div class="col-sm-2">
        								<input type="text" name="type" class="form-control" value="<?=$model['type']?>">
        							</div>
        					</div>
							<div class="form-group">
       							<label for="inputEmail3" class="control-label col-sm-1">ราคา :</label>
       								<div class="col-sm-1">
         								<input type="text" class="form-control" name="roomID"  value="<?=$model['price']?>">
     								</div>
     								<label for="inputEmail3" class="control-label col-sm-1">บาท</label>
     						</div>
     				</div>
				</form>			
			</div>
		</div>
	</div>
</div>

				
				
