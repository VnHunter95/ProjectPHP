<?php
require_once($_SERVER['DOCUMENT_ROOT']."/class/Order.Class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/class/User.Class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/class/Customer.Class.php");
include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getCartItems.php');
if(isset($_POST['btnSubmit']))
{
  $name = $_POST['cusName'];
  $email = $_POST['cusEmail'];
  $phone = $_POST['cusPhone'];
  $adr = $_POST['cusAdress'];
  $deliDate = $_POST['deliveryDate'];
  $customer = new Customer(null,$name,$phone,$adr,$email);
  $cusId = $customer->savecus();
  if($cusId == false)
  {
    echo 'Không thể lưu thông tin khách hàng';
  }else
  {
    $cartItems = getCartItems();
    if($cartItems!=false)
    {
      $today = date("Y-m-d H:i:s");
      $orderDetail = array();
      array_pop($cartItems);
      foreach($cartItems as $item)
      {
        $orderDetail[] = array('quantity' => $item['quantity'], 'product_id' => $item['id']);
      }
      $newOrder = new Order(null,$cusId,$today,$deliDate,0,0,0);
      $result = $newOrder->save($orderDetail);
      if($result==true)
      {
        unset($_SESSION['cart']);
      }
      echo ($result==true) ? 'Đặt Hàng Thành Công, Shop sẽ liên hệ để xác nhận đơn hàng sau' : '<code>Đặt Hàng Thất Bại :( </code>';
    }
  }
}else{
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
  echo '<response>';
  if(isset($_GET['deliveryDate']))
  {
      $cartItems = getCartItems();
      if(isset($_SESSION['username']))
      {
        $username = $_SESSION['username'];
        $customer = User::getCusomerByUser($username);
        $cusId = $customer[0]['customer_id'];
        unset($customer);
      }
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
  }else {
    echo '<code>Something went wrong<code>';
  }
  echo '</response>';
}
?>
