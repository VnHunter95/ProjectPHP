<?php
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProductImages.php') ;
  $productImages = getProductImages($id);
?>
<?php
session_start(); //start session
      require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");

if(isset($_POST["productId"]))
{
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array
	}

	//we need to get product name and price from database.
	$statement =getProductByIdforCart($productId);
	$statement->bind_param('s', $new_product['product_id']);
	$statement->execute();
	$statement->bind_result($product_name, $product_price);


	while($statement->fetch()){
		$new_product["product_name"] = $product_name; //fetch product name from database
		$new_product["price"] = $product_price;  //fetch product price from database

		if(isset($_SESSION["product"])){  //if session var already exist
			if(isset($_SESSION["product"][$new_product['product_id']])) //check item exist in products array
			{
				unset($_SESSION["product"][$new_product['product_id']]); //unset old item
			}
		}

		$_SESSION["product"][$new_product['product_id']] = $new_product;	//update products with new item array
	}

 	$total_items = count($_SESSION["product"]); //count total items
	die(json_encode(array('items'=>$total_items))); //output json

}

################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["product"]) && count($_SESSION["product"])>0){ //if we have session variable
		$cart_box = '<ul class="cart-products-loaded">';
		$total = 0;
		foreach($_SESSION["product"] as $product){ //loop though items and prepare html content

			//set variables to use them in HTML content below
			$product_name = $product["product_name"];
			$product_price = $product["price"];
			$product_code = $product["product_id"];
			$product_qty = $product["product_qty"];


			$cart_box .=  "<li> $product_name (Qty : $product_qty | $product_color  | $product_size ) &mdash; $currency ".sprintf("%01.2f", ($product_price * $product_qty)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			$subtotal = ($product_price * $product_qty);
			$total = ($total + $subtotal);
		}
		$cart_box .= "</ul>";
		$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%f",$total).' <u><a href="view_cart.php" title="Review Cart and Check-Out">Check-out</a></u></div>';
		die($cart_box); //exit and output content
	}else{
		die("Your Cart is empty"); //we have empty cart
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["product"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["product"][$product_code]))
	{
		unset($_SESSION["product"][$product_code]);
	}

 	$total_items = count($_SESSION["product"]);
	die(json_encode(array('items'=>$total_items)));
}
