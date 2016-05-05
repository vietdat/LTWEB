<?php
  $username = $_POST['username'];
  $snid = $_POST['snid'];
  $pass = $_POST['pass'];
  $repass = $_POST['repass'];
  $email = $_POST['email'];
  $fullname = $_POST['fullname'];
  $dob = $_POST['dob'];
  $mob = $_POST['mob'];
  $yob = $_POST['yob'];
  $dbhandle = mysql_connect('localhost','root','') or die("Can't connect to Server");
  $slhandle = mysql_select_db('manageusers',$dbhandle) or die ("Can't connect to manageusers database");
  $SQL = "INSERT INTO information VALUES('$snid','$username','$email','$pass')";
  $query=mysql_query ($SQL,$dbhandle);
  if($query){
    $sql1 = "INSERT INTO information (SNID,Fullname) VALUES ('$snid','$fullname')";
    $query1=mysql_query ($sql1,$dbhandle);
    if($query1) echo "Đăng ký thành công";
  }
  else {
    header("Location: RegisterForm.php");
  }
?>
