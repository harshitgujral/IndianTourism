<html>
<head>  
  <title>Indian Tourism</title>
 
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="icon" id="favicon" href="http://www.tutorialrepublic.com/lib/images/parrot.png" type="image/x-icon"/>
 <?php
 include "banner.php"; 
 require "calender.php";
 
 ?> 
<style>
input[type=search] {

    width: 25%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=search]:focus {
    width: 40%;
}
.value {
  margin-top: 150px;
  margin-left:330px;
    width: 150px;
    padding: 20px 25px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
     position: relative;
    display: inline-block;
cursor: pointer;
}
#nen{ width: 100px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
   padding: 12px 10px 12px 10px;}


 body{
  
   background-repeat:no-repeat;
   background-size:1380px 200px;
   background-position:0px 500px ;
 }
div.cont{
	 background-image:url("https://d152j5tfobgaot.cloudfront.net/wp-content/uploads/2015/05/Yourstory_India_tourism.jpg");
	  background-repeat: repeat-y;
	  background-size: 100% 100%;
	 width:1360px;
	 height:400px;
	
}



</style>

</head>
<body>
<?php
$nextpage="";
if(isset($_GET['fool'])){
	$page=$_GET['fool'];
	$name=$_GET['cityname'];
if($page=="Attractions")
  header('Location: projecta.php?cityname='.$name);
else if ($page=="Hotels")
	   header('Location: projecth.php?cityname='.$name);
	
else if ($page=="Restraunts")
	header('Location: project.php?cityname='.$name);


}


?>
<div class="cont">
<form action="searchpage.php" method="GET">

 <select class="value" name="fool"><font color="red">
   
    <option value="Attractions">Attractions</option>
    <option value="Hotels" >Hotels</option>
    <option value="Restraunts">Restraunts</option>
   </font>
  </select>
  

<input type="search" id="tags1" name="cityname" placeholder="Where Would You Like To Go..." required>
  
    <input type="submit" name="submit" id="nen">
</form>
</div>
</body>
</html>

<script>

  $(function() {
    var availableTags = [
    <?php include "citynames.php";
	?>
    ];
    $( "#tags1" ).autocomplete({
      source: availableTags

    });
  });


  </script>