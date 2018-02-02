<?php include "css.php";
include "session.inc.php";
?>
<head>
  <title>Wise parrot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>


	</head>
<body>
<!--background-color:rgb(255,165,5);-->
<img src="banner3.png" class="img-responsive"/>
<nav class="navbar navbar-default" style="margin-bottom:0px;font-size:16px;font-weight:bold;">
    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
            </button>
            <a href="front.php" class="navbar-brand" style="font-size:28px;">Wise Parrot</a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li><a href="front.php">Home</a></li>
                <li><a href="searchpage.php">Indian Tourism</a></li>
                <li><a href="wiseparrot.php">Geo Search </a></li>
				
            </ul>
			<ul class="nav navbar-nav navbar-right">
         
		  <?php 
		  
		  if(!isset($_SESSION['user']))
		  		 echo "<li><a href='adminpage.php'>Admin Login</a></li>";
		  else
                	 echo "<li><a href='changepass.php'>Change Password</a></li><li><a href='logout.php'>Logout</a></li>";			  

          ?>
		 
		  </ul>
			
        </div>
		

    </div>
	
</nav>
</body>
