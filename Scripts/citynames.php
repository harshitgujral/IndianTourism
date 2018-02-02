<?php
include "sqlconnect.php";
$query="select CITY_ID, CITY_NAME from city2 order by CITY_NAME";
$query_run=mysqli_query($c,$query);
while($result=mysqli_fetch_array($query_run)){
	$name=$result['CITY_NAME'];
	//echo "\""."$name"."\"";
	echo '"'.$name.'"'.",";
	
}

?>

