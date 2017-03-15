
<?php
session_start(); //start session
require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Xem lai truoc khi mua </title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h3 style="text-align:center">Xem lai truoc khi mua</h3>
<?php
if(isset($_SESSION["product"]) && count($_SESSION["product"])>0){
	$total 			= 0;

	$cart_box 		= '<ul class="view-cart">';

	foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["productName"];
		$product_qty = $product["product_qty"];
		$product_price = $product["price"];
		$product_code = $product["productId"];


		$item_price 	= sprintf("%01.2f",($product_price * $product_qty));  // price x qty = total item price

		$cart_box 		.=  "<li> $product_code &ndash;  $product_name (Qty : $product_qty) <span>  $item_price </span></li>";

		$subtotal 		= ($product_price * $product_qty); //Multiply item quantity * price
		$total 			= ($total + $subtotal); //Add up to total price

    $cart_box .= "<li class=\"view-cart-total\"> <hr>Payable Amount : ".sprintf("%f", $total)."</li>";
    $cart_box .= "</ul>";

    echo $cart_box;
}else{
	echo "Your Cart is empty";
}
?>
</body>
</html>