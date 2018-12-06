<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("images/hotel3.jpg");
				}
				
				#header{
					background: orange;
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
					color: black;
					text-align: center;
					
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
				<h1>ABOUT</h1>
			</div>

			<div id="nav">
				<ul>
					<li><a href="fp.php">Home</a></li>
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
				<h1>ABOUT</h1>
				<p>
					Many years ago, Four Seasons set out to create a corporate mission statement that would guide the actions of everyone in the organization. Our goals, beliefs and principles are the foundation of the work we do every day on behalf of our guests.
					<hr/>
					<h2>WHO WE ARE</h2>
					<p>We have chosen to specialize within the hospitality industry by offering only experiences of exceptional quality. Our objective is to be recognized as the company that manages the finest hotels, resorts and residence clubs wherever we locate. We create properties of enduring value using superior design and finishes, and support them with a deeply instilled ethic of personal service. Doing so allows Four Seasons to satisfy the needs and tastes of our discriminating customers, and to maintain our position as the world's premier luxury hospitality company.</p>
					<hr/>
					<h2>WHAT WE BELIEVE</h2>
					<p>Our greatest asset, and the key to our success, is our people. We believe that each of us needs a sense of dignity, pride and satisfaction in what we do. Because satisfying our guests depends on the united efforts of many, we are most effective when we work together cooperatively, respecting each other’s contribution and importance.</p>
					<hr/>
					<h2>HOW WE SUCCEED</h2>
					<p>We succeed when every decision is based on a clear understanding of and belief in what we do, and when we couple this conviction with sound financial planning. We expect to achieve a fair and reasonable profit to ensure the prosperity of the company and to offer long-term benefits to our hotel owners, our customers and our employees.</p>
					<hr/>
					<h2>HOW WE BEHAVE</h2>
					<p>We demonstrate our beliefs most meaningfully in the way we treat each other and by the example we set for one another. In all our interactions with our guests, customers, business associates and colleagues, we seek to deal with others as we would have them deal with us.</p>
					<hr/>
				</p>
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>

		</div>
	</body>
</html>