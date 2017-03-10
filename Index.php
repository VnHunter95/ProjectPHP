<?php include_once("header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProduct.php');?>
<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW RELEASED</h1>
		<?php include($_SERVER['DOCUMENT_ROOT']."/layout/user/method/displayNewProduct.php");?>
	</div>
	<!----->

	<div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<?php include($_SERVER['DOCUMENT_ROOT']."/layout/user/method/displayFeatured.php");?>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="/shared/image/x" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="/shared/image/x" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="/shared/image/x" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="/shared/image/x" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="/shared/image/x" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="/shared/image/x" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>
<div class="footer">
				<div class="container">
			<div class="footer-top-at">

				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>
					</ul>
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>

					<p>
Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>

					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<?php include_once("footer.php");?>
