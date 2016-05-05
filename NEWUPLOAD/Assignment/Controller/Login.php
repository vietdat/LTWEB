<?php
  session_start();
  if (isset($_SESSION['Username']))
    header("Location: Homepage.php");
  else
    include ("../View/LoginForm.html");
  ?>
