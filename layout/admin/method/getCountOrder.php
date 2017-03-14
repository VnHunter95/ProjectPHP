<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Order.Class.php');
  function getCountOrder()
  {
    $count = Order::getOrderCountAll();
    return $count;
  }
?>
