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
		<title>Job</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("a7.jpg");
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
					position:absolute;
					left:350px;
					top:400px;
					
					
					color: #FFFF00;
					background: black;
					opacity: .7;
				
				}
				
				
				#logout{
					
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
				<h1>JOB PORTAL</h1>
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
			
			<h1>
			
			
			<div id="list">
			
			
			<?php
			
			//$type=$_GET['type'];
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
$jsonData= getJSONFromDB("select * from career");
$jsn=json_decode($jsonData);
echo "<table border=1>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>CV</th>";


for($i=0;$i<sizeof($jsn);$i++){
	
	
		$a=$jsn[$i]->link;
	    echo"<tr>";
		echo "<td>".$jsn[$i]->id."</td>";
		echo "<td>".$jsn[$i]->name."</td>";
		echo "<td>".$jsn[$i]->email."</td>";

		//$a="confrrm_booking.php?id=".$jsn[$i]->Id;
		echo '<td><a href=../'."$a".'>Download</a></td>';
		echo"</tr>";	
	
}
echo "</table>";


?>
			
			
			
			
			
			</div>
			
			
			
			
			
			
<?php
				
/*
				$type=$_GET['type'];
				//$status=$_GET['status'];
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
{"id":"1256","name":"test2","cgpa":"2.30"}]';

//echo $jsonData;
$jsn=json_decode($jsonData);*

//echo "<pre>";print_r($jsn);echo "</pre>";
/*for($i=0;$i<sizeof($jsn);$i++){
		echo $jsn[$i]["name"]." earned ".$jsn[$i]["cgpa"];
		echo "<br>";
}*/
//for($i=0;$i<sizeof($jsn);$i++){
	//if($jsn[$i]->name=="abc")
		
/*
	
	if($jsn[$i]->status=="nb" && $jsn[$i]->type==$type){
		//echo $jsn[$i]->username." earned ".$jsn[$i]->password;
		//$a=$jsn[$i]->Id;
		$a="n_room.php?id=".$jsn[$i]->Id."&type=".$jsn[$i]->type."&price=".$jsn[$i]->price."&capacity=".$jsn[$i]->capacity;
		echo $jsn[$i]->Id." ";
		echo $jsn[$i]->type." ";
		echo $jsn[$i]->price." ";
		echo $jsn[$i]->capacity." ";
		echo $jsn[$i]->booking." ";
		echo $jsn[$i]->state." ";
		echo "<a href='".$a."'>Book</a>";
		echo"<br><br>";
		
		
	}

}


	
	
	//echo "not found";
	
	


/*foreach($jsn as $v){
	if($v->id=="123")
		echo $v->name."";
}*/
//print_r($_SERVER);





?>
			
			
			
			
			
		
			
			
			
			
			
			
			
			
			
			
			
			</h1>
				
			</div>
			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>



		</div>
	</body>
</html>