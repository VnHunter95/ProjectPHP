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

	<link href="/shared/css/bootstrap.min.css" rel="stylesheet" media="all"/>
	<link href="/shared/css/select2.min.css" rel="stylesheet" media="all"/>
	<link href="/shared/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/shared/css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href='/shared/css/font.css' rel='stylesheet' type='text/css'>
	<link href="/shared/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script src="/shared/js/jquery.min.js"></script>
	<script type="application/x-javascript">
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<script src="/shared/js/memenu.js" type="text/javascript"></script>
	<script src="/shared/js/bootstrap.min.js"></script>
	<script src="/shared/js/select2.min.js"></script>
	<script>
			$(document).ready(function () { $(".memenu").memenu(); });
	</script>
	<script src="/shared/js/simpleCart.min.js"></script>
	<script src="/shared/js/login.js"></script>
	<script src="/shared/js/searchProduct.js"></script>
	<script src="/shared/js/custom.js"></script>
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
              <div class="navbar-form navbar-left" >
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" id="searchInput">
                      <div class="input-group-btn">
                          <button class="btn btn-default"  onclick="preSearchProduct()"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                  </div>
                  <div class="form-group">
                      <select class="form-control" id="searchType">
                          <option value="1">Tên</option>
                          <option value="3">Nhà Sản Xuất</option>
                          <option value="5">Mô tả</option>
                          <option value="0">Tất cả</<option>
                      </select>
                  </div>
							</div>
              <ul class="nav navbar-nav navbar-right">
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/index/displayLoginButton.php');?>
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/index/displayCart.php');?>
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
			<?php include("/danh-sach-san-pham/displayProductPager.php"); ?>
		</div>
	</div>
</div>

<!--//content-->
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
</body>
</html>
