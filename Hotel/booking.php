
<?php

session_start();


?>





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

$flag=1;

if(isset($_GET['id']) && isset($_GET['cdate']) && isset($_GET['cdate']) && isset($_GET['cdate']) && isset($_GET['cdate']) && isset($_GET['cdate']) && isset($_GET['cdate']) && isset($_GET['cdate']))

{
$rid=$_GET['id'];
$cdate=$_REQUEST['cdate'];
$cmonth=$_REQUEST['cmonth'];
$cyear=$_REQUEST['cyear'];
$codate=$_REQUEST['codate'];
$comonth=$_REQUEST['comonth'];
$coyear=$_REQUEST['coyear'];
$uid=$_SESSION['email'];

$rtype=$_REQUEST['type'];


$flag=0;

}




$sql = "insert into booking values (DEFAULT,'".$cdate."','".$cmonth."','".$cyear."','".$codate."','".$comonth."','".$coyear."','".$rid."','".$rtype."','".$uid."')";


$status="booked";
$booking="pending";

$sql2 = "UPDATE room SET status='".$status."',booking='".$booking."' WHERE Id='".$rid."'";

if($flag==0){
updateDB($sql);
updateDB($sql2);
header("Location: admin/success.php");
}



?>