<?php
include "sqlconnect.php";
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

$query="select City_Id from city2 where City_Name='$cityname'";
$query_run=mysqli_query($current,$query);


while($result=mysqli_fetch_assoc($query_run)){
	$X=$result['City_Id'];
	
}
$sql = "SELECT * FROM attraction_sites where City_Id=".$X;
$result = $conn->query($sql);
$res = $conn->query($sql);
if ($res->num_rows > 0)
$r = $res->fetch_assoc()
?>


<div class="container-fluid" style="background-image:url('images/attr.jpg')">
	<h1><font color='white'>Displaying Attractions For <?php echo $r['City_Name']; ?></font> </h1>
	<div class="col-md-3" ></div>
	<div class="col-md-5">

	<?php
	$i=1;
	
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
          $attname=$row['Attraction_Name'];
		  $imgsrc=str_replace(" ","",$attname);
          $rest="assets/images/".$imgsrc.".jpg";
		  $open=$row['Time_Open'];
		  $close=$row['Time _Close'];
		  if($open=="")
			  $open="9:00";
		   if($close=="")
			  $close="17:00";
		  

		echo '<div class= "row" style="background-color:#cceedd; width:150%;height:75%;font-size:22px;font-weight:bold;">
         <div class="cont" style='."background-image:url($rest);height:350px;width:150%px;background-repeat:no-repeat;background-size:100% 100%;".">
         </div>";
         $i++;
		
		echo'<table class="table">
	<thead>
		<tr>
			
			<th>Attraction</th>
			<th>Time Open</th>
			<th>Time Close</th>
			<th>Address</th>
		</tr>
	</thead>';
	echo"<tbody>
		<tr>
			
			<td>".$row['Attraction_Name']."</td>
			<td>".$open."</td>
			<td>".$close."</td>
			<td>". $row['Address']."</td>
		</tr>";

	//	echo "<br> <br> <br>  Name: " . $row["cityname"]. "<br> Restaurant: " . $row["restaurant"]."<br> Cuisine : " .$row["cuisine"] ."<br> <br>"."</div> ";
		
	
		echo "</table></div></br> </br>";
          }}

$conn->close();
?>

          </div>


</html>