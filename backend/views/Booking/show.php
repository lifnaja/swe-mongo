<?php
var_dump($rn);
var_dump($one); 
var_dump($two);
var_dump($three);
exit();
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
        <h5><label  class="col-sm-1 control-label" >จำนวนห้องว่าง</label></h5>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="course_name">
      </div>
      <div >
          <h5><label  class="col-sm-1 control-label" >ต้องการจอง</label></h5>
          <div class="col-sm-1">
            <select name="num" class="form-control">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
          </div>
      </div>
    </div><br><br>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >King Size Bedroom</label></h5>
    </div>
    <div class="form-group">
        <h5><label  class="col-sm-1 control-label" >จำนวนห้องว่าง</label></h5>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="course_name">
      </div>
      <div >
          <h5><label  class="col-sm-1 control-label" >ต้องการจอง</label></h5>
          <div class="col-sm-1">
            <select name="num" class="form-control">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
          </div>
      </div>
    </div><br><br>
    <div class="form-group">
        <h5><label  class="col-sm-2 control-label" >Single Bedroom</label></h5>
    </div>
    <div class="form-group">
        <h5><label  class="col-sm-1 control-label" >จำนวนห้องว่าง</label></h5>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="course_name">
      </div>
      <div >
          <h5><label  class="col-sm-1 control-label" >ต้องการจอง</label></h5>
          <div class="col-sm-1">
            <select name="num" class="form-control">
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
          </div>
      </div>
    </div><br><br>



<input type="submit" class="btn btn-default" value="บันทึก">
</form>
      </div>
</div>
