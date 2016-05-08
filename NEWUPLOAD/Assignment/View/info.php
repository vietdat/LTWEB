<?php session_start();
  if (!isset($_SESSION['Account'])) header('Location: Login.php');
?>
<!doctype html>
<head>
  <title> Info</title>
  <link rel="shortcut icon" href="logo.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="../View/css/formpage.css" type="text/css">
  <link rel="stylesheet" href="../View/css/header.css" type="text/css">
  <link href="../View/css/footer.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../View/css/sidenav.css" type="text/css">
   <link rel="stylesheet" href="../View/css/sidemenu.css">
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
        <button class="btn" id="Sign" onclick="linkTo('info.php')"><?php echo $_SESSION['Account']['Username']?></button>
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



	<input type="checkbox" id="menu" name="menu" class="menu-checkbox">
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

  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <div class="infoheader">
          <img src="../View/images/user.png" alt="Noloading" width="300"><br>
          <a href="../Controller/LogoutController.php">LOG OUT </a>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="basicInfo">
          <img src="../View/images/basicInfo.png" alt="Noloading" width="30"><a href="Profile.php"> Chỉnh sửa </a>
          <h4>Thông tin cơ bản</h4>
          <table>
            <tr>
              <td>Họ và tên: </td>
              <td><?php echo $_SESSION['Account']['Fullname']?></td>
            </tr>
            <tr>
              <td>Giới tính:</td>
              <td><?php echo $_SESSION['Account']['Gender']?></td>
            </tr>
            <tr>
              <td>Sinh nhật:</td>
              <td><?php echo $_SESSION['Account']['Birthday']?></td>
            </tr>
            <tr>
              <td>CMND:</td>
              <td><?php echo $_SESSION['Account']['SNID']?></td>
            </tr>
          </table>
        </div>
        <div class="addInfo">
          <img src="../View/images/lienhe.png" alt="Noloading" width="30">
          <h4>Thông tin liên hệ</h4>
          <table>
            <tr>
              <td>Điện thoại:</td>
              <td><?php echo $_SESSION['Account']['Phone']?></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><?php echo $_SESSION['Account']['Email']?></td>
            </tr>
            <tr>
              <td>Địa chỉ:</td>
              <td><?php echo $_SESSION['Account']['Address']?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>TPHCM: 58 Hà Bá Tường, P.12, Tân Bình <br>
      Điện thoại: 0169 3611 866<br>
      Hotline:<br>
      Email: kuls29071994@gmail.com<br>
    </p>
  </div>
</body>
</html>
