<?php
session_start();
//POPULATE DATA SESSION WITH CODE !!! FOR TESING ONLY
$cart = array();
$item1 = array('id' => '23', 'product_name' => 'Nendoroid Shion 1', 'price' => '290000', 'quantity' => '2', 'image' => 'C004.jpg');
$item2 = array('id' => '24', 'product_name' => 'Nendoroid Shion 2', 'price' => '300000', 'quantity' => '1', 'image' => 'C003.jpg');
$item3 = array('id' => '26', 'product_name' => 'Nendoroid Shion 3', 'price' => '100000', 'quantity' => '5', 'image' => 'C005.jpg');
$item4 = array('id' => '27', 'product_name' => 'Nendoroid Shion 4', 'price' => '300000', 'quantity' => '2', 'image' => 'C006.jpg');

$cart[] = $item1;
$cart[] = $item2;
$cart[] = $item3;
$cart[] = $item4;
$_SESSION['cart'] = $cart;
///////////////
?>
