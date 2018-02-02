

 <div class="fixed">

 <?php

  include 'parrot.inc.php';
     if (parrotlang()) {


  include 'banner.php';


 $languages=$_SESSION['languages'];
 $query="SELECT * FROM countrylanguage WHERE Language='$languages'";
 $query_run=mysqli_query($current,$query);



  ?>

     <img src="parrot1.gif" class="parrot1">
	 <div style="margin-left:200px;margin-right:200px;">
  <table class="table table-striped">
  <tr> <td colspan=7>  <font color='green'> <center> Yeah! I have found all about it.Click on country name to know more.</center> </font> </td> </tr>
  <tr>  <td>  <?php echo $languages; ?> speaking countries </td> <td> Official (True/False) </td> <td> Percentage </td>  </tr>

  <?php

 while($result=mysqli_fetch_assoc($query_run)) {
   $code=$result['CountryCode'];
   $official=$result['IsOfficial'];
   $percent=$result['Percentage'];
       $query2="SELECT Name FROM country WHERE Code='$code'";
       $query2_run=mysqli_query($current,$query2);
       $result2=mysqli_fetch_assoc($query2_run);
        $countryname=$result2['Name'];


 echo "<tr> <td><a href='parrot.php?countrycode=$code'> $countryname</a> </td> <td> $official </td> <td> $percent% </td>   </tr>";

 }


 ?>
 <tr> <td colspan=7> <i> <font color='green'>To ask something again <a href="wiseparrot.php"> click here </a></i></font> </td> </tr>
 </table>
</div>

 </div>
 <?php 

 }

 else header('Location: wiseparrot.php');
 
 ?>
 

