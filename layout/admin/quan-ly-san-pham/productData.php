<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.Class.php');

  $list = Product::getFullListProduct();
  $row =  array();
  foreach($list as $item)
  {
    $row[] = $item;
  }
  echo json_encode($row)."\n";
?>
