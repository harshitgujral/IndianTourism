		 <?php

  include 'parrot.inc.php';
     if (parrotconti()) {

 $continent=$_SESSION['continent'];
 $query="SELECT * FROM country WHERE Continent='$continent'";
 $query_run=mysqli_query($current,$query);
  $rows=mysqli_num_rows($query_run);
      if ($rows<=38) {
        $a='fixed';}
        else $a='medfixed';

  ?>
    <div class="<?php echo $a; ?>">
  <?php
   include 'banner.php';

  ?>

      <img src="parrot1.gif" class="parrot1">
	  
		 
		
  <table class="table table-striped">
  <tr> <td colspan=7>  <font color='green'> <center> Yeah! I have found all about it. I know even more about each country. Click on country name to know more.</center></font> </td> </tr>
  
  <tr> <td style="font-weight:bolder;"> Code </td> <td style="font-weight:bolder;"> Name of Countries in <?php echo $continent; ?> </td> <td style="font-weight:bolder;"> Region </td> <td style="font-weight:bolder;"> SurfaceArea </td> <td style="font-weight:bolder;"> Independence  </td> <td style="font-weight:bolder;"> Population  </td>  <td style="font-weight:bolder;"> GovernmentForm </td> </tr> 

  <?php

 while($result=mysqli_fetch_assoc($query_run)) {
   $code=$result['Code'];
   $name=$result['Name'];
   $region=$result['Region'];
 $surfacearea=$result['SurfaceArea'];
 $indepyear=$result['IndepYear'];
 $population=$result['Population'];
  $_SESSION['countrycode']=$code;
 $Governmentform=$result['GovernmentForm'];
 echo "<tr> <td> $code </td> <td><a href='parrot.php?countrycode=$code'> $name</a> </td> <td> $region </td> <td> $surfacearea </td> <td> $indepyear  </td> <td> $population  </td>  <td> $Governmentform </td>  </tr>";

 }


 ?>
 <tr> <td colspan=7> <i> <font color='green'>To ask something again <a href="wiseparrot.php"> click here </a></i></font> </td> </tr>
 </table>


 </div>
 <?php 

 }

 else header('Location: wiseparrot.php');
 
 ?>
 
