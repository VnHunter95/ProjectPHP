<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.Class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductImage.Class.php');
session_start();
$responseCode = -1; //-1 Unkown
if(isset($_GET['add']))
{
  include('cart/processAddItem.php');// 1-> OK 0-> no GET ID 2-> No Product OR Image
}elseif (isset($_GET['remove'])) {
  include('cart/processRemoveItem.php');// 1-> OK 3-> No Product In Session 4->No Carts
}elseif(isset($_GET['update']) && isset($_GET['q'])){
  include('cart/processUpdateItem.php');// 1-> OK 3-> No Product In Session 4->No Carts
}else {
  $responseCode = 0;
}

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
echo  $responseCode;
echo '</response>';
?>
