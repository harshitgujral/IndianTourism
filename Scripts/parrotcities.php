<?php


include 'parrot.inc.php';

if (parrotin()) {


   $countrycode=$_SESSION['countrycode'];




   $query2="SELECT * FROM city WHERE CountryCode='$countrycode'";
 $query2_run=mysqli_query($current,$query2);
 $mysql_row=mysqli_num_rows($query2_run);
 if ($mysql_row<=50) {
         $a='fixed';
         $b='parrot';
         $c="<i> <font color='green'>To ask something again <a href='wiseparrot.php'> click here </a></i></font>";
 }
 else  {
         $a='largefixed';
         $b='parrotcities';
         $c="<i> <font color='green'>huhh!!that was tiring, to ask something again <a href='wiseparrot.php'> click here </a></i></font>";
 }
 ?>
  <div class="<?php echo $a; ?>">
  <?php include 'banner.php'; ?>
   <br> <br> <img src="parrot1.gif" class="parrot">
   <table width=340 border=4 id="<?php echo $b; ?>">
  <tr> <td> <i> <font color='green'> Cities of <?php echo $countrycode ?> </i></font> </td> <td> <i> <font color='green'> District/State </i></font></td> <td> <i> <font color='green'> Population </i></font> </td> </tr>

 <?php

 while ($result2=mysqli_fetch_assoc($query2_run)){
 $topcities=$result2['Name'];
 $states=$result2['District'];
 $population=$result2['Population'];
 echo "<tr> <td> $topcities </td> <td> $states </td> <td> $population </td> </tr> ";
 }

 ?>
 <tr> <td colspan=2>  <?php echo $c; ?> </td> </tr>

 </table>
 </div>
  
  

  <?php
} 

else header('Location: wiseparrot.php');
?>

