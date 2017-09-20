
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Booking';
$this->params['breadcrumbs'][] = $this->title;
$BaseUrl = \Yii::getAlias('@web');
?>

<form action=<?=$BaseUrl."/booking/show" ?>>
    <div class="panel panel-default">
  <div class="panel-heading">
<h3><label>จองห้องพัก</label></h3></div>
<div class="panel-body">

    <div class="form-group">
    <h4>  <label  class="col-sm-2 control-label" >Check-in</label></h4>
      <div class="col-sm-2">
      <input type="date" class="form-control" name="CIn">
      </div>
    </div><br><br>
    <div class="form-group">
    <h4>  <label  class="col-sm-2 control-label" >Check-out</label></h4>
      <div class="col-sm-2">
      <input type="date" class="form-control" name="COut">
      </div>
    </div><br><br>
    <input type="submit" class="btn btn-default" value="บันทึก">
       </div>
</form>
  

