<?php
$this->title = 'การจัดการข้อมูลผู้ใช้';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');


?>


<br>
<a href="<?=$baseUrl."/room/create" ?>"><button type="button" class="btn btn-info">เพิ่มข้อมูลพนักงาน</button></a>
<br><br>
<table class ="table" >
  <tr class="success">
    <th width="150">ชื่อ</th>
    <th width="200">นามสกุล</th>
    <th width=100">เลขบัตรประชาชน</th>
    <th width="20">ที่อยู่</th> 
    <th width="20">โทรศัพท์</th>
	<th width="20">อีเมลล์</th>
	<th width="20">ชื่อผู้ใช้</th>
	<th width="20">ประเภท</th>
	<th width="20">อีเมลล์</th>
	
  </tr>
  

  	
  	<?php foreach ($result as $var){ ?>
  		<tr>		
  			<td><?=$var['FirstName'] ?></td>
  			<td><?=$var['LastName'] ?></td>
  			<td><?=$var['identity'] ?></td>
  			<td><?=$var['address'] ?></td>
  			<td><?=$var['phone'] ?></td>
  			<td><?=$var['email'] ?></td>
  			<td><?=$var['username'] ?></td>
  			<td><?=$var['type'] ?></td>
  			<td><a href="<?=$baseUrl."/user/edit?id=".$var['_id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
  			<td><a href="<?=$baseUrl."/user/delete?id=".$var['_id']?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
  		</tr>
  	<?php } ?>
</table>


