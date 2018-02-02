<?php
include "banner.php";
include "sqlconnect.php";

$flag=0;
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	
	$query="select password from hit where uname='$uname'";
	if($query_run=mysqli_query($current,$query)){
		while($result=mysqli_fetch_assoc($query_run)){
			$p=$result['password'];
		}
	}
	if($p==$pass){
		
		$_SESSION['user']="admin";
		header('Location: editpage.php');
		
	}
	else 
		$flag=1;
		
	
	
	
}
?>


<div class="container-fluid" style="background-image:url('images/adminback2.jpg');height:450px;">
<div style="width:500px;height:430px;background-color:white;margin-left:400px;border-radius:20px;border-width:20px;border-style:ridge;">
<form id="admin" action="adminpage.php" method="POST">
<table class="table table-striped" style="border-radius:10px;">
<tr>  <td colspan=2> <img src="images/login.png"> </td> </tr>
<tr> <td> Username </td> <td> <input type="text" name="uname" style="height:35px;border-radius:20px;border-color:grey;"> </td> </tr>
<tr> <td>Password</td> <td> <input type="password" name="pass" style="height:35px;border-radius:20px;border-color:grey;"> </td> </tr>
<tr>  <td></td><td> <input type="submit" name="submit" id="myButton" style="margin-left:120px;"> </td> </tr>
<tr>  <td colspan=2> <?php if($flag==1) echo "<font color='red'>Invalid Username Password combination.</font>"; ?></td> </tr>
</table>
</form>
</div>
</div>