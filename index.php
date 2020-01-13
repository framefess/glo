<?php
  include "src/header/header.php";
  include (isset($_GET["home"]) ? "src/home/home.php" : "src/signup/signup.php");
  
?>

