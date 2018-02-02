

<div class="homefixed">
<?php

include 'parrot.inc.php';

include 'banner.php'

?>

<img src="parrot1.gif" class="parrot1">
<form action="/DBMS_PROJECT/parrot.php" method="GET">
<table width=340 height=260 id="parrot" cellpadding=6 border=3>
<tr> <td><i><center> <font color='green' size='4'>I am WorldlyWise! I know all about this World!! </i></center></font> </td> </tr>
<tr> <td><center>Please select a Country </center> </td> </tr>
<tr> <td> <?php include 'country.php'; ?> </td> </tr>
<tr> <td><i> <center><font color='green' size='4'>Give me 3 secs and I'll tell you basic info, cities and languages of your selected country.</center> </i></font> </td> </tr>
<tr> <td><center> <input type="submit" value="Send to Wise Parrot!!" id="myButton"></center> </td> </tr>
</table>
</form>
</div>

