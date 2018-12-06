<?php

session_start();


?>
<?php



if(empty($_POST['name']) && empty($_POST['pass']))

{


header("Location: admin/error.php?code=validation");



}





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
$jsonData= getJSONFromDB("select * from user_info");

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
for($i=0;$i<sizeof($jsn);$i++){
	//if($jsn[$i]->name=="abc")
		
$flag=0;
	
	if($_POST['name']==$jsn[$i]->Email && $_POST['pass']==$jsn[$i]->Password){
		//echo $jsn[$i]->username." earned ".$jsn[$i]->password;
		$id=$jsn[$i]->ID;
		$name=$jsn[$i]->First_Name;
		$lname=$jsn[$i]->Last_Name;
		$date=$jsn[$i]->Date;
		$month=$jsn[$i]->Month;
		$y=$jsn[$i]->Year;
		$gender=$jsn[$i]->Gender;
		$email=$jsn[$i]->Email;
		$pass=$jsn[$i]->Password;
		
		session_start();
		
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		$_SESSION['password']=$pass;
		$_SESSION['id']=$id;
		$_SESSION['gender']=$gender;
		
		$_SESSION['lname']=$lname;
		$_SESSION['date']=$date;
		$_SESSION['month']=$month;
		$_SESSION['year']=$y;
		
		
		
		
		header("Location: usr.php?fn=$name&ln=$lname&d=$date&m=$month&y=$y&g=$gender&e=$email&p=$pass");
		
		//echo "Hola";
		$flag=1;
		break;
	}


}
if($flag==0){
	
	
	echo "not found";
	
	
}












?>
