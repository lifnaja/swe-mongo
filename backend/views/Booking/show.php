<?php


$this->title = 'ห้องว่างทั้งหมด';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>

<div class="panel panel-default">
  <div class="panel-heading">
<h3><label>ห้องว่างทั้งหมด</label></h3></div>
<div class="panel-body">
  <form>
    <h4><label>ประเภทห้อง</label>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >Family Bedroom</label></h5>
    </div>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >จำนวนห้องว่าง</label></h5>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="one" value="<?=$one ?>" disabled>
      </div>
      <div >
          <h5><label  class="col-sm-1 control-label" >ต้องการจอง</label></h5>
          <div class="col-sm-1">
            <select name="num" class="form-control">
            <?php 
            	for ($i=0;$i<=$one;$i++){
            		echo "<option value=".$i.">$i</option>";
            		
            	}
            ?>
               
            </select>
          </div>
      </div>
    </div><br><br>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >King Size Bedroom</label></h5>
    </div>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >จำนวนห้องว่าง</label></h5>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="two" value="<?=$two ?>" disabled>
      </div>
      <div >
          <h5><label  class="col-sm-1 control-label" >ต้องการจอง</label></h5>
          <div class="col-sm-1">
            <select name="num" class="form-control">
                <?php 
            	for ($i=0;$i<=$two;$i++){
            		echo "<option value=".$i.">$i</option>";
            		
            	}
            ?>
            </select>
          </div>
      </div>
    </div><br><br>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >Single Bedroom</label></h5>
    </div>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >จำนวนห้องว่าง</label></h5>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="three" value="<?=$three ?>" disabled>
      </div>
      <div >
          <h5><label  class="col-sm-1 control-label" >ต้องการจอง</label></h5>
          <div class="col-sm-1">
            <select name="num" class="form-control">
                <?php 
            	for ($i=0;$i<=$three;$i++){
            		echo "<option value=".$i.">$i</option>";
            		
            	}
            ?>
            </select>
          </div>
      </div>
    </div><br><br>



<input type="submit" class="btn btn-default" value="บันทึก">
</form>
      </div>
</div>
