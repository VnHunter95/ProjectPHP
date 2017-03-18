<?php
  $productId = $_GET['remove'];
  if(!isset($_SESSION["cart"])||count($_SESSION["cart"])<1)
  {
    $responseCode = 4;
  }else {
    $index = 0;
    $was_found = false;
    foreach($_SESSION["cart"] as $item){
      if($item['id'] == $productId)
      {
        array_splice($_SESSION['cart'],$index,1);
        $responseCode = 1;
        $was_found = true;
      }
      $index++;
    }
    if($was_found == false)
    {
        $responseCode = 3;
    }
  }
?>
