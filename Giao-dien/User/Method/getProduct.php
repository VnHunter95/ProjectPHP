<?php
    require_once('class/Product.class.php');
    public function getProduct($isNew,$quantity)
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
