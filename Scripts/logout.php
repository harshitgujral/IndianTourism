<?php
require "session.inc.php";
session_destroy();


header('Location: adminpage.php');

?>