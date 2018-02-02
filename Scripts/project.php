<?php

include "stardel.php";
require "sqlconnect.php";
?>
<html>
<body>

<?php 
include "bootstrap.php";
include "banner.php";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$cityname= $_GET['cityname'];

$query="select CITY_ID from city2 where CITY_NAME='$cityname'";
$query_run=mysqli_query($current,$query);


while($result=mysqli_fetch_assoc($query_run)){
	$X=$result['CITY_ID'];
	
}

$sql = "SELECT * FROM restra where cityid=".$X;
$result = $conn->query($sql);
$res = $conn->query($sql);
if ($res->num_rows > 0)
$r = $res->fetch_assoc()
?>


<div class="container-fluid" style="background-image:url('images/tb.jpg');">
	<h1>Displaying Restaurant For <?php echo $r['cityname']; ?> </h1>
	<div class="col-md-4" ></div>
	<div class="col-md-4">

	<?php
	$i=1;
	$rest1="images/restaurant.jpg";
	$rest2="images/restaurant2.jpg";
     $rest3="images/restaurant3.jpg";
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
           if($i==1)
           	$rest=$rest1;
           if($i==2)
           	$rest=$rest2;
           if($i==3)
           	$rest=$rest3;
           if($i>3)
           {	$i=1;
           	$rest=$rest1;}

		echo '<div class= "row-md-4" style="background-color:#cceedd; width:120%;height:55%;font-size:22px;font-weight:bold;">
         <div class="cont" style='."background-image:url($rest);height:200px;width:120%px;background-repeat:no-repeat;background-size:100% 100%;".">";
         starshow($row['reviews']);
         
         echo "</div>";
         $i++;
		
		echo'<table class="table" style="word-wrap:break-word;">
	<thead>
		<tr>
			
			<th>Restaurant</th>
			<th>Cuisine</th>
			<th>Address</th>
		</tr>
	</thead>';
	echo"<tbody>
		<tr>
			
			<td>".$row['restaurant']."</td>
			<td>".$row['cuisine']."</td>
			<td>". $row['address']."</td>
		</tr>";

	//	echo "<br> <br> <br>  Name: " . $row["cityname"]. "<br> Restaurant: " . $row["restaurant"]."<br> Cuisine : " .$row["cuisine"] ."<br> <br>"."</div> ";
		
	
		echo "</table></div></br> </br>";
          }}

$conn->close();
?>

          </div>

		<!--<div class ="row-md-4" style="background-color:#CCDDEE;width:120%;height:40%">second</div>
		<br>
		<div class="row-md-4" style="background-color:#AABBCC;width:120%;height:40%">third</div>
		<br>
	</div>

</div>
</body>-->

</html>