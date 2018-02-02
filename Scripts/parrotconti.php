


<div class="homefixed">
<?php

include 'parrot.inc.php';

include 'banner.php';

?>

<img src="parrot1.gif" class="parrot1">
<form action="/DBMS_PROJECT/parrot1.php" method="GET">

<table width=340 height=250 id="parrot" cellpadding=15>
<tr> <td><i><center> <font color='green' size='5'>I am WorldlyWise! I know all about this World!! </i></center></font> </td> </tr>
<tr> <td><center>Please select a Continent </center> </td> </tr>
<tr> <td><center> <select name="continent"> <option value="Asia"> Asia </option>
                                       <option value="Africa"> Africa </option>
                                       <option value="Europe"> Europe </option>
                                       <option value="North America"> North America </option>
                                        <option value="South America"> South America </option>
                                        <option value="Oceania"> Australia/Oceania </option>
                                        <option value="Antarctica"> Antarctica </option>
                                        </select></center>
                                       </td> </tr>
<tr> <td><i> <center><font color='green' size='5'>Give me 3 secs and I'll tell you all about your selected continent.</center> </i></font> </td> </tr>
<tr> <td><center> <input type="submit" value="Send to Wise Parrot!!" id="myButton"></center> </td> </tr>
</table>
</form>
</div>

