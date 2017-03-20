<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Product.Class.php');

$supplier_id      = $_POST['supplier'];
$groupproduct_id  = $_POST['group'];
$productname      = $_POST['name'];
$description      = $_POST['description'];
$price            = $_POST['price'];
$number_remain    = $_POST['remain'];
$dates = date('Y-m-d  H:i:s');

$newProduct = new Product($supplier_id,$groupproduct_id,$productname,$description,$price,$number_remain,0,$dates);
$res = $newProduct->save();
// if($res == -1 || $res == 0)
// {
  echo $res;
// }else {
//   echo '<script>alert("Thêm sản phẩm thành công")</script>';
// }
 ?>
