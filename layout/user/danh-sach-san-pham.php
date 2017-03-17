<?php require_once($_SERVER['DOCUMENT_ROOT']."/class/ProductGroup.Class.php");
			require_once($_SERVER['DOCUMENT_ROOT']."/class/Supplier.Class.php");
			require_once($_SERVER['DOCUMENT_ROOT']."/class/Product.Class.php");
			require_once($_SERVER['DOCUMENT_ROOT']."/class/ProductImage.Class.php");
			require_once($_SERVER['DOCUMENT_ROOT']."/class/Tag.Class.php");
			require_once($_SERVER['DOCUMENT_ROOT']."/class/Helper.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="/shared/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/shared/css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="/shared/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/shared/js/jquery.min.js"></script>
	  <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script src="/shared/js/memenu.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $(document).ready(function () { $(".memenu").memenu(); });
    </script>
    <script src="/shared/js/simpleCart.min.js"></script>
    <script src="/shared/js/login.js"></script>
    <script src="/shared/js/searchproduct.js"></script>
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
              <form class="navbar-form navbar-left" >
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="searchInput">
                      <div class="input-group-btn">
                          <button class="btn btn-default"  onclick="preSearchProduct()"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                  </div>
                  <div class="form-group">
                      <select class="form-control" name="searchType">
                          <option value="1">Tên</option>
                          <option value="3">Nhà Sản Xuất</option>
                          <option value="5">Mô tả</option>
                          <option value="0">Tất cả</<option>
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


<!--content-->
<!---->
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price">
		<!--Display Category - Product Group-->
		<?php include("danh-sach-san-pham/displayCategoryLeftSide.php");?>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });

			});
		</script>
<!-- TAG -->
		<?php include("danh-sach-san-pham/displayTagLeftSide.php");?>
		</div>
		<div class="col-md-9 product1">
			<div id = "product-list">
				<?php include("danh-sach-san-pham/displayProductList.php");?>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div id = "product-pager">
			<?php include("danh-sach-san-pham/displayProductPager.php"); ?>
		</div>
	</div>
</div>

<!--//content-->
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
</body>
</html>
