
<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
<?php
include("method/getProductDetail.php");

if(!isset($_GET["productid"])){
	header('Location: not_found.php');
	exit;
}
else
{
	$prod;
	unset($prod);
	$id = $_GET["productid"];
	$prod = getProductDetail($id);
}
?>
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
						<?php include("chi-tiet-san-pham/displayCategoryLeftside.php"); ?>
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
						<!---->
							<?php include("chi-tiet-san-pham/displayTagLeftSide.php"); ?>
						<!---->
				</div>
				<?php if($prod != false)
				{
					include("chi-tiet-san-pham/displayProductDetail.php");
				}else {
						echo '<h2>Không Tìm Thấy Sản Phẩm<h2>';
				}?>
				<div class="clearfix"> </div>
		</div>
		</div>
<!--//content-->
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
<script src="chi-tiet-san-pham/js/goToProductList.js"></script>
</body>
</html>
