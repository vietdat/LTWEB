<!doctype html>
<head>
  <title>Mainpage</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="logo.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
  <link href="../View/css/footer.css" rel="stylesheet" type="text/css">
  <link href="../View/css/mainpage.css" rel="stylesheet" type="text/css">
  <link href="../View/css/sidenav.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../View/css/sidemenu.css">
  <link href="../View/css/header.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
          <?php
            if (isset($_SESSION['Username'])){

              echo "<button class="."'btn'"."id="."'Sign'"."onclick="."'linkTo(\"info.php\")'".">".$_SESSION['Username']."</button>";
            }
            else{
              echo "<button class="."'btn'"."id="."'Sign'"."onclick="."'linkTo(\"../Controller/Login.php\")'".">"."Đăng nhập"."</button>";
            }
          ?>
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
          <li role="presentation" class="active"><a href="Mainpage.html">Trang chủ</a></li>
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
		<li data-target="#myCarousel" data-slide-to="6"></li>
      </ol>

      <div class="carousel-inner" role="listbox">



        <div class="item active">
          <img  src="../View/images/cover1.jpg" alt="Chania"  id="item1">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div  class="item">
          <img src="../View/images/cover2.jpg" alt="Chania" id="item3">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="../View/images/cover3.jpg" alt="Chania" id="item4">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
		<div class="item">
          <img src="../View/images/cover4.jpg" alt="Chania" id="item5">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
		<div class="item">
          <img src="../View/images/cover5.jpg" alt="Chania" id="item6">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
		<div class="item">
          <img src="../View/images/cover6.jpg" alt="Chania" id="item7">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
		<div class="item">
          <img src="../View/images/cover7.jpg" alt="Chania" id="item2">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="menu_select">
      <ul>
        <li><a href="#newproduct">New Product</a></li>
        <li><a href="#topproduct">Top Product</a></li>
        <li><a href="#rooms">Room</a></li>
        <li><a href="#product">Product</a></li>
      </ul>
    </div>
    <div class="room" id="newproduct">
      <div>
        <h1>New Product</h1>
        <div class="adv">
          <a href="showall.html" style="text-align:right">Show All</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room1.jpg" alt="No Loading" style="width:100%;height:auto; margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room2.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room3.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room4.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room5.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/bg.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
      </div>
    </div>
    <div class="room" id="topproduct">
      <div>
        <h1>Top Product</h1>
        <div class="adv">
          <a href="showall.html" style="text-align:right">Show All</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4" >
          <img src="../View/images/room1.jpg" alt="No Loading" style="width:100%;height:auto; margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room2.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room3.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room4.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room5.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/bg.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
      </div>
    </div>
    <div class="room" id="rooms">
      <div>
        <h1>Room</h1>
        <div class="adv">
          <a href="showall.html" style="text-align:right">Show All</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room1.jpg" alt="No Loading" style="width:100%;height:auto; margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room2.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room3.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room4.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room5.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/bg.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
      </div>
    </div>
    <div class="room" id="product">
      <div>
        <h1>Product</h1>
        <div class="adv">
          <a href="showall.html" style="text-align:right">Show All</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room1.jpg" alt="No Loading" style="width:100%;height:auto; margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room2.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room3.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room4.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/room5.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img src="../View/images/bg.jpg" alt="No Loading" style="width:100%;height:auto;margin-bottom:10px;">
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
