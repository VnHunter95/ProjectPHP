<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.Class.php');
  function getProductDetail($id)
  {
    $prod = Product::getProductById($id);
    if($prod == false)
    {
      echo '<script>alert("Khong co sp ! ")</script>';
    }else{
      $productName = $prod[0]['product_name'];
      $productDescription = $prod[0]['description'];
      $price = number_format($prod[0]['price']);
    echo '<script>alert("Hello ! Da lay dc id sp \n Tên: '.$productName.' \n Mô Tả: '
          .$productDescription.' \n giá: '.$price.'")</script>';
    }
  }
?>
