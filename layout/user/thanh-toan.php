<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<div class="container">
	<div class="check">
		<h1>Thông Tin Đơn Hàng</h1>
		<div class="col-md-9 cart-items">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/user/thanh-toan/displayCartItems.php'); ?>
		</div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">6200.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>
			 </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>


			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>

			<div class="clearfix"> </div>
	 </div>
	 </div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
