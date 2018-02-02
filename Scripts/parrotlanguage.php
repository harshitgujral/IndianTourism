

  <div class="homefixed">
<?php

include 'parrot.inc.php';

include 'banner.php';
$query="SELECT DISTINCT Language FROM countrylanguage ORDER BY Language";
$query_run=mysqli_query($current,$query);
 ?>




<img src="parrot1.gif" class="parrot1">
<form action="/DBMS_PROJECT/parrot2.php" method="GET">
<table width=340 height=240 id="parrot" cellpadding=8>
<tr> <td><i><center> <font color='green' size='4'>I am WorldlyWise! I know all about this World!! </i></center></font> </td> </tr>
<tr> <td><center>Please select a Language </center> </td> </tr>
<tr> <td> <center><select name="languages"> <?php

while ($result=mysqli_fetch_assoc($query_run)) {
          $languages=$result['Language'];
          echo "<option value='$languages'> $languages </option>";
}
?>
                                                                     </select></center>   </td> </tr>
<tr> <td><i> <center><font color='green' size='4'>Give me 3 secs and I'll tell you all about your selected language.</center> </i></font> </td> </tr>
<tr> <td><center> <input type="submit" value="Send to Wise Parrot!!" id="myButton"></center> </td> </tr>
</table>
</form>
</div>

 