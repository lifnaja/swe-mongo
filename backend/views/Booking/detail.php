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
		    <th width="100px">เลขห้อง/Room Number</th>
		    <th>StartDate</th>
		    <th>EndDate</th>
			<th>Checkin</th>
			<th>CheckOut</th> 
			<th>Paydate</th> 
			<th>Pay</th> 	
			<th></th> 	
		  </tr>
  
	
  	<?php $i=0;
  		foreach ($model->detailBooking as $var){ 
  			
  		?>
  		<tr>		
  			<td align="center"><?=$var['roomID'] ?></td>
  			<td><?=$var['startDate'] ?></td>
  			<td><?=$var['endDate'] ?></td>
  			<td><?=$var['Checkin'] ?></td>
  			<td><?=$var['CheckOut'] ?></td>
  			<td><?=$var['Paydate'] ?></td>
  			<td><?=$var['Pay'] ?></td>
  			<td>
  			 
				<form action="<?=$baseUrl."/booking/editdt" ?>" method="Get">
					<input type="hidden" name="id" value="<?=$idOb?>">
					<input type="hidden" name="index" value="<?=$i?>">
					<input type="submit" value="แก้ไข">
				</form>
  			</td>
  			
  		</tr>
  	<?php $i++;} ?>
</table>


