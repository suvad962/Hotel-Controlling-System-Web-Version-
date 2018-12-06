<!DOCTYPE html>
<html>
	<head>
		<title>Job Portal</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("a6.jpg");
				}
				
				#header{
					background: #0070A6;
					min-height: 55px;
					padding: 33px 5%;
					color: white;	
				}
				#nav{
					background: black;
					opacity: .7;
					min-height: 60px;
					padding: 0 5%;	
				}
				#main{
					min-height: 700px;
					padding: 0 5%;	
					color: #FFFF00;
					
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
					background-color: black;
				}
				#nav ul li:hover > a{
				background-color: gray;
				}
				
				#nav ul ul.sub3{
					display: none;
					position: absolute;
					top: 61px;
					left: 0px;
				}
				
				#nav ul li:hover .sub3 {
					display: block;
				}
				
				/* Navigation ber end here here */


			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>JOB PORTAL</h1>
			</div>

			<div id="nav">
				<ul>
					<li><a href="ahome.php">Home</a></li>
					<li><a href="rud_admin.php">Admin</a></li>
					<li><a href="#">Booking</a>
					<ul class="sub3">

							<li><a href="confirm_ballroom.php">Ballroom</a></li>
							<li><a href="crud_room.php">Room</a></li>
							<li><a href="confirm_resort.php">Resort</a></li>
							
						</ul>
					</li>
					<li><a href="job.php">Career</a></li>
				</ul>
			</div>

			<div id="main">
				
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>

		</div>
	</body>
</html>