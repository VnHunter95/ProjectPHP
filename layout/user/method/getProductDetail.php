<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.Class.php');
  function getProductDetail($id)
  {
    $prod = Product::getProductById($id);
    if($prod == false)
    {
      return false;
    }else{
      return $prod;
    }
  }
?>
