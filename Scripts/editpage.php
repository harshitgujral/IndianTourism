<?php

include "banner.php";
include "sqlconnect.php";
include "session.inc.php";
if(@$flag1!=1)
$flag1=0;


if(!isset($_SESSION['user'])){
	echo "<script> alert('Login to enter'); </script>";
	echo"<meta content='0;url=http://localhost/DBMS_PROJECT/adminpage.php' http-equiv='refresh'/>";
}
else{

?>
<div class="container-fluid">

<form action="editpage.php" method="POST">
<div style="margin-left:200px;margin-right:200px;">
<table class="table table-striped">
<tr> <td colspan=3> Select the operation you want to perform:- <font size=2>[for security reasons you can perform one operation at a login-session]</font> </td> </tr>
<tr>
 <td> Insert <input type="radio" name="oper" value="insert"> </td>
 <td> Update: <input type="radio" name="oper" value="update"> </td>

 <td> Delete <input type="radio" name="oper" value="delete"> </td>
 </tr>
 <tr> <td colspan=3> <input type="submit" name="submit1" id="myButton"> </td> </tr>
</table>

</form>
</div>
<?php 
if(isset($_POST['submit1']) ||isset($_SESSION['oper'])){
	if(!isset($_SESSION['oper']))
		$_SESSION['oper']=$_POST['oper'];
	    
	echo "<div  class='alert alert-success' style='margin-left:200px;margin-right:200px;'>
     <form action='editpage.php' method='POST'>
	Select a table from dropdown:-<br> <select name='tname'>";
	$query="show tables";
	if($query_run=mysqli_query($current,$query)){
	while($table=mysqli_fetch_array($query_run))
	{
	
		echo "<option value='$table[0]'>".$table[0]."</option>";
	}	
	echo "</select><br><br><input type='submit' name='submit2' id='myButton'></form></div>";
	
	}

	
}
?>
<?php
if((isset($_POST['submit2'])&&$_SESSION['oper']=="update" )||(@($_SESSION['oper']=="update" )&&isset($_SESSION['tname'])) ){
echo "<div  class='alert alert-success' style='margin-left:200px;margin-right:200px;'>
  <form action='editpage.php' method='POST'> Enter MySQL Query to Update:-<br><input type='text' name='sql' size=100 style='height:40px;border-radius:10px;'><br><br>
  <input type='submit' name='submit5' id='myButton'> </form></div>";
}
?>

<?php
if((isset($_POST['submit2'])&&$_SESSION['oper']=="delete" )||(@($_SESSION['oper']=="delete" )&&isset($_SESSION['tname'])) ){
echo "<div  class='alert alert-success' style='margin-left:200px;margin-right:200px;'>
  <form action='editpage.php' method='POST'> Enter MySQL Query to Delete:-<br><input type='text' name='sql' size=100 style='height:40px;border-radius:10px;'><br><br>
  <input type='submit' name='submit5' id='myButton'> </form></div>";
}
?>

<?php
if(isset($_POST['submit5'])){
	$cquery=$_POST['sql'];
	if($query_run5=mysqli_query($current,$cquery))
	{
		echo "<script> alert('Change successful,Login Again');</script>";
		echo"<meta content='0;url=http://localhost/DBMS_PROJECT/adminpage.php' http-equiv='refresh'/>";
		
	}
	else echo "<script> alert('".mysqli_error($current)."');</script>";
	
}

?>

<?php
if((isset($_POST['submit2'])&&$_SESSION['oper']=="insert" )||(@($_SESSION['oper']=="insert" )&&isset($_SESSION['tname'])) ){
	if(!isset($_SESSION['tname']))
	$_SESSION['tname']=$_POST['tname'];
    $tname=$_SESSION['tname'];
	
	$query2="SHOW COLUMNS FROM ".$tname;
	if($query_run2=mysqli_query($current,$query2)){
		$rownum=mysqli_num_rows($query_run2);
		echo "<div style='margin-left:200px;margin-right:200px;'><form action='editpage.php' method='POST'><table class='table table-striped'> <tr><td>Column Name </td> <td> Enter Data </td>";
		$i=0;
	while($col=mysqli_fetch_array($query_run2)){
		$colname[$i]=$col[0];
		echo "<tr> <td>".$col[0]."</td><td><input type='text' name=".$i."></td></tr>";
		$i=$i+1;
	}
	echo "<tr><td colspan=2><input type='submit' name='submit3' id='myButton'></td></tr></form></table></div>";
	
	}
	 
	if(isset($_POST['submit3'])){
	$str="";
	$str=$str."(";
    for($i=0;$i<$rownum;$i++)
	{	
	$str=$str."'".$_POST[$i]."'";
	
		if($i!=$rownum-1)
			$str=$str.", ";
	
	
		
}
$str=$str.")";

$query3="Insert into ".$tname." values ".$str;
if($query_run3=mysqli_query($current,$query3))
	{
		echo "<script> alert('Data added successfully,Login Again');</script>";
		echo"<meta content='0;url=http://localhost/DBMS_PROJECT/adminpage.php' http-equiv='refresh'/>";
		
	}
	else echo mysqli_error($current);

}
}


?>

</div>

<?php
}

?>