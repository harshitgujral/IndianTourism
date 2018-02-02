<html>
<head>  <?php include "banner.php"; ?>  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>

  <title>Indian Tourism</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">

  $(function() {
    var availableTags = [
    "A",
    "AB",
      "BCD",
      "C"
    ];
    $( "#tags1" ).autocomplete({
      source: availableTags

    });
  });


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
            <a href="#" class="navbar-brand" style="font-size:28px;">Wise Parrot</a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Indian Tourism</a></li>
                <li><a href="#">Geo Search </a></li>
            </ul>
        </div>

    </div>
  
</nav>
</body>

<head><title>Indian Tourism</title>
<meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
<link rel="icon" id="favicon" href="http://www.tutorialrepublic.com/lib/images/parrot.png" type="image/x-icon"/>

<style>
input[type=search] {

    width: 25%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=search]:focus {
    width: 40%;
}
select {
  margin-top: 21%;
  margin-left:20%;
    width: 25%;
    padding: 20px 25px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
     position: relative;
    display: inline-block;
cursor: pointer;
}
#nen{ width: 100px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
   padding: 12px 10px 12px 10px;}


 body{
   background-image:url("https://d152j5tfobgaot.cloudfront.net/wp-content/uploads/2015/05/Yourstory_India_tourism.jpg");
   background-repeat:no-repeat;
   background-size:1380px 200px;
   background-position:0px 500px ;
 }

</style>
<script>

</script>
</head>
<body>

<form action="action_page.php" method="get">
 <select name="value">
    <option value="All"><img src="all.png">All</option>
    <option value="Attractions">Attractions</option>
    <option value="Hotels" >Hotels</option>
    <option value="Restraunts">Restraunts</option>

  </select>

<!-- <input type="search" name="search" id="tag1" placeholder="Where Would You Like To Go..." required>-->
<input type="text" id="tag1">
  
    <input type="submit" name="submit" id="nen">

</form>

</body>
</html>