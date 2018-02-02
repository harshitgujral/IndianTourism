
 <html>
 <head>
 <meta content='3;url=http://localhost/DBMS_PROJECT/parrotlanginfo.php' http-equiv='refresh'/>
 </head>
 <div class="fixed">
<?php
 include 'banner.php';
  include 'parrot.inc.php';
 $languages=$_GET['languages'];
 $_SESSION['languages']=$languages;
 $_SESSION['languages'];
 if (parrotlang()) {

 echo " <br> <center> <font face='comic sans ms' size=26> I am doing my best to find all about $languages!! Please wait...</font> </center>";
?>

 <img src="parrat3.gif">  <img src="parrat4.gif">
 </div>


</html>

 <?php
 
 
 }
 else header('Location: wiseparrot.php');
 ?>
 
