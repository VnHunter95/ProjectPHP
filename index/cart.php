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
}elseif(isset($_GET['clear']))
{
  unset($_SESSION['cart']);
  $responseCode = 69;
}
else {
  $responseCode = 0;
}

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
if($responseCode == 1)
{
  $itemCount = 0;
  $total = 0;
  echo '<cart>';
  foreach($_SESSION['cart'] as $item)
  {
    $subtotal =  intval($item['quantity'])*intval($item['price']);
    echo '<item>';
    echo '<id>'.$item['id'].'</id>';
    echo '<name>'.$item['product_name'].'</name>';
    echo '<price>'.number_format($item['price']).'</price>';
    echo '<quantity>'.$item['quantity'].'</quantity>';
    echo '<image>'.$item['image'].'</image>';
    echo '<stotal>'.number_format($subtotal).'</stotal>';
    echo '</item>';
    $itemCount += intval($item['quantity']);
    $total += $subtotal;
  }
  echo '</cart>';
  echo '<total>'.number_format($total).'</total>';
  echo '<itemcount>'.number_format($itemCount).'</itemcount>';
}
echo '<code>'.$responseCode.'</code>';
echo '</response>';
?>
