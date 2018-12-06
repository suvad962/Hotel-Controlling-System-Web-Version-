<!DOCTYPE html>
<html>
	<head>
		<title>Confirm Service</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("images/room3.jpg");
				}
				
				#header{
					background: #330000;
					min-height: 55px;
					padding: 33px 5%;
					color: white;	
				}
				#nav{
					background: #0095C6;
					min-height: 60px;
					padding: 0 5%;	
				}
				#main{
					min-height: 700px;
					padding: 0 5%;	
					
				}
				#footer{
					background: black;
					min-height: 22px;
					padding: 33px 5%;
					color: white;
					text-align: center;	
				}
				/*Page layout end here*/

				/* Navigation ber start here */
				#nav ul{
					margin: 0;
					padding: 0;
					height: auto;
				}
				#nav ul li{
					list-style-type: none;
					position: relative;
					width: 150px;
					height: 60px;
					float: left;
					text-align: center;
					margin-right: 5px;
					font-size: 20px;
					margin-bottom: 2px;
				}
				#nav ul a{
					text-decoration: none;
					display: block;
					height: 60px;
					width: 150px;
					color: white;
					line-height: 60px;
					background-color: #0095C6;
				}
				#nav ul li:hover > a{
				background-color: gray;
				}
				#nav ul ul.sub1{
					display: none;
					position: absolute;
					top: 61px;
					left: 0px;
				}
				#nav ul ul.sub2{
					display: none;
					position: absolute;
					top: 61px;
					left: 0px;
				}
				#nav ul ul.sub3{
					display: none;
					position: absolute;
					top: 61px;
					left: 0px;
				}
				#nav ul ul.sub4 {
					display: none;
					position: absolute;
					top: 0px;
					left: 152px;
				}
				#nav ul li:hover .sub1 {
					display: block;
				}

				#nav ul li:hover .sub2 {
					display: block;
				}

				#nav ul li:hover .sub3 {
					display: block;
				}
				
				#nav ul .sub3 li:hover .sub4 {
					display: block;
				}

				/* Navigation ber end here here */
				#welcome{
					width: 70%;
					float: left;
					padding: 0 5% 5% 0;
					color: white;
				}
				#sidebar{
					text-align: center;
					width: 25%;
					float: left;
					color: #FFFF00;
					background: black;
					opacity: .7;
					min-height:700px;
				}

				
			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>CONFIRM SERVICE</h1>
			</div>

			<div id="nav">
				<ul>
					<li><a href="fp.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="#">Food</a>
						<ul class="sub1">

							<li><a href="bengali_food.php">Bengali</a></li>
							<li><a href="indian_food.php">Indian</a></li>
							<li><a href="cn_food.php">Chinease</a></li>
							<li><a href="tfood.php">Thai</a></li>
							
						</ul>
					</li>
					<li><a href="#">Services</a>
						<ul class="sub2">

							<li><a href="laundry.php">Laundry</a></li>
							<li><a href="cleaning.php">Cleaning</a></li>
							
						</ul>
					</li>
	
					<li><a href="#">Booking</a>
					<ul class="sub3">

									<li><a href="listing.php?type=ballroom">Ballroom</a></li>
									<li><a href="listing.php?type=room">Room</a></li>
									<li><a href="listing.php?type=resort">Resort</a></li>
							
								</ul>
							</li>
					
					<li><a href="career.php">Career</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>

			<div id="main">
			
			<?php
			
			$id=$_GET['id'];
			$type=$_GET['type'];
			//$uid=$_GET['uid'];
			
			
			$a="booking.php?id=".$id."&type=".$type;
			
			?>
			
			
			<div id="welcome">
				
			</div>
			<div id="sidebar"><h2>
			<form action=<?php echo"$a"; ?> method="post">
			

										  										   
						<div>
								<strong>Check-in:</strong><br/>
									<select value="1" name="cdate">
									<?php
										for($i=1 ; $i <= 31 ; $i++)
										{
											?>
												<option value="<?php echo $i; ?>""><?php echo $i; ?></option>
											<?php
										}
											?>
									</select>
									<select value="Jan" name="cmonth">
											<option >Jan</option>
											<option >Feb</option>
											<option >Mar</option>
											<option >Apr</option>
											<option >May</option>
											<option >Jun</option>
											<option >Jul</option>
											<option >Aug</option>
											<option >Sep</option>
											<option >Oct</option>
											<option >Nov</option>
											<option >Dec</option>
									</select>

									<select value="2017" name="cyear">
											<?php
												for($i=2017 ; $i >= 1950 ; $i--)
												{
													?>
														<option value="<?php echo $i ?>"><?php echo $i ?></option>
													<?php
												}
													?>			
									</select>
							</div><br/>				   
										

							<div>
								<strong>Check-Out:</strong><br/>
									<select value="1" name="codate">
									<?php
										for($i=1 ; $i <= 31 ; $i++)
										{
											?>
												<option value="<?php echo $i; ?>""><?php echo $i; ?></option>
											<?php
										}
											?>
									</select>
									<select value="Jan" name="comonth">
											<option >Jan</option>
											<option >Feb</option>
											<option >Mar</option>
											<option >Apr</option>
											<option >May</option>
											<option >Jun</option>
											<option >Jul</option>
											<option >Aug</option>
											<option >Sep</option>
											<option >Oct</option>
											<option >Nov</option>
											<option >Dec</option>
									</select>

									<select value="2017" name="coyear">
											<?php
												for($i=2017 ; $i >= 1950 ; $i--)
												{
													?>
														<option value="<?php echo $i ?>"><?php echo $i ?></option>
													<?php
												}
													?>			
									</select>
							</div><br/>										
										   
										   
				                     <input type="submit" value="confirm">
									 
									 </form>
									 </h2>
						</div>
				
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved. 
			</div>

		</div>
	</body>
</html>