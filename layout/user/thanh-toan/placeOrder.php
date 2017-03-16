<?php
require_once($_SERVER['DOCUMENT_ROOT']."/class/Order.Class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/class/User.Class.php");
include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getCartItems.php');
if(isset($_GET['deliveryDate']))
{

    $cartItems = getCartItems();
    $username = $_SESSION['username'];
    $customer = User::getCusomerByUser($username);
    $cusId = $customer[0]['customer_id'];
    unset($customer);
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
  echo '<response>';
  if($cartItems!=false)
  {

    $deliveryDate = $_GET['deliveryDate'];
    $today = date("Y-m-d H:i:s");
    $orderDetail = array();
    array_pop($cartItems);
    foreach($cartItems as $item)
    {
      $orderDetail[] = array('quantity' => $item['quantity'], 'product_id' => $item['id']);
    }
    $newOrder = new Order(null,$cusId,$today,$deliveryDate,0,0,0);
    $result = $newOrder->save($orderDetail);
    if($result==true)
    {
      unset($_SESSION['cart']);
    }
    echo ($result==true) ? '<code>1</code>' : '<code>0</code>';
  }else {
    echo '<code>Empty Session</code>';
  }
  echo '</response>';
}else {
  echo 'Something went wrong';
}
?>
