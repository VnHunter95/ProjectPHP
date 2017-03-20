<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>

    <link href="/ProjectPHP/shared/css/bootstrap.min.css" rel="stylesheet" media="all"/>
    <link href="/ProjectPHP/shared/css/select2.min.css" rel="stylesheet" media="all"/>
    <link href="/ProjectPHP/shared/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/ProjectPHP/shared/css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href='/ProjectPHP/shared/css/font.css' rel='stylesheet' type='text/css'>
    <link href="/ProjectPHP/shared/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/ProjectPHP/shared/js/jquery.min.js"></script>
	  <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script src="/ProjectPHP/shared/js/memenu.js" type="text/javascript"></script>
    <script src="/ProjectPHP/shared/js/bootstrap.min.js"></script>
    <script src="/ProjectPHP/shared/js/select2.min.js"></script>
    <script>
        $(document).ready(function () { $(".memenu").memenu(); });
    </script>
    <script src="/shared/js/simpleCart.min.js"></script>
    <script src="/shared/js/login.js"></script>
    <script src="/shared/js/searchProduct.js"></script>
    <script src="/shared/js/toancustomscript.js"></script>
    <script src="/shared/js/custom.js"></script>
    <script src="/shared/js/cart.js"></script>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>

<body class="parallax">
  <div class="header">
      <!--navbar-->
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="navbar-header">
                  <div class="logo">
                      <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT']; ?>"><img src="../../shared/image/logo.png" alt="image/logo.png" style="height: 50px ; width: 50px;"></a>
                  </div>
              </div>
              <ul class="nav navbar-nav">

              </ul>
              <form class="navbar-form navbar-left" action="/layout/user/danh-sach-san-pham.php" method="GET">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="searchInput">
                      <div class="input-group-btn">
                          <button class="btn btn-default"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                  </div>
                  <div class="form-group">
                      <select class="form-control" name="searchType">
                          <option value="1">Tên</option>
                          <option value="3">Nhà Sản Xuất</option>
                          <option value="5">Mô tả</option>
                          <option value="0">Tất cả</option>
                      </select>
                  </div>
              </form>
              <ul class="nav navbar-nav navbar-right">
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/index/displayLoginButton.php');?>
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/index/displayCart.php'); ?>
              </ul>
          </div>
      </nav>

      <!--header-->
      <div class="container">
          <?php include($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/index/displayHeaderTop.php');?>
      </div>
  </div>
