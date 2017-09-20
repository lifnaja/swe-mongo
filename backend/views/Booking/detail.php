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
    <th width="100px">เลขห้อง</th>
    <th>StartDate</th>
    <th>EndDate</th>
	<th>Checkin</th>
	<th>CheckOut</th> 
	<th>Paydate</th> 
	<th>Pay</th> 	
	<th></th> 	
  </tr>
  

  	<?php foreach ($model->detailBooking as $var){ ?>
  		<tr>		
  			<td align="center"><?=$var['roomID'] ?></td>
  			<td><?=$var['startDate'] ?></td>
  			<td><?=$var['endDate'] ?></td>
  			<td><?=$var['Checkin'] ?></td>
  			<td><?=$var['CheckOut'] ?></td>
  			<td><?=$var['Paydate'] ?></td>
  			<td><?=$var['Pay'] ?></td>
  			<td><a href="<?=$baseUrl."/booking/edit?id=".$model->_id?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>

  			</td>
  			
  		</tr>
  	<?php } ?>
</table>


