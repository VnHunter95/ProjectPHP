<?php
	include($_SERVER['DOCUMENT_ROOT'].'/header.php');
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getCartItems.php');
	$cartItems = getCartItems();
	if($cartItems != false)
	{
		$totalInfo = array_pop($cartItems);
	}else {
		$totalInfo = array('total_price' => '0');
	}
?>
<div class="container">
	<div class="check">
		<h1>Thông Tin Đơn Hàng</h1>
		<div class="col-md-9 cart-items">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/user/thanh-toan/displayCartItems.php'); ?>
		</div>
	  <div class="col-md-3 cart-total">
		 <a class="continue" href="/layout/user/danh-sach-san-pham.php">Tiếp Tục Mua Hàng</a>
		 <div class="price-details">
			 <h3>Chi Tiết Thanh Toán</h3>
			 <span>Tổng Tiền: </span>
			 <span class="total1"><?php echo number_format($totalInfo['total_price']); ?> Vnđ</span>
			 <span>Giảm Giá</span>
			 <span class="total1">---</span>
			 <span>Phí Vận Chuyển</span>
			 <span class="total1">0 Vnđ</span>
			 <div class="clearfix"></div>
		 </div>
		 <ul class="total_price">
		   <li class="last_price"> <h4>Tổng Tiền: </h4></li>
		   <li class="last_price"><span><?php echo number_format($totalInfo['total_price']); ?></span></li>
		   <div class="clearfix"> </div>
		 </ul>


		 <div class="clearfix"></div>
		 <?php echo isset($_SESSION['cart']) ? '<a class="order" href="#placeOrderModal" data-toggle="modal">Đặt Hàng</a>' : "" ?>
		</div>

			<div class="clearfix"> </div>
	 </div>
	 </div>
	 <!--popup customer info popup modal -->
	 <div id="placeOrderModal" class="modal fade" role="dialog">
		 <?php if(isset($_SESSION['username'])){
			 			include('thanh-toan/displayModalWithInfo.php');
		 			}else{
						include('thanh-toan/displayModalNoInfo.php');
					}
			?>
	 </div>
	 <!-- Modal -->
<div id="doneOrder" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đặt Hàng Thành Công</h4>
      </div>
      <div class="modal-body">
        <p>Đơn hàng đã được ghi nhận, chúng tôi sẽ liên hệ bạn để xác nhận đơn hàng</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.reload()">Hoàn Thành</button>
      </div>
    </div>
  </div>
</div>
	 <!---->
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
