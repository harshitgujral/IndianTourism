<?php
session_start();
?>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//$_SESSION($_GET["X"]);
$X=1028;
$sql = "SELECT * FROM restra where cityid=".$X;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo  " Name: " . $row["cityname"]. "<br> Restaurant: " . $row["restaurant"]. 

"<br> Cuisine : " .$row["cuisine"] ."<br> <br>";
    }
}

$conn->close();
?>