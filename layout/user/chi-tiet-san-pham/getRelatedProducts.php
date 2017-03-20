<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Product.Class.php');
  function getRelatedProducts($tags,$id)
  {
    $products = Product::getRelatedProducts($tags,$id);
    return $products;
  }
?>
