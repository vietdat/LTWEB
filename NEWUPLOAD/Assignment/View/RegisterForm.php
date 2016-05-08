<!doctype html>
<head>
  <title> SIGN UP</title>
  <link rel="shortcut icon" href="logo.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="../View/css/formpage.css" type="text/css">
  <link rel="stylesheet" href="../View/css/header.css" type="text/css">
  <link rel="stylesheet" href="../View/css/sidenav.css" type="text/css">
   <link rel="stylesheet" href="../View/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <script>
    function linkTo(location){
      window.location = location;
    }
  </script>
    <div class="page-header">
    <div class="address">
      <div class="sdt">
        <p> Hotline: 1900 8256</p>
      </div>
      <div class="signin">
        <button class="btn" id="Sign" onclick="linkTo('LoginForm.html')">Đăng nhập</button>
      </div>
	  <div class="input-group" id="searr">
          <span class="input-group-addon">Tìm kiếm</span>
          <input type="search" class="form-control" placeholder="Bạn muốn tìm những gì?">
      </div>
    </div>
    <div class="row" id="go">
      <div class="col-xs-12 col-sm-4" >
        <div class="logo">DreamWorld</div>
        <div class="slogan">MANG LẠI MÁI ẤM TUYỆT VỜI</div>
      </div>
      <div class="col-xs-12 col-sm-8">
        <div class="input-group" id="sear">
          <span class="input-group-addon">Tìm kiếm</span>
          <input type="search" class="form-control" placeholder="Bạn muốn tìm những gì?">
        </div>
      </div>
      <div class="col-xs-12 col-sm-8" id="navi">
       <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="Mainpage.php">Trang chủ</a></li>
          <li role="presentation"><a href="#">Mới nhất</a></li>
          <li role="presentation"><a href="#">Khuyến mãi</a></li>
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Sản phẩm </a>
            <ul class="dropdown-menu">
                <li role="presentation"><a href="#">Bàn</a></li>
                <li role="presentation"><a href="#">Ghế</a></li>
                <li role="presentation"><a href="#">Tủ</a></li>
                <li role="presentation"><a href="#">Giường</a></li>
            </ul>
          </li>
          <li role="presentation"><a href="#">Thanh lý</a></li>
        </ul>
      </div>
    </div>
	<div class="menu">
    <label class="menu-toggle" for="menu"><span>Toggle</span></label>
    <ul>
      <li>
        <a href="#">Trang chủ</a>
      </li>
      <li>
        <a href="#">Mới nhất</a>
      </li>
      <li>
        <a href="#">Khuyến mãi</a>
      </li>
      <li>
        <label for="menu-4">Sản phẩm</label>
        <input type="checkbox" id="menu-4" name="menu-4" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-4"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Bàn</a>
            </li>
            <li>
              <a href="#">Ghế</a>
            </li>
            <li>
              <a href="#">Tủ</a>
            </li>
            <li>
              <a href="#">Giường</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
		<a href="#">Thanh lí</a>
      </li>
    </ul>
  </div>
  <div id="menu_space" class="row">
  <p>Menu</p>
  </div>
  </div>
  <div class="container" id="register">
    <h2>Đăng ký tài khoản</h2>
    <span>Đã có tài khoản</span> <a href="LoginForm.html">Đăng nhập ngay</a>
    <form method="post" action="../Controller/SignupController.php" onsubmit="return validateForm()" name="myForm">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="fname">Họ và tên</label>
            <input type="text" class="form-control" id="fname" required="" name="fullname">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="ID">CMND</label>
            <input type="text" class="form-control" id="snid" required="" name="snid">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="dob">Ngày sinh</label>
            <select class="form-control" id="dob" name="dob">
              <?php
              for ($x=1;$x<=31;$x++){
                echo "<option>$x</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="mob">Tháng sinh</label>
            <select class="form-control" id="mob" name="mob">
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="yob">Năm sinh</label>
            <select class="form-control" id="yob" name="yob">
              <?php
              for ($x=2016;$x>=1900;$x--){
                echo "<option>$x</option>";
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" required="" name="email">
      </div>
      <div class="form-group">
        <label for="urs">Username</label>
        <input type="text" class="form-control" id="urs" required="" name="username">
      </div>
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" required="" name="pass">
      </div>
      <div class="form-group">
        <label for="repwd">Retype Password</label>
        <input type="password" class="form-control" id="repwd" required="" name="repass">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="" required="">Tôi đồng ý với các chính sách</label>
      </div>
      <input type="submit" class="btn btn-success" value="Sign up" id="btnsubmit">
    </form>
    <script>
      function validateForm() {
          var x = document.forms["myForm"]["pass"].value;
          var y = document.forms["myForm"]["repass"].value;
          if(x!=y){
              alert('Mật khẩu không trùng khớp');
              return false;
          }
      }
</script>
  </div>
</body>
</html>
