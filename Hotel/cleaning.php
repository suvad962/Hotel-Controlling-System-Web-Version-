<!DOCTYPE html>
<html>
	<head>
		<titleCleaning Service</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background: #0095C6;
				}
				
				#header{
					background: #003333;
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
					min-height: 800px;
					padding: 0 5%;	
					background-image: url("images/cleaning.jpg");
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

				
			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>CLEANING SERVICE</h1>
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
				<h1 align="center"><u>So Clean are a prominent and professional cleaning company, providing Hotel Cleaning Services throughout London, Kent and the South East a cleaning solution tailored to their specific needs.</u></h1>
				<h2>Hotel Cleaning Services</h2>
				<p>SoClean are a professional cleaning company maintaining numerous hotel cleaning contracts throughout London, Kent and the South East. We are renowned for our attention to detail <br/>and professionalism, when it comes to cleaning hotels.  If you are looking for a Hotel Cleaning Company, call us on 01689 853 366 .<br/>
				SoClean manage the 7 Star Intercontinental Hotel in Bangladesh’s Park Lane, a 3-minute walk from Hyde Park Corner tube station and 10-minute walk from Buckingham Palace.</p>
				<h2>Hotel Cleaners / Front of House</h2>
				<p>SoClean’s professional hotel cleaners focus on attention to detail. Our cleaning staff ensure outstanding cleanliness in Front of House areas, including:</p>
				<ol>
					<li>Restaurants</li>
					<li>Reception Areas</li>
					<li>Lobbies</li>
					<li>Spas</li>
					<li>Gymnasiums</li>
					<li>Toilets</li>
				</ol>
				<p>
					<h2>Room Cleaning / House Keeping</h2>
					<p>When it comes to Chambermaids and Cleaners, our professional hotel cleaning team are presentable, knowledgeable, articulate and have good customer service skills.<br/> We carry out our tasks, ensuring your guests have a pleasant and relaxing stay.</p>
				</p>
				<h2>Stewarding & Banqueting Services</h2>
				<p>We supply <b>Stewarding and Banqueting services</b> to suit and match the needs of a 5 Star environment. Our highly trained and enthusiastic teams meet the high standards required, with a positive attitude and a flexible approach.</p>
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved. 
			</div>

		</div>
	</body>
</html>