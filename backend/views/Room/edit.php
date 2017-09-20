<?php
$this->title = 'เพิ่มข้อมูลห้องพัก';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;

$BaseUrl = \Yii::getAlias('@web');
?>

<form action="<?=$BaseUrl."/room/save" ?>" method="get">
	<input type="hidden" name="id" value="<?=$model['_id']?>">
	หมายเลขห้อง<input type="text" name="roomID"  value="<?=$model['roomID']?>">
	ประเภทห้อง<input type="text" name="type"  value="<?=$model['type']?>">
	ราคา<input type="text" name="price"  value="<?=$model['price']?>">
	<input type="submit" value="บันทึก">
</form>