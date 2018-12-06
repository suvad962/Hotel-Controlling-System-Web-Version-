


<?php

//echo print_r($GLOBALS);


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


if(empty($_FILES['file'])  || empty($_POST['name']) || empty($_POST['email']))


{

header("Location: admin/error.php?code=validation");

//echo"error";

}

else {
	//print_r($GLOBALS);
	$file=$_FILES['file'];
	//echo $file;
	$file_name=$file['name'];
    $file_tmp=$file['tmp_name'];
   $file_size=$file['size'];
   $file_error=$file['error'];	
	
	
	$file_ext= explode('.',$file_name);
	$file_ext= strtolower(end($file_ext));
	
	$allowed=array('docx','pdf');
	
	if(in_array($file_ext,$allowed)){
		
		if($file_error==0){
			
			$file_name_new = uniqid('',true).'.'.$file_ext;
			$file_destination="upload/".$file_name_new;
			move_uploaded_file($file_tmp,$file_destination);
			echo $file_destination;
			
			
		}
		
	}








$Firstname=$_POST['name'];

$Email=$_POST['email'];



//$flag=0;
/*
if($_REQUEST['name']!= Null && $_REQUEST['email'] != Null)
{
	
}
else{
	
	$flag=1;
	
	echo "Please fill in all the forms <br>";
	
}

*/


$sql = "insert into career values (DEFAULT,'".$Firstname."','".$Email."','".$file_destination."')";


	updateDB($sql);

    header("Location: admin/success.php");






}








?>