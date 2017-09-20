<?php
$this->title = 'การจัดการข้อมูลห้อง';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');


?>

<!-- <form action="" method="get"> -->
<!-- 	<div class="form-group"> -->
<!-- 	<div class="col-md-2"> -->
<!--           <input type="text" class="form-control" placeholder="Search" name="search"> -->
<!--         </div></div> -->
<!--         <button type="submit" class="btn btn-info">ค้นหา</button> -->
<!-- </form> -->
<br>
<a href="<?=$baseUrl."/room/create" ?>"><button type="button" class="btn btn-info">สร้าง</button></a>
<br><br>
<table class ="table" >
  <tr class="success">
    <th width="150">หมายเลขห้อง</th>
    <th width="200">ประเภทห้อง</th>
    <th width=100">ราคา</th>
	<th width="20">แก้ไข</th>
	<th width="20">ลบ</th> 
  </tr>
  

  	
  	<?php foreach ($result as $var){ ?>
  		<tr>		
  			<td><?=$var['roomID'] ?></td>
  			<td><?=$var['type'] ?></td>
  			<td><?=$var['price'] ?></td>
  			<td><a href="<?=$baseUrl."/room/edit?id=".$var['_id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
  			<td><a href="<?=$baseUrl."/room/delete?id=".$var['_id']?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
  		</tr>
  	<?php } ?>
</table>


