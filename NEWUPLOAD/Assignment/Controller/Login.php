<?php
  session_start();
  if (isset($_SESSION['Account']))
    header("Location: Homepage.php");
  else
    include ("../View/LoginForm.html");
  ?>
