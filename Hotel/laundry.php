<!DOCTYPE html>
<html>
	<head>
		<title>Laundry Service</title>
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
					background: #006633;
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
					background-image: url("images/laundry.jpg");
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
					width: 45%;
					float: left;
					padding: 0 10% 10% 0;
					color: #FFFF00;
				}
				#sidebar{
					width: 45%;
					float: left;
					color: #FFFF00;
					min-height:700px;
				}
				/*Content code end here*/

				
			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>LAUNDRY SERVICE</h1>
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
					<p>
					<h2>5 STAR LAUNDRY</h2>
					<p>LaundroKart has now partnered with luxury 5-Star hotels in the city to launder your premium clothes. These hotels have the best Laundry facilities and Experts who are trained to handle sensitive, expensive fabric.

					From your Armani jeans and Canali suits to your Kanjeevarams and Satya Paul sarees, you can now get them cleaned by the best in class Laundry services.

					All your favourite clothes will now be picked up from your home, sent to the best 5-Star hotels in AC cars, cleaned and brought back to you FRESH!

					Try us, we're worth.</p>
					<ul>
						<li>Expensive Suits & Sarees</li>
						<li>Luxury brands, Premium brands, Designer labels etc.</li>
						<li> Executive Shirts & Trousers</li>
						<li>Occasion wear with intricate detailing</li>
					</ul>
					</p>

				</div>
				<div id="sidebar">
					<h2>DRY CLEAN</h2>
					<p>LaundroKart has in-house Dry Cleaning facility located off Old Airport Road in Bangalore.

					Dry cleaning is a process where your garments are cleaned using a chemical solvent other than water. This method is used to clean delicate fabrics that cannot withstand the rough tumble of a washing machine and clothes dryer, it will also eliminate labor-intensive hand washing.

					When to Dry Clean your clothes? Ans: Just read washing instructions on your garments.</p>
					<ul>
						<li>Office Shirts - cotton, poly or mixed</li>
						<li>Trousers - cotton, wool or mixed</li>
						<li>Weekend wear</li>
						<li>Party wear</li>
						<li>Delicate clothing</li>
					</ul>
					<p>
						<h2>KG LAUNDRY</h2>
						<p>LaundroKart has in-house Laundry facility located off Old Airport Road in Bangalore.

						Laundry process is plain and simple. It's same as washing your clothes in your washing machine where the primary washing agent is water and detergent. Once washed, they are ironed and packed. Just that we use bigger machines where your clothes are segregated into: Whites, Coloured, Jeans, Trousers etc and then washed in big industrial machines.

						Dont have the time to put your clothes into washing machine and take the pain of ironing them? LaundroKart is your Answer! What more, we take them by KG.

						When to Launder your clothes? Ans: 80% of your clothes that you use on a daily basis.</p>
						<ul>
							<li>Tshirts, Shirts or other tops</li>
							<li>Jeans, Pyjamas or other night wear</li>
							<li>Bed sheets or other Sofa covers</li>
							<li>Undergarments</li>
					</ul>
					</p>
				</div>
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved. 
			</div>

		</div>
	</body>
</html>