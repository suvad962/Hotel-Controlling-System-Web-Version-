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
		<title>Home</title>
			<style type="text/css">
				/*Page layout start here*/
				body{
					margin: 0px;
					padding: 0px;
				}

				#all{
					background-image: url("a1.jpg");
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

				#welcome{
					width: 70%;
					float: left;
					padding: 0 5% 5% 0;
					color: black;
				}
				
				#logout{
		
					position:absolute;
					top:20px;
					left:1200px;
					padding: 0 5% 5% 0;
					
					color: red;
					text-align:right;
					
				}
				
				

				
					#Menu{
					position:absolute;
					left:60px;
					top:400px;
					
					
					color: #FFFF00;
					background: black;
					opacity: .7;
				
				}
				
				
				
				#list{
					position:absolute;
					left:350px;
					top:400px;
					
					
					color: #FFFF00;
					background: black;
					opacity: .7;
				
				}
				
				
				
				
				
				
				
				/* Navigation ber end here here */


			</style>
			
			
			
			
			
			<script type="text/javascript">
			
			function visible(){
				
				var operation=document.forms["register"]["operation"].value;
				
			
			if(operation=="Update" || operation=="Delete")
			
			{
				
			     document.forms["register"]["id"].style.visibility="visible";
				document.getElementById('idtext').style.visibility="visible";
				
			}
			else{
				
				document.forms["register"]["id"].style.visibility="hidden";
				document.getElementById('idtext').style.visibility="hidden";
				
			}
			
			}
			
			
			</script>
			
			
			
			
			
			
			
			
			
	</head>
	<body>
		<div id="all">

			<div id="header">
				<h1>WELCOME ADMIN</h1>
			</div>

			<div id="nav">
				<ul>
					<li><a href="../fp.php">Home</a></li>
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
				<div id="welcome">
					<h1>Welcome Admin</h1>
					</p>
				</div>
				
				<div id="logout">
				
				<?php   echo $_SESSION['admin'];?>
				<br>
				<a href="../d.php">Logout</a>
				
				</div>

					<div id="list">	
					
					
					
									<?php
				
				
				//$type=$_GET['type'];
				//$status=$_GET['booking'];
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
<th>State</th>";



for($i=0;$i<sizeof($jsn);$i++){
	
		echo"<tr>";
		echo "<td>".$jsn[$i]->Id."</td>";
		echo "<td>".$jsn[$i]->type."</td>";
		echo "<td>".$jsn[$i]->price."</td>";
		echo "<td>".$jsn[$i]->capacity."</td>";
		echo "<td>".$jsn[$i]->booking."</td>";
		echo "<td>".$jsn[$i]->state."</td>";
		
		
		
	
		echo"</tr>";
		
	
	

}
echo "</table>";


?>
					

					
					</div>
					
					
					
					
					
					
					
					
						<div id="Menu">
						<h1>Manage Rooms</h1>
						
						<form action="room_insert.php" method="post" name="register">
						 <label for="room">Type:</label>
                         <select name="room">
                         <option value="room">Room</option>
                         <option value="ballroom">Ballroom</option>
                         <option value="resort">Resort</option>
                         </select>
						 <br>
						 <br>
						 
						 <label for="status">status:</label>   
	                     <select name="status">
                         <option value="booked">Booked</option>
                         <option value="nb">Not Booked</option>
                         </select>
						 <br>
						 <br>
						 
						 <label for="prince">price:</label> 
				         <input type="text" name="price">
						 <br>
						 <br>
						 
						 
						 <label for="capacity">capacity:</label>  
				         <input type="text" name="capacity"><br>
						 
                         <label for="operation">operation:</label> 
                         <select name="operation" onchange="visible()">
                         <option value="Add">Add</option>
                         <option value="Update">Update</option>
                         <option value="Delete">Delete</option>
                         </select>
						 <br>
						 <br>
						 
						 <label for="Id" style="visibility:hidden;" id="idtext">Id:</label>
			             <input type="text" name="id" style="visibility:hidden;">
						 <br>
						 <br>
						 
				         <input type="submit"  value="submit" name="submit">		 
				
				</form>
				
			
						 
						 
						 
   
   </div>
				
				
	
				
				
			</div>

			<div id="footer">
				&copy; Copyright 1017. All Right Reserved.
			</div>

		</div>
	</body>
</html>