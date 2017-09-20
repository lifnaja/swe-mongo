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
    <th width="100px">รหัสการจอง</th>
    <th>วันที่จอง</th>
    <th>ชื่อพนักงานที่จอง</th>
	<th>ชื่อลูกค้าที่จอง</th>
	<th>ดูข้อมูลเพิ่ม</th> 
  </tr>
  

  	<?php foreach ($result as $var){ ?>
  		<tr>		
  			<td align="center"><?=$var['bookingID'] ?></td>
  			<td><?=$var['bookingDate'] ?></td>
  			<td>
  				<?php 
  						$var['userID'];
  						if($var['userID'] != null){
  							$customer = User::find()->where(['_id' => $var['userID']])->one();
  						}
  						echo $customer['FirstName'];
  				?>
  			</td>
  			<td><?=$var['nameWhoBooK'] ?></td>
  			<td> <a href="<?=$baseUrl."/booking/detail?id=".$var['_id']?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>
  			<?php 
  				
//   				foreach ($var->detailBooking as  $value) {
//   					echo "<td>";
//   					echo $value['roomID'];
//    					echo "</td>";
  				
// 				}
  			
// 			?>
  			</td>
  			
  		</tr>
  	<?php } ?>
</table>


