<!DOCTYPE html>



<?php

session_start();



?>


<?php


if(!isset($_SESSION['admin'])){
	
	
	header("Location: intrusion.php");
}



?>





<html>
	<head>
		<title>Confirm Booking</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("a4.jpg");
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
				
				
				
								#list{
					position:absolute;
					left:350px;
					top:400px;
					
					
					color: #FFFF00;
					background: black;
					opacity: .7;
				
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
				<h1>CONFIRM BOOKING</h1>
			</div>
			
							<div id="logout">
				
				<?php   echo $_SESSION['admin'];?>
				<br>
				<a href="../d.php">Logout</a>
				
				</div>

			<div id="nav">
				<ul>
					<li><a href="ahome.php">Home</a></li>
					<li><a href="view.php">Members</a></li>
					
					<li><a href="#">Booking</a>
					<ul class="sub3">

							<li><a href="confirm_ballroom.php?type=ballroom&booking=pending">Ballroom</a></li>
							<li><a href="confirm_ballroom.php?type=room&booking=pending">Room</a></li>
							<li><a href="confirm_ballroom.php?type=resort&booking=pending">Resort</a></li>
							
						</ul>
					</li>
					<li><a href="uploadc.php">Career</a></li>
				</ul>
			</div>
			<div id="main">
			
			<h2>
				
		<div id="list">		
				
				<?php
				
				
			$type=$_GET['type'];
			$status=$_GET['booking'];
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

/*$jsonData='[{"id":"10","name":"test","cgpa":"9.99"},
{"id":"123","name":"xyz","cgpa":"3.90"},
{"id":"1256","name":"test2","cgpa":"2.30"}]';*/

//echo $jsonData;
$jsn=json_decode($jsonData);

//echo "<pre>";print_r($jsn);echo "</pre>";
/*for($i=0;$i<sizeof($jsn);$i++){
		echo $jsn[$i]["name"]." earned ".$jsn[$i]["cgpa"];
		echo "<br>";
}*/

echo "<table border=1>

<th>ID</th>
<th>Type</th>
<th>Price</th>
<th>Capacity</th>
<th>Booking</th>
<th>State</th>
<th>Confirm</th>";



for($i=0;$i<sizeof($jsn);$i++){
	//if($jsn[$i]->name=="abc")
		

	
	if($jsn[$i]->type==$type && $jsn[$i]->booking==$status){
		//echo $jsn[$i]->username." earned ".$jsn[$i]->password;
		echo"<tr>";
		echo "<td>".$jsn[$i]->Id."</td>";
		echo "<td>".$jsn[$i]->type."</td>";
		echo "<td>".$jsn[$i]->price."</td>";
		echo "<td>".$jsn[$i]->capacity."</td>";
		echo "<td>".$jsn[$i]->booking."</td>";
		echo "<td>".$jsn[$i]->state."</td>";
		
		
		
		$a="confrim_booking.php?id=".$jsn[$i]->Id;
		
		//echo "<td>";
		echo '<td><a href='."$a".'>confrim</a></td>';
		echo"</tr>";
		//echo "</td>";
		
		//echo"<br><br>";
		
		
	}
	
	

}
echo "</table>";

	
	
	//echo "not found";
	
	


/*foreach($jsn as $v){
	if($v->id=="123")
		echo $v->name."";
}*/
//print_r($_SERVER);





?>
				
				
				
				
				
				
				
				</div>
				
				
				
				
				
				
			</h2>	
				
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>

		</div>
	</body>
</html>