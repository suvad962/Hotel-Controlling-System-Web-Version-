<!DOCTYPE html>

<?php


session_start();





?>



<html>
	<head>
		<title>Booking sevices</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("images/resort.jpg");
				}
				
				#header{
					background: #333333;
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
				
				
				
				#list{
					Position:absolute;
					left:400px;
					top:400px;
					
					
					color: #FFFF00;
					background: black;
					
				
				}
				#logout{
					//width: 70%;
					position:absolute;
					top:20px;
					left:1200px;
					padding: 0 5% 5% 0;
					
					color: red;
					text-align:center;
					
				}
				/* Navigation ber end here here */

				
			</style>
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>BOOKING SERVICES</h1>
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
				<a href="d.php">Logout</a>
				
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
					
			<h1>
			
			<div id="list">
			
			
			<?php
			
			$type=$_GET['type'];
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","hotel");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
$jsonData= getJSONFromDB("select * from room");
$jsn=json_decode($jsonData);

echo "<table border=1>
     <th>ID</th>
     <th>Type</th>
     <th>Price</th>
     <th>Capacity</th>
     <th>Booking</th>
     <th>State</th>
     <th>Book</th>";

for($i=0;$i<sizeof($jsn);$i++){
	
	if($jsn[$i]->type==$type && $jsn[$i]->status=="nb"){
		$a="n_room.php?id=".$jsn[$i]->Id."&type=".$jsn[$i]->type."&price=".$jsn[$i]->price."&capacity=".$jsn[$i]->capacity;
	    echo"<tr>";
		echo "<td>".$jsn[$i]->Id."</td>";
		echo "<td>".$jsn[$i]->type."</td>";
		echo "<td>".$jsn[$i]->price."</td>";
		echo "<td>".$jsn[$i]->capacity."</td>";
		echo "<td>".$jsn[$i]->booking."</td>";
		echo "<td>".$jsn[$i]->state."</td>";
		//$a="confrrm_booking.php?id=".$jsn[$i]->Id;
		echo '<td><a href='."$a".'>Book</a></td>';
		echo"</tr>";	
	}
}
echo "</table>";


?>
			
			
			
			
			
			</div>
			
			
			
			
			
			
<?php


?>
			
			</h1>
			
			</div>
			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>



		</div>
	</body>
</html>