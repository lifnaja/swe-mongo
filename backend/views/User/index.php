<?php
$this->title = 'การจัดการข้อมูลผู้ใช้ ';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');


?>


<br>
<a href="<?=$baseUrl."/user/create" ?>"><button type="button" class="btn btn-info">เพิ่มข้อมูลพนักงาน/Employee Data Insert </button></a>

<br><br>
<table class ="table" >
  <tr class="success">
    <th width="40">ชื่อ/Name:</th>
    <th width="40">นามสกุล/Lastname:</th>
    <th width=100">เลขบัตรประชาชน/ID Card:</th>
    <th width="20">ที่อยู่/Address:</th> 
    <th width="20">โทรศัพท์/Phone Number:</th>
	<th width="30">อีเมลล์/E-mail:</th>
	<th width="50">ชื่อผู้ใช้/Username:</th>
	<th width="20">ประเภท/Type:</th>
	<th width="20">แก้ไข/Update:</th>
	<th width="20">ลบ/Delete:</th>
  </tr>
  

  	
  	<?php foreach ($result as $var){ ?>
  		<tr>	
  		<?php if($var['type']!= 2) {?>	
  			<td><?=$var['FirstName'] ?></td>
  			<td><?=$var['LastName'] ?></td>
  			<td><?=$var['identity'] ?></td>
  			<td><?=$var['address'] ?></td>
  			<td><?=$var['phone'] ?></td>
  			<td><?=$var['email'] ?></td>
  			<td><?=$var['username'] ?></td>
  			
  			<td>
  				<?php 
  					if($var['type']=="2"){echo "ลูกค้า";} 
  					else if($var['type']=="1"){echo "พนักงาน";}
  					else {echo "ผู้จัดการ";}
  				?>
  			</td>
  			
  			<td><a href="<?=$baseUrl."/user/edit?id=".$var['_id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
  			<td><a href="<?=$baseUrl."/user/delete?id=".$var['_id']?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
  		</tr>
  	<?php } } ?>
</table>



