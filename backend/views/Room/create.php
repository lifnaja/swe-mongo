<?php
$this->title = 'เพิ่มข้อมูลห้องพัก';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>

<form action="<?=$BaseUrl."/room/save" ?>" method="get">
	หมายเลขห้อง<input type="text" name="roomID">
	ประเภทห้อง<input type="text" name="type">
	ราคา<input type="text" name="price">
	<input type="submit" value="เพิ่มข้อมูล">
</form>