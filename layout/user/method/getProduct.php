<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.class.php');
    function getProduct($isNew,$quantity)
    {
      if($isNew == true)
      {
        $list = Product::list_new_product($quantity);
        return $list;
      }else {
        $list = Product::list_popular_product($quantity);
        return $list;
      }
      
    }
?>
