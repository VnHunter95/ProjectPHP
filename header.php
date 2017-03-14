<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>

    <link href="shared/css/bootstrap.min.css" rel="stylesheet" media="all"/>
    <link href="shared/css/select2.min.css" rel="stylesheet" media="all"/>
    <link href="shared/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="shared/css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href='shared/css/font.css' rel='stylesheet' type='text/css'>
    <link href="shared/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script src="shared/js/jquery.min.js"></script>
	  <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script src="shared/js/memenu.js" type="text/javascript"></script>
    <script src="shared/js/bootstrap.min.js"></script>
    <script src="shared/js/select2.min.js"></script>
    <script>
        $(document).ready(function () { $(".memenu").memenu(); });
    </script>
    <script src="/shared/js/simpleCart.min.js"></script>
    <script src="/shared/js/login.js"></script>
    <script src="/shared/js/searchProduct.js"></script>
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
                      <!--<a href="index.html"><img src="image/logo.png" alt=""></a>-->
                  </div>
              </div>
              <ul class="nav navbar-nav">

              </ul>
              <form class="navbar-form navbar-left" action="layout/user/danh-sach-san-pham.php" method="GET">
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
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/index/displayLoginButton.php');?>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#cartModal"><span class="glyphicon glyphicon-shopping-cart"></span> 2 Sản Phẩm - 360.000 VNĐ</a>
                      <div id="cartModal" class="modal fade" role="dialog">
                          <div class="modal-dialog modal-lg">
                              <!-- Modal content-->
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Giỏ hàng</h4>
                                  </div>
                                  <div class="modal-body">
                                      <table id="cart" class="table table-hover table-condensed">
                                          <thead>
                                              <tr>
                                                  <th style="width:40%">Product</th>
                                                  <th style="width:20%">Price</th>
                                                  <th style="width:8%">Quantity</th>
                                                  <th style="width:22%" class="text-center">Subtotal</th>
                                                  <th style="width:10%"></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <!--Product 1-->
                                              <tr>
                                                  <td data-th="Product">
                                                      <div class="row">
                                                          <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"
                                                              /></div>
                                                          <div class="col-sm-6">
                                                              <h4 style="max-width: 320px;word-wrap: break-word;">Product 1</h4>
                                                          </div>
                                                      </div>
                                                  </td>
                                                  <td data-th="Price">180.000 VNĐ</td>
                                                  <td data-th="Quantity">
                                                      <input type="number" class="form-control text-center" value="1">
                                                  </td>
                                                  <td data-th="Subtotal" class="text-center">180.000 VNĐ</td>
                                                  <td data-th="" class="actions">
                                                      <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                                                  </td>
                                              </tr>
                                              <!--Product 2-->
                                              <tr>
                                                  <td data-th="Product">
                                                      <div class="row">
                                                          <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"
                                                              /></div>
                                                          <div class="col-sm-6">
                                                              <h4 style="max-width: 320px;word-wrap: break-word;">Product 2</h4>
                                                          </div>
                                                      </div>
                                                  </td>
                                                  <td data-th="Price">180.000 VNĐ</td>
                                                  <td data-th="Quantity">
                                                      <input type="number" class="form-control text-center" value="1">
                                                  </td>
                                                  <td data-th="Subtotal" class="text-center">180.000 VNĐ</td>
                                                  <td data-th="" class="actions">
                                                      <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                                                  </td>
                                              </tr>
                                          </tbody>
                                          <tfoot>
                                              <tr class="visible-xs">
                                                  <td class="text-center"><strong>Total: 360.000 VNĐ</strong></td>
                                              </tr>
                                              <tr>
                                                  <td></td>
                                                  <td colspan="2" class="hidden-xs"></td>
                                                  <td class="hidden-xs text-center"><strong>Total: 360.000 VNĐ</strong></td>
                                                  <td></td>
                                              </tr>
                                          </tfoot>
                                      </table>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-info">Thanh Toán</button>
                                      <button type="button" class="btn btn-default" style="float:left;">Xóa giỏ hàng</button>
                                      <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>

      <!--header-->
      <div class="container">
          <?php include($_SERVER['DOCUMENT_ROOT'].'/index/displayHeaderTop.php');?>
      </div>
  </div>
