<?php

include 'sqlconnect.php';
include "session.inc.php";

function parrotin() {
 
  if (isset($_SESSION['countrycode']) &&!empty($_SESSION['countrycode'])) {
          return true;
    
  }
  else return false;


}

function parrotconti() {
 
  if (isset($_SESSION['continent']) &&!empty($_SESSION['continent'])) {
          return true;
    
  }
  else return false;


}

function parrotlang() {
 
  if (isset($_SESSION['languages']) &&!empty($_SESSION['languages'])) {
          return true;
    
  }
  else return false;


}


?>


