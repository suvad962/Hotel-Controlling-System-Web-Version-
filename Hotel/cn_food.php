<!DOCTYPE html>
<html>
	<head>
		<title>Chinease Food</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("images/food3.jpg");
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
					color: #990066;
					padding: 0 5% 5% 0;
					min-height: 800px;
					text-align: center;
				}
				#sidebar{
					width: 30%;
					float: left;
					color: #990066;
					padding: 0 5% 5% 0;
					min-height: 800px;
					text-align: center;
				}
				#nextbar{
					width: 30%;
					float: left;
					color: #990066;
					min-height: 800px;
					text-align: center;
				}
				/*Content code end here*/

			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>CHINEASE FOOD</h1>
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
						<td>Soybean Milk and Deep-Fried Dough Sticks</td>
						<td>900/=</td>
					</tr>
					<tr>
						<td>Steamed Buns Stuffed with Meat, Soup, or Nothing</td>
						<td>1200/=</td>
					</tr>
					<tr>
						<td>Chicken jhal fry</td>
						<td>150/=</td>
					</tr>
					<tr>
						<td>Tofu Pudding</td>
						<td>850/=</td>
					</tr>
					<tr>
						<td>Wheat Noodles</td>
						<td>650/=</td>
					</tr>
					<tr>
						<td>Rice Noodles</td>
						<td>750/=</td>
					</tr>
					<tr>
						<td>Steamed Glutinous Rice</td>
						<td>400/=</td>
					</tr>
					<tr>
						<td>Rice Porridge or Congee</td>
						<td>500/=</td>
					</tr>
					<tr>
						<td>Wontons and Dumplings</td>
						<td>800/=</td>
					</tr>
					<tr>
						<td>Pancakes with Eggs</td>
						<td>600/=</td>
					</tr>
					<tr>
						<td>Morning Tea and Dim Sum</td>
						<td>500/=</td>
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
						<td>Dim Sums</td>
						<td>750/=</td>
					</tr>
					<tr>
						<td>Hot and Sour Soup</td>
						<td>650/=</td>
					</tr>
					<tr>
						<td>Quick Noodles</td>
						<td>1200/=</td>
					</tr>
					<tr>
						<td>Spring Rolls</td>
						<td>850/=</td>
					</tr>
					<tr>
						<td>Stir Fried Tofu with Rice</td>
						<td>1500/=</td>
					</tr>
					<tr>
						<td>Shitake Fried Rice with Water Chestnuts</td>
						<td>1600/=</td>
					</tr>
					<tr>
						<td>Chicken with Chestnuts</td>
						<td>1300/=</td>
					</tr>
					<tr>
						<td>Date Pancakes</td>
						<td>1450/=</td>
					</tr>
					<tr>
						<td>Wok Tossed Veggies in Honey and Black Bean Glaze</td>
						<td>1250/=</td>
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
						<td>Spicy Sichuan-style prawns</td>
						<td>1200/=</td>
					</tr>
					<tr>
						<td>Chow mein</td>
						<td>850/=</td>
					</tr>
					<tr>
						<td>Chicken gril</td>
						<td>250/=</td>
					</tr>
					<tr>
						<td>Cashew chicken</td>
						<td>1500/=</td>
					</tr>
					<tr>
						<td>Stir-fried beef with oyster sauce</td>
						<td>1000/=</td>
					</tr>
					<tr>
						<td>Gunpowder chicken with dried red chillies & peanuts</td>
						<td>1750/=</td>
					</tr>
					<tr>
						<td>Salt and pepper prawns</td>
						<td>2000/=</td>
					</tr>
					<tr>
						<td>Sea bass with sizzled ginger, chilli & spring onions</td>
						<td>2350/=</td>
					</tr>
					<tr>
						<td>Chinese-style braised beef one-pot</td>
						<td>2200/=</td>
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