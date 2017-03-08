<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductGroup.Class.php');
  function getProductGroup(){
    $list = ProductGroup::list_product_group();
    return $list;
  }
?>
