<?php
use backend\models\User;

$this->title = 'การจัดการข้อมูลห้อง';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');


?>

<br>

<br><br>
<table class ="table" >
  <tr class="success">
    <th width="100px">รหัสการจอง/Booking ID</th>
    <th>วันที่จอง/Booking Date</th>
    <th>ชื่อพนักงานที่ทำรายการ/Employee name</th>
	<th>ชื่อลูกค้าที่จอง/Booking Customer Name</th>
	<th>ดูข้อมูลเพิ่ม/See more</th> 
  </tr>
  

  	<?php foreach ($result as $var){ ?>
  		<tr>		
  			<td align="center"><?=$var['bookingID'] ?></td>
  			<td><?=$var['bookingDate'] ?></td>
  			<td>
  				<?php 
  						$id=$var['userID'];
  						
  							$customer = User::findOne(['_id' => $id]);
  					
  						echo $customer['FirstName'];
  				?>
  			</td>
  			<td><?=$var['nameWhoBooK'] ?></td>
  			<td> <a href="<?=$baseUrl."/booking/detail?id=".$var['_id']?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>

  			
  		</tr>
  	<?php } ?>
  	
</table>


