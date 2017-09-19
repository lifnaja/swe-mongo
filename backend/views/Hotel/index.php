<?php

use yii\helpers\BaseUrl;
$this->title = 'หน้าแรก';


$BaseUrl = \Yii::getAlias('@web');
?>

<body>
  <div class="container-fluid">
  	 <img src="picture/header.jpg" width="1140px">
  </div>
  
  <div class="container">
  	<div class="row">
  		
	  	<form action="<?=$BaseUrl."/course-app/save" ?>" method="get">
		  	<div class="form-group">
		  		
					<div class="form-group">
						<label class="col-sm-1 control-label">Check-in</label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="course_id">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-2 control-label" >Check-out</label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="course_name">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-1 control-label">จำนวน</label>
						<div class="col-sm-1">
							<select name="num" class="form-control">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								  <option value="6">6</option>
								  <option value="7">7</option>
							</select>
						</div>
					</div>
					<input type="submit" class="btn btn-default" value="ค้นหาห้องพัก">
			</div>
		</form>
	</div>

  
  
  

		  <div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="https://cloudstorage.amari.com/donmuang/hotel-photos/deluxe-room-1.jpg" >
			      <div class="caption">
			        <h3>Family Bedroom</h3>
			        <div align="right">
			        		<h3>
			        	 		<span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
			 			 	2 King Beds
			 			</h3>
			        </div>
					 <div align="right">
			        		<h3>
			        	 		<span class=" glyphicon glyphicon-usd" aria-hidden="true"></span>
			 			 	3,500
			 			</h3>
			        </div>
			       
			      </div>
			    </div>
			  </div>
			   <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="https://cloudstorage.amari.com/donmuang/hotel-photos/deluxe-room-1.jpg" >
			      <div class="caption">
			        <h3>King Size Bedroom</h3>
			        <div align="right">
			        		<h3>
			        	 		<span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
			 			 	1 King Beds
			 			</h3>
			        </div>
					 <div align="right">
			        		<h3>
			        	 		<span class=" glyphicon glyphicon-usd" aria-hidden="true"></span>
			 			 	2,000
			 			</h3>
			        </div>
			         
			      </div>
			    </div>
			  </div>
			   <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="https://cloudstorage.amari.com/donmuang/hotel-photos/deluxe-room-1.jpg" >
			      <div class="caption">
			        <h3> Single Bedroom</h3>
			        <div align="right">
			        		<h3>
			        	 		<span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
			 			 	2 Single Beds
			 			</h3>
			        </div>
					 <div align="right">
			        		<h3>
			        	 		<span class=" glyphicon glyphicon-usd" aria-hidden="true"></span>
			 			 	1,500
			 			</h3>
			        </div>
			        
			      </div>
			    </div>
			  </div>
		</div>
  </div>
	
	
	
	
	  <div class="py-5 bg-light">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-6 text-center align-self-center">
	          <p class="mb-5"> <strong>Pingendo Inc.</strong>
	            <br>795 Folsom Ave, Suite 600
	            <br>San Francisco, CA 94107
	            <br> <abbr title="Phone">P:</abbr> (123) 456-7890 </p>
	          <div class="my-3 row">
	            <div class="col-4">
	              <a href="https://www.facebook.com" target="blank"><i class="fa fa-3x fa-facebook"></i></a>
	            </div>
	            <div class="col-4">
	              <a href="https://twitter.com" target="blank"><i class="fa fa-3x fa-twitter"></i></a>
	            </div>
	            <div class="col-4">
	              <a href="https://www.instagram.com" target="blank"><i class="fa fa-3x fa-instagram"></i></a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 p-0">
	          <img class="img-fluid" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;&amp;markers=folsom+Ave+san+francisco&amp;center=folsom+Ave+san+francisco&amp;zoom=16&amp;size=640x300&amp;sensor=false&amp;scale=2"> </div>
	      </div>
	    </div>
  	</div>
