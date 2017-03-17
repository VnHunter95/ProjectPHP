<?php
  if(session_id() == '') {
    session_start();
  }
  function getCartItems()
  {
    if(isset($_SESSION['cart']))
    {
      $cart = $_SESSION['cart'];
      return $cart;
    }else {
      return false;
    }
  }
?>
