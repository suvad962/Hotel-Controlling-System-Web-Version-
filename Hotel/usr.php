<!DOCTYPE html>


<?php

session_start();



?>


<?php


if(!isset($_SESSION['name'])){
	
	
	header("Location: admin/intrusion.php");
}



?>
<html>
	<head>
		<title>Home</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("images/hotel.jpg");
				}
				
				#header{
					background: #0070A6;
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

				/*Content code start here*/
				#welcome{
					width: 70%;
					float: left;
					padding: 0 5% 5% 0;
					color: white;
				}
				
				
				
				
				#column{
					position:absolute;
					top:359px;
					left:60px;
					
					padding: 0 5% 5% 0;
					color: black;
				}
				#sidebar{
					text-align: center;
					width: 25%;
					float: left;
					color: #FFFF00;
					opacity: .7;
					min-height:700px;
				}
				/*Content code end here*/
			</style>
	</head>
	<body>

		<div id="all">

			<div id="header">
				<h1>WELCOME TO HOTEL PHINIX</h1>
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
				<div id="welcome">
					<h1>Welcome to the Hotel Phinix</h1>
					</div>
					
					<div id="column">
					
					
					
						<form action="insert.php" method="POST">
							<div>
								<strong>First Name:</strong><br/>
								<input type="text" name="firstname" value="<?php echo $_SESSION['name'];?>"/>
							</div>
							<br>

							<div>
								<strong>Last Name:</strong><br/>
								<input type="text" name="lastname"  value="<?php echo $_SESSION['lname'];?>"/>
							</div>
							<br>

							<div>
								<strong>Date of birth:</strong><br/>
									<select value="<?php echo $_SESSION['date'];?>" name="date">
									<option value="<?php echo $_SESSION['date'];?>" selected><?php echo $_SESSION['date'];?></option>
									<?php
										for($i=1 ; $i <= 31 ; $i++)
										{
											?>
												<option value="<?php echo $i; ?>""><?php echo $i; ?></option>
											<?php
										}
											?>
									</select>
									
									<select name="month">
									        <option value="<?php echo $_SESSION['month'];?>" selected><?php echo $_SESSION['month'];?></option> 
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
                                    
									<select name="year">
									<option value="<?php echo $_SESSION['year'];?>" selected><?php echo $_SESSION['year'];?></option>
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
								<strong>Gender:</strong><br/>
								<input type="radio" name="gender" >
								<strong>Male </strong>

								<input type="radio" name="gender" >
								<strong>Female </strong>

								<input type="radio" name="gender" >
								<strong>Others </strong>
							</div>
							<br/>

							<div>
								<strong>E-Mail:</strong><br/>
								<input type="text" name="Email" value="<?php echo $_SESSION['email']; ?>"/>
							</div><br/>

							<div>
								<strong>Password:</strong><br/>
								<input type="Password" name="Pass"  value="<?php echo $_SESSION['password'];?>"/>
							</div>
							<br/>

							<div>
								<strong>Confirm Password:</strong><br/>
								<input type="Password" name="Cpass" value="<?php echo $_SESSION['password'];?>">
							</div>
							<br/>

							<div>
								
								<input type="submit" value="Update"/>
								
							</div>
							
							<input type="hidden" name="action" value="update">
						</form>
					
					
					
					
					</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
						</div>
						
						<?php
						
						
						
						 if(isset($_SESSION['name'])){
							 
							 
							 echo"<strong>Dear ".$_SESSION['name']." please select your convenient plan from our wide range of options<strong>";
							 
						 }
						
						?>
						

				

				<div id="sidebar">


				</div>
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved. 
			</div>

		</div>
	</body>
</html>