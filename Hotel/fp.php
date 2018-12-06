<!DOCTYPE html>

<?php


session_start();







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
				#sidebar{
					text-align: center;
					width: 25%;
					float: left;
					color: #FFFF00;
					background: black;
					opacity: .7;
					min-height:700px;
				}
				
				#logout{
					
					position:absolute;
					top:20px;
					left:1200px;
					padding: 0 5% 5% 0;
					
					color: red;
					text-align:center;
					
				}
				/*Content code end here*/
			</style>
	</head>
	<body>
	
		<div id="all">

			<div id="header">
				<h1>WELCOME TO HOTEL PHINIX</h1>
			</div>
			
			
				<div id="logout">
				
				<?php   
				
				if(isset($_SESSION['name']))
				{
				echo $_SESSION['name'];
				echo '<br><a href="d.php">Logout</a>';
				}
				
				?>
				<br>
				
				
				</div>
			
			
			
			
			
			
			
			
			
			

			<div id="nav">
				<ul>
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
					
					<div>
					<?php
					
					if(isset($_SESSION['name'])){
						
						echo "<strong>Your are Logged in<strong>";
						
						
						
					}
					
				
					
					
					?>
					
				</div>
				

				<div id="sidebar">
					<h1><center>Welcome to the login</center></h1> 
					<hr/>
					<form action="User_Log.php" method="POST">
					<br/>
						
						<h2>User name: </h2>
						<br/>
						<input type="text" name="name"/>
						<h2>Password: </h2>
						<br/>
						<input type="password" name="pass""/>
						<br/><br/>
						<input type="submit" value="Login"/>
					</form>
					<h3>Don't have account? <a href="registration.php">Sign up</a></h3>
					<h3>Admin <a href="login.php">Sign in</a></h3>

				</div>
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved. 
			</div>

		</div>
	</body>
</html>