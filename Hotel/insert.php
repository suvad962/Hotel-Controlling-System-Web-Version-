
<?php


session_start();
?>

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


<?php


function updateDB($sql){
	$conn = mysqli_connect("localhost", "root", "", "hotel");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(mysqli_query($conn, $sql)) {
		echo "New records updated successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}

/*

if(!isset($_REQUEST['gender'])){
	
	$_REQUEST['gender']=5;
	
}
*/



$flag=0;

if(isset($_REQUEST['firstname']) && isset($_REQUEST['lastname']) && isset($_REQUEST['date']) && isset($_REQUEST['month']) && isset($_REQUEST['year']) && isset($_REQUEST['gender']) && isset($_REQUEST['Email']) && isset($_REQUEST['Pass']) && isset($_REQUEST['Cpass']))
{
	
$Firstname=$_REQUEST['firstname'];
$Lastname=$_REQUEST['lastname'];
$Date=$_REQUEST['date'];
$Month=$_REQUEST['month'];
$Year=$_REQUEST['year'];
$Gender=$_REQUEST['gender'];
$Email=$_REQUEST['Email'];
$Pass=$_REQUEST['Pass'];
$Cpass=$_REQUEST['Cpass'];
	
	
	
	
	
	
	
}
else{
	
	$flag=1;
	header("Location: admin/error.php?code=validation");
	
	echo "Please fill in all the forms <br>";
	
}

if($_REQUEST['Pass']==$_REQUEST['Cpass']){
	
	
	
}
else{
	
	$flag=1;
	header("Location: admin/error.php?code=match");
	
	echo "Password did not match";
}


if(isset($_POST['action']) || $_POST['action']=="update"){
	
	
	if($flag==1){
		
		header("Location: admin/error.php");
	}
	
	
	$id=$_SESSION['id'];
	$sql2 = "UPDATE user_info SET First_Name='".$Firstname."',Last_Name='".$Lastname."',Date='".$Date."',Month='".$Month."',Year='".$Year."',Gender='".$Gender."',Email='".$Email."',Password='".$Pass."' WHERE Id='".$id."'";
	
	updateDB($sql2);
	header("Location: admin/success.php");
	$flag=1;
}

$sql = "insert into user_info values (DEFAULT,'".$Firstname."','".$Lastname."','".$Date."','".$Month."','".$Year."','".$Gender."','".$Email."','".$Pass."')";

if($flag==0){
updateDB($sql);
header("Location: admin/success.php");
}

else{
	
	header("Location: admin/error.php");
}



?>

?>
</div>


</body>

</html>