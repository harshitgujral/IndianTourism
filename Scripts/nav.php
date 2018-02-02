
<head>
<meta name="description" content="This Website is about PHP">
<meta name="keywords" content="PHP, PHP Tutorials, Creating Capcha">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>


<!

 .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------.  .----------------. 
| .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. || .--------------. |
| |  ____  ____  | || |      __      | || |  _______     | || |    _______   | || |  ____  ____  | || |     _____    | || |  _________   | |
| | |_   ||   _| | || |     /  \     | || | |_   __ \    | || |   /  ___  |  | || | |_   ||   _| | || |    |_   _|   | || | |  _   _  |  | |
| |   | |__| |   | || |    / /\ \    | || |   | |__) |   | || |  |  (__ \_|  | || |   | |__| |   | || |      | |     | || | |_/ | | \_|  | |
| |   |  __  |   | || |   / ____ \   | || |   |  __ /    | || |   '.___`-.   | || |   |  __  |   | || |      | |     | || |     | |      | |
| |  _| |  | |_  | || | _/ /    \ \_ | || |  _| |  \ \_  | || |  |`\____) |  | || |  _| |  | |_  | || |     _| |_    | || |    _| |_     | |
| | |____||____| | || ||____|  |____|| || | |____| |___| | || |  |_______.'  | || | |____||____| | || |    |_____|   | || |   |_____|    | |
| |              | || |              | || |              | || |              | || |              | || |              | || |              | |
| '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' || '--------------' |
 '----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------'  '----------------'     >




      <div class="nav">
      <ul class="navbar">
         <a href="system.php" class="navlink">   <li class="libar">  Home </li></a>
        
          <a href="register.php" class="navlink">  <li class="libar"> Registration form </li></a>

            </ul>
      </div>    <br> <br>
            <table id='back' width=850>
            <tr> <td><a id='backbutton' href="<?php echo $_SERVER['HTTP_REFERER']; ?>"> Back </a> </td> <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp </td>
             <?php

                                                        if (loggedin()) {
                                                          echo " <td> <a id='backbutton' href='logout.php'> Logout </a> </td>"; }
                                                           ?> </tr>
            </table>

