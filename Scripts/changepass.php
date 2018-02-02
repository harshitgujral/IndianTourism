<?php

include "banner.php";
include "sqlconnect.php";
include "session.inc.php";

if(!isset($_SESSION['user'])){
	echo "<script> alert('Login to enter'); </script>";
	echo"<meta content='0;url=http://localhost/DBMS_PROJECT/adminpage.php' http-equiv='refresh'/>";
}
else{
	
	$flag=0;
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$new=$_POST['new'];
	
	$query="select password from hit where uname='$uname'";
	if($query_run=mysqli_query($current,$query)){
		while($result=mysqli_fetch_assoc($query_run)){
			$p=$result['password'];
		}
	}
	if($p==$pass){
		$query2="update hit set password='".$new."' where uname='$uname'";
	if($query_run=mysqli_query($current,$query2)){
		echo "<script> alert('Password Changed Successfully,Login Again'); </script>";
	   echo"<meta content='0;url=http://localhost/DBMS_PROJECT/adminpage.php' http-equiv='refresh'/>";
	  
	}
	else echo mysqli_error($current);
		
		
	}
	else 
		$flag=1;
		
	
	
	
}
	

?>

<div class="container-fluid" style="background-image:url('images/adminback2.jpg');height:450px;">
<div style="width:500px;height:285px;background-color:white;margin-left:400px;margin-top:80px;border-radius:20px;border-width:20px;border-style:ridge;">
<form id="admin" action="changepass.php" method="POST">
<table class="table table-striped" style="border-radius:10px;">
<tr>  <td colspan=2> <!--<img src="images/login.png">--> </td> </tr>
<tr> <td> Username </td> <td> <input type="text" name="uname" style="height:35px;border-radius:20px;border-color:grey;"> </td> </tr>
<tr> <td>Old Password</td> <td> <input type="password" name="pass" style="height:35px;border-radius:20px;border-color:grey;"> </td> </tr>
<tr> <td>New Password</td> <td> <input type="password" name="new" style="height:35px;border-radius:20px;border-color:grey;"> </td> </tr>
<tr>  <td></td><td> <input type="submit" name="submit" id="myButton" style="margin-left:120px;"> </td> </tr>
<tr>  <td colspan=2> <?php if($flag==1) echo "<font color='red'>Invalid Username Old-Password combination.</font>"; ?></td> </tr>
</table>
</form>
</div>
</div>

<?php
}
?>