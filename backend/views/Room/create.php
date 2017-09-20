<?php
$this->title = 'เพิ่มข้อมูลห้องพัก';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>
<body>

<div class="container">
<div class="row">
<div class="panel panel-info">
<div class="panel-heading"><b>เพิ่มข้อมูลห้องพัก</b></div>
 <div class="panel-body">
  

<form action="<?=$BaseUrl."/room/save" ?>" method="get">

  <div class="form-group">
       <label for="inputEmail3" class="control-label col-sm-2">หมายเลขห้อง:</label>
       <div class="col-sm-2">
         <input type="text" class="form-control" name="roomID" placeholder="หมายเลขห้อง">
     </div>
        
		<div class="form-group">
    <label  class="col-sm-2 control-label" >ประเภทห้อง :</label>
      <div class="col-sm-2">
        <select name="num" class="form-control" >
            <option value="0">ประเภทห้อง</option>
            <option value="1">Single Bedroom</option>
            <option value="2">Family Bedroom</option>
            <option value="3">King Size Bedroom</option>
        </select></div>

	 <div class="form-group">
       <label for="inputEmail3" class="control-label col-sm-1">ราคา :</label>
       <div class="col-sm-1">
         <input type="text" class="form-control" name="roomID" placeholder="ราคา">
     </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>