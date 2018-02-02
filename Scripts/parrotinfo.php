
 <?php

  include 'parrot.inc.php';
   if (parrotin()) {


 ?>
 
 <div class="fixed">
 
 <?php
    include 'banner.php';
 $countrycode=$_SESSION['countrycode'];
 $query="SELECT * FROM country WHERE Code='$countrycode'";
 $query_run=mysqli_query($current,$query);
 $result=mysqli_fetch_assoc($query_run);
 $name=$result['Name'];
 $continent=$result['Continent'];
 $region=$result['Region'];
 $surfacearea=$result['SurfaceArea'];
 $indepyear=$result['IndepYear'];
 $population=$result['Population'];
 $lifeexp=$result['LifeExpectancy'];
 $gnp=$result['GNP'];
 $gnpold=$result['GNPOld'];
 $localname=$result['LocalName'];
 $Governmentform=$result['GovernmentForm'];
 $id=$result['Capital'];

 $query2="SELECT Name FROM city WHERE ID=$id";
 $query2_run=mysqli_query($current,$query2);
 $result2=@mysqli_fetch_assoc($query2_run);
 $capital=$result2['Name'];



 ?>
   <img src="parrot1.gif" class="parrot">
   <div style="width:340;margin-left:330px; margin-top:35px;">
   
 <table class="table table-striped">
 <tr> <td colspan=2> <i> <font color='green'> Yeah! I have found all about it.Click on continent name to know more. </i></font> </td> </tr>
 <tr> <td style="font-weight:bold;">  Country Code </td> <td style="font-weight:bold;"> <?php echo $countrycode;  ?> </td>   </tr>
 <tr> <td style="font-weight:bold;">  Name </td> <td style="font-weight:bold;"> <?php echo $name;  ?>   </td> </tr>
 <tr> <td style="font-weight:bold;">  Continent </td> <td style="font-weight:bold;"> <a href="parrot1.php?continent=<?php echo $continent; ?>">  <?php echo $continent;  ?></a> </td>  </tr>
 <tr> <td style="font-weight:bold;">  Capital </td> <td style="font-weight:bold;">  <?php echo $capital;  ?> </td>  </tr>
 <tr> <td style="font-weight:bold;">  Region </td> <td style="font-weight:bold;"> <?php echo $region;  ?> </td>   </tr>
   <tr> <td style="font-weight:bold;"> Top Cities (District/State)  </td> <td style="font-weight:bold;"> <a href="parrotcities.php"> click here </a> to reveal all cities </td>   </tr>
  <tr> <td style="font-weight:bold;"> Local languages  </td> <td style="font-weight:bold;"> <a href="parrotlang.php"> click here </a> to reveal all languages </td>   </tr>
 <tr> <td style="font-weight:bold;">  Surface Area </td> <td style="font-weight:bold;"> <?php echo $surfacearea;  ?> </td>    </tr>
 <tr> <td style="font-weight:bold;">  Year of Independence </td> <td style="font-weight:bold;"> <?php echo $indepyear;  ?> </td>   </tr>
 <tr> <td style="font-weight:bold;">  Population </td> <td style="font-weight:bold;"> <?php echo $population;  ?>  </td>  </tr>
 <tr> <td style="font-weight:bold;">  Life Expectancy </td> <td style="font-weight:bold;"> <?php echo $lifeexp;  ?> </td>   </tr>
 <tr> <td style="font-weight:bold;">  GNP </td> <td style="font-weight:bold;"> <?php echo $gnp;  ?>    </td>  </tr>
 <tr> <td style="font-weight:bold;">  GNPOld </td> <td style="font-weight:bold;"> <?php echo $gnpold;  ?>  </td>  </tr>
 <tr> <td style="font-weight:bold;">  LocalName </td> <td style="font-weight:bold;"> <?php echo $localname;  ?> </td>   </tr>


  <tr> <td>  Government Form </td> <td> <?php echo $Governmentform;  ?> </td>   </tr>
 <tr> <td colspan=2> <i> <font color='green'>To ask something again <a href="wiseparrot.php"> click here </a></i></font> </td> </tr>
 </table>

</div>

 </div>
 <?php 
 
 }
 
 else header('Location: wiseparrot.php');
 
 ?>


