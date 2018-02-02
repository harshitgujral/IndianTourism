


<?php

include 'parrot.inc.php';

if (parrotin()) {

  include 'css.php';
   $countrycode=$_SESSION['countrycode'];




   $query2="SELECT * FROM countrylanguage WHERE CountryCode='$countrycode'";
 $query2_run=mysqli_query($current,$query2);


 ?>
  <div class="fixed">
  <?php include 'banner.php'; ?>
    <img src="parrot1.gif" class="parrot">
	<div style="width:360px; margin-left:320px; margin-top:35px;">
   <table class="table table-striped">
   <tr> <td colspan=3> <i> <font color='green'> Yeah! I have found all about it.Click on country name to know more. </i></font> </td> </tr>
  <tr> <td> <i> <font color='green'> All languages of <?php echo $countrycode ?> </i></font> </td> <td> <i> <font color='green'> Official Language (True/False) </i></font></td> <td> <i> <font color='green'> Percent Speakers </i></font> </td> </tr>

 <?php

 while ($result2=mysqli_fetch_assoc($query2_run)){
 $language=$result2['Language'];
 $official=$result2['IsOfficial'];
 $percent=$result2['Percentage'];
 echo "<tr> <td><a href='parrot2.php?languages=$language'> $language</a> </td> <td> $official </td> <td> $percent% </td> </tr> ";
 }

 ?>
 <tr> <td colspan=2><i> <font color='green'>To ask something again <a href='wiseparrot.php'> click here </a></i></font>   </td> </tr>

 </table>
 </div>
 </div>
  
  
  


  <?php
} 

else header('Location: wiseparrot.php');
?>

