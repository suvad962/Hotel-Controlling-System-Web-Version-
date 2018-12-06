


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
$jsonData= getJSONFromDB("select * from admin_pass");

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
	
	if($_POST['name']==$jsn[$i]->username && $_POST['pass']==$jsn[$i]->password){
		//echo $jsn[$i]->username." earned ".$jsn[$i]->password;
		
		session_start();
		
		$_SESSION['admin']=$jsn[$i]->username;
		
		
		header("Location: admin/ahome.php");
		$flag=1;
	}

}

if($flag==0){
	
	
	echo "not found";
	
	
}












?>
