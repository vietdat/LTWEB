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
  $birthday = $yob.'-'.$mob.'-'.$dob;
  include ("../services/LoginService.php");
  $value = '\''.$username.'\''.','.'\''.$pass.'\''.','.'\''.$fullname.'\''.','.'\''.$snid.'\''.','.'\''.$email.'\''.','.'\''.$birthday.'\'';
  $insertData = insertDataAccount($value);
  if ($insertData){
    echo "Đăng ký thành công";
  }
  else{
    echo "Đăng ký không thành công";
  }
?>
