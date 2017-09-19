
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Booking';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="panel panel-default">
  <div class="panel-heading">
<h3><label>จองห้องพัก</label></h3></div>
<div class="panel-body">
  <form>
    <div class="form-group">
    <h4>  <label  class="col-sm-2 control-label" >Check-in</label></h4>
      <div class="col-sm-2">
      <input type="date" class="form-control" name="course_id">
      </div>
    </div><br><br>
    <div class="form-group">
    <h4>  <label  class="col-sm-2 control-label" >Check-out</label></h4>
      <div class="col-sm-2">
      <input type="date" class="form-control" name="course_name">
      </div>
    </div><br><br>
    <div class="form-group">
    <h4>  <label  class="col-sm-2 control-label" >ประเภทห้อง</label></h4>
      <div class="col-sm-2">
      <select name="num" class="form-control">
        <option value="room"></option>
          <option value="room">Family Bedroom</option>
          <option value="room">King Size Bedroom</option>
          <option value="room">Single Bedroom</option>
      </select>
      </div>
    </div><br><br>
    <div class="form-group">
    <h4>  <label  class="col-sm-2 control-label" >จำนวน</label></h4>
      <div class="col-sm-2">
        <select name="num" class="form-control" >
            <option value="0">จำนวน</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br><br>
<input type="submit" class="btn btn-default" value="บันทึก">
</form>
      </div>
</div>

