<?php
include "sqlconnect.php";
include "stardel.php";
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

$sql = "SELECT * FROM hotels where CITY_ID=".$X;
$result = $conn->query($sql);
$res = $conn->query($sql);
if ($res->num_rows > 0)
$r = $res->fetch_assoc()
?>


<div class="container-fluid" style="background-image:url('images/hot.jpg');background-repeat:repeat-y;background-size:100% 50%;">
	<h1>Displaying Hotels For <?php echo $r['CITY_NAME']; ?> </h1>
	<div class="col-md-4" ></div>
	<div class="col-md-4">

	<?php
	$i=1;
	$rest1="images/hotel.jpg";
	$rest2="images/hotel2.jpg";
     $rest3="images/hotel3.jpg";
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
         starshow($row['RATINGS']);
         
         echo "</div>";
         $i++;
		
		echo'<table class="table">
	<thead>
		<tr>
			
			<th>Hotel</th>
			<th>Price</th>
			<th>Address</th>
		</tr>
	</thead>';
	echo"<tbody>
		<tr>
			
			<td>".$row['HOTEL_NAME']."</td>
			<td>"."Rs ".$row['PRICE']."</td>
			<td>". $row['ADDRESS']."</td>
		</tr>";

	//	echo "<br> <br> <br>  Name: " . $row["cityname"]. "<br> Restaurant: " . $row["restaurant"]."<br> Cuisine : " .$row["cuisine"] ."<br> <br>"."</div> ";
		
	
		echo "</table></div></br> </br>";
          }}

$conn->close();
?>

          </div>


</html>