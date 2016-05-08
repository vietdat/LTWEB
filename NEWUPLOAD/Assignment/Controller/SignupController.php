<?php
  $username = $_POST['username'];
  $snid = $_POST['snid'];
  $pass = $_POST['pass'];
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
    echo "<a href='Login.php'>Đăng ký thành công. Click để về đăng nhập</a>";
  }
  else{
    include ('../View/RegisterForm.php');
    echo "
    <script>
      alert('Đăng ký không thành công. Tài khoản hoặc email đã có người dùng')
    </script>
    ";
  }
?>
