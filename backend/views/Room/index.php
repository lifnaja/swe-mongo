<?php
$this->title = 'การจัดการ';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');


?>

<form action="" method="get">
	<div class="form-group">
	<div class="col-md-2">
          <input type="text" class="form-control" placeholder="Search">
        </div></div>
        <button type="submit" class="btn btn-info">ค้นหา</button>
</form>
<br>
<a href="<?=$baseUrl."/course/create" ?>"><button type="button" class="btn btn-info">สร้าง</button></a>
<br><br>
<table class ="table" >
  <tr class="success">
    <th >ลำดับที่</th>
    <th>รหัสห้อง</th>
    <th>ประเภทห้อง</th>
    <th>ราคา</th>
   
  </tr>
  
  <?php 
//   	foreach ($result as $var){
//   		echo "<tr>";
//   			echo "<td>".$var['_id']."</td>";
//   			echo "<td width=\"100px\">".$var['course_id']."</td>";
// 			echo "<td>".$var['name']."</td>";
// 			echo "<td>".$var['description']."</td>";
// 			echo "<td>".$var['lecturer_id']."</td>";
//   		echo "</tr>";
//   	}
  	
  	?>
  	
  	<?php foreach ($result as $var){ ?>
  		<tr>
  			<td width="100px"><?=$var['_id'] ?></td>
  			<td><?=$var['_id'] ?></td>
  			<td><?=$var['roomID'] ?></td>
  			<td><?=$var['type'] ?></td>
  			<td><?=$var['price'] ?></td>
  			<td><a href="<?=$baseUrl."/room/edit?id=".$var['_id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
  			<td><a href="<?=$baseUrl."/room/delete?id=".$var['_id']?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
  		</tr>
  	<?php } ?>
</table>


