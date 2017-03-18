<?php
  $productId    = $_GET['add'];
  $result      = Product::getProductById($productId);
  if(!$result)
  {
    $product = false;
  }else {
    $product = $result[0];
    $productImage = ProductImage::get_one_product_image($productId);
    $productName  = $product['product_name'];
    $productPrice = $product['price'];
  }
  if(($product!=false && $productImage!=false) ||($product != 0 && $productImage != 0))
  {
    $was_found = false;
    $i=0;
    if(!isset($_SESSION["cart"])||count($_SESSION["cart"])<1)
    {
        $_SESSION["cart"] = array(0 => array('id' => $productId, 'product_name' => $productName, 'price' => $productPrice, 'quantity' => 1, 'image' => $productImage));
    }
    else{
        foreach($_SESSION["cart"] as $item){
          $i++;
          while(list($key,$value) = each($item))
          {
            if($key=="id" && $value==$productId)
            {
                array_splice($_SESSION["cart"],$i-1,1,array(array('id' => $productId, 'product_name' => $productName, 'price' => $productPrice, 'quantity' => $item["quantity"]+1 , 'image' => $productImage)));
                $was_found=true;
            }
          }
        }
        if($was_found == false)
        {
          array_push($_SESSION["cart"],array('id' => $productId, 'product_name' => $productName, 'price' => $productPrice, 'quantity' => 1, 'image' => $productImage));
        }
    }
    $responseCode = 1;
  }else {
    $responseCode = 2;
  }
?>
