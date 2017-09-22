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
    <th width="100px">รหัสการจอง/Book ID</th>
    <th>วันที่จอง/Book Date</th>
    <th>ชื่อพนักงานที่จอง/Book Employee name</th>
	<th>ชื่อลูกค้าที่จอง/Book Customer</th>
	<th>ดูข้อมูลเพิ่ม/View more info</th> 
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

  			
  		</tr>
  	<?php } ?>
</table>


