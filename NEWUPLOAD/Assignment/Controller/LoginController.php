<?php
session_start();
include ("../services/LoginService.php");
if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $account = selectDataLoginFromDatabase($username, $password);
  if ($account!=null){
    $_SESSION['Account'] = $account;
    header("Location: Homepage.php");
  }
  else{
    header("Location: Login.php");
  }
}
?>
