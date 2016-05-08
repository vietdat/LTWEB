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
    include ("../View/LoginForm.html");
    echo "
    <script>
      alert('Sai tai khoan')
    </script>
    ";
  }
}
?>
