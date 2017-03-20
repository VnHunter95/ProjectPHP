<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Product.Class.php');

$id = $_POST['id'];
$product = new Product($id,'','','','','','','','');
$res = $product->delete();
if($res == 0 || $res == -1)
{
  echo $res;
    // echo '<script>alert("Xóa thất bại !")</script>';
}else {
    echo '<script>alert("Xóa thành công !")</script>';
}
 ?>
