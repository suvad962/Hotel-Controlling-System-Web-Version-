


<?php

if(empty($_GET['id'])){
	
	
	header("Location: error.php");
	
	
	
	
}




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




$rid=$_GET['id'];


$booking="confirmed";

$sql2 = "UPDATE room SET booking='".$booking."' WHERE Id='".$rid."'";


updateDB($sql2);


header("Location: success.php");


?>