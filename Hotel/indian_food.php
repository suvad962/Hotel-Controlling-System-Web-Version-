<!DOCTYPE html>
<html>
	<head>
		<title>Indian Food</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url(images/food2.jpg);
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
					min-height: 800px;
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
					width: 30%;
					float: left;
					color: white;
					padding: 0 5% 5% 0;
					min-height: 800px;
					text-align: center;
				}
				#sidebar{
					width: 30%;
					float: left;
					color: white;
					padding: 0 5% 5% 0;
					min-height: 800px;
					text-align: center;
				}
				#nextbar{
					width: 30%;
					float: left;
					color: white;
					min-height: 800px;
					text-align: center;
				}
				/*Content code end here*/

			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>INDIAN FOOD</h1>
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
				<h2>
					<table border="2">
					<tr>
						<th colspan="2" align="center">Breakfast</th>
					</tr>
					<tr>
						<th>Manu Name</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>Oats Idli</td>
						<td>200/=</td>
					</tr>
					<tr>
						<td>Dal ka Paratha</td>
						<td>200/=</td>
					</tr>
					<tr>
						<td>Methi Ka Thepla</td>
						<td>250/=</td>
					</tr>
					<tr>
						<td>Moong Dal Cheela</td>
						<td>100/=</td>
					</tr>
					<tr>
						<td>Misal Pav</td>
						<td>300/=</td>
					</tr>
					<tr>
						<td>Sali Par Edu</td>
						<td>350/=</td>
					</tr>
					<tr>
						<td>Rawa Upma</td>
						<td>200/=</td>
					</tr>
					<tr>
						<td>Namkeen Seviyaan</td>
						<td>200/=</td>
					</tr>
					<tr>
						<td>Uttapam</td>
						<td>150/=</td>
					</tr>
					<tr>
						<td>Poha</td>
						<td>100/=</td>
					</tr>
					</table>
				</h2>
				</div>

				<div id="sidebar">
					<h2>
					<table border="2">
					<tr>
						<th colspan="2" align="center">Lunch</th>
					</tr>
					<tr>
						<th>Manu Name</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>Masala Bhindi</td>
						<td>350/=</td>
					</tr>
					<tr>
						<td>Chana Kulcha</td>
						<td>450/=</td>
					</tr>
					<tr>
						<td>Beans Thoran, Potato Curry & Rice</td>
						<td>400/=</td>
					</tr>
					<tr>
						<td>Gujarati Kadhi</td>
						<td>350/=</td>
					</tr>
					<tr>
						<td>Allahabad Ki Tehri</td>
						<td>500/=</td>
					</tr>
					<tr>
						<td>Low Fat Dahi Chicken</td>
						<td>650/=</td>
					</tr>
					<tr>
						<td>Kolhapuri Vegetables</td>
						<td>400/=</td>
					</tr>
					<tr>
						<td>Black Channa and Coconut Stew</td>
						<td>550/=</td>
					</tr>
					<tr>
						<td>Urlai Roast</td>
						<td>300/=</td>
					</tr>
					<tr>
						<td>Paneer Achaari</td>
						<td>750/=</td>
					</tr>
					</table>
				</h2>

				</div>
				<div id="nextbar">
					<h2>
					<table border="2">
					<tr>
						<th colspan="2" align="center">Dinner</th>
					</tr>
					<tr>
						<th>Manu Name</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>Lemon Chicken</td>
						<td>600/=</td>
					</tr>
					<tr>
						<td>Guilt-Free Galouti Kebab </td>
						<td>550/=</td>
					</tr>
					<tr>
						<td>Chettinad Fish Fry</td>
						<td>450/=</td>
					</tr>
					<tr>
						<td>Dum Aloo Lakhnawi</td>
						<td>300/=</td>
					</tr>
					<tr>
						<td>Keema Biryani</td>
						<td>800/=</td>
					</tr>
					<tr>
						<td>Dum Paneer Kali Mirch</td>
						<td>750/=</td>
					</tr>
					<tr>
						<td>Shahi Egg Curry</td>
						<td>500/=</td>
					</tr>
					<tr>
						<td>Malabari Prawn Curry</td>
						<td>850/=</td>
					</tr>
					<tr>
						<td>Makhmali Kofte</td>
						<td>600/=</td>
					</tr>
					<tr>
						<td>Dal Makhani</td>
						<td>450/=</td>
					</tr>
					</table>
				</h2>
				</div>
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>

		</div>
	</body>
</html>