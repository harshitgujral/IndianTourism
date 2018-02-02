<?php
include "sqlconnect.php";
include "banner.php";
//if(isset($_GET['City_Id']))

{
//$cityid=$_GET['City_Id'];
$attname="Borra Caves";

$query="select * from attraction_sites where Attraction_Name=".$attname;
$query_run=mysqli_query($current,$query);
while($result=@mysqli_fetch_assoc($query_run)){
      $cityname=$result['City_Name'];
      $attname=$result['Attraction_Name'];  
	  $address=$result['Address']; 
	  $open=$result['Time_Open']; 
	  //$close=$result['Time_Close']; 
	 

}

$imgsrc=str_replace(" ","",$attname);
$imgname="assets/images/".$imgsrc.".jpg";

}

?>
<div class="container-fluid"  style="height:600px;background-image:url('<?php echo $imgname;?>');background-size:100% 100%;">
 <img src="<?php echo $imgname;?>" class="img-circle" style="margin-top:35;margin-left:200px;">
</div>