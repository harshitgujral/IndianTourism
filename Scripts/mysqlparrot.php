<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='dbms';
$current=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($current) {
     
     
     if ( mysqli_select_db($current,$mysql_db)) {

   
  
} 
else echo mysqli_error($current);
}

else echo mysqli_error($current);
?>