<?php
  include "src/header/header.php";
  include (isset($_GET["home"]) ? "home.php" : "signup.php");
  
?>

