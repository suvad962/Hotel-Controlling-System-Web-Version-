<?php
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
     <th>State</th>
     <th>Confirm</th>";

for($i=0;$i<sizeof($jsn);$i++){
	
	if($jsn[$i]->type==$type && $jsn[$i]->booking==$status){
	    echo"<tr>";
		echo "<td>".$jsn[$i]->Id."</td>";
		echo "<td>".$jsn[$i]->type."</td>";
		echo "<td>".$jsn[$i]->price."</td>";
		echo "<td>".$jsn[$i]->capacity."</td>";
		echo "<td>".$jsn[$i]->booking."</td>";
		echo "<td>".$jsn[$i]->state."</td>";
		$a="confrim_booking.php?id=".$jsn[$i]->Id;
		echo '<td><a href='."$a".'>confrim</a></td>';
		echo"</tr>";	
	}
}
echo "</table>";


?>