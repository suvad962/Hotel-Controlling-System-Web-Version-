




<html>
	<head>
		<title>REGISTRATION</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background:url("images/2.jpg");
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
					position:relative;
						
					
					padding top:200px; 
					padding left:60px;
					

				    
					
					font-size:25px;
					
					Backgroud-color:#fff;
					opacity:.6;
					
					
					
					
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
					width: 60%;
					float: left;
					padding: 0 5% 5% 0;
					color: #0066FF;
				}
				#sidebar{
					text-align: center;
					width: 35%;
					float: left;
					color: #006633;
					min-height:700px;
				}
				/*Content code end here*/

			</style>
	</head>
	<body>

<div id="all">


<div id="header">
				<h1>REGISTRATION</h1>
			</div>

			<div id="nav">
				<ul>
					<li><a href="front_page.php">Home</a></li>
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

							<li><a href="ballroom.php">Ballroom</a></li>
							<li><a href="#">Room</a>
								<ul class="sub4">

									<li><a href="n_room.php">Normal</a></li>
									<li><a href="d_room.php">Delux</a></li>
									<li><a href="l_room.php">Luxary</a></li>
							
								</ul>
							</li>
							<li><a href="resort.php">Resort</a></li>
							
						</ul>
					</li>
					<li><a href="career.php">Career</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>





























<div id="main">


<?php


function updateDB($sql){
	$conn = mysqli_connect("localhost", "root", "", "hotel");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(mysqli_query($conn, $sql)) {
		//echo "New records updated successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}

$room=$_REQUEST['room'];
$status=$_REQUEST['status'];
$price=$_REQUEST['price'];
$capacity=$_REQUEST['capacity'];
$operation=$_REQUEST['operation'];

$id=$_POST['id'];

$booking="Not Booked";
$state="None";

if($_POST['operation']=="Add"){

$flag=0;

if(!empty($_REQUEST['room']) && !empty($_REQUEST['status']) && !empty($_REQUEST['price']) && !empty($_REQUEST['capacity']) && !empty($_REQUEST['operation']))
{
	
}
else{
	
	header("Location: error.php?code=validation");
	
	$flag=1;
	
	echo "Please fill in all the forms <br>";
	
}


$sql = "insert into room values (DEFAULT,'".$room."','".$status."','".$price."','".$capacity."','".$booking."','".$state."')";


updateDB($sql);
echo"sent to db";


}
else if($_POST['operation']=="Update")
{
	if(empty($id)){
		header("Location: error.php?code=validation");
		
	}
	
	
$sql = "UPDATE room SET type='".$room."',status='".$status."',price='".$price."',capacity='".$capacity."' WHERE Id='".$id."'";

updateDB($sql);

echo "record has been updated";

}

else if($operation=="Delete"){
	
		if(empty($id)){
		header("Location: error.php?code=validation");
		
	}
	

$sql = "DELETE FROM room WHERE Id='".$id."'";

updateDB($sql);
		
}


header("Location: success.php");

?>
</div>


</body>

</html>