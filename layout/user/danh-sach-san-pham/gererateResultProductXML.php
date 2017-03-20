<?php
require_once($_SERVER['DOCUMENT_ROOT']."/ProjectPHP/class/ProductImage.Class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/ProjectPHP/class/Product.Class.php");
include($_SERVER['DOCUMENT_ROOT']."/ProjectPHP/layout/user/method/searchProduct.php");
if(isset($_GET['searchType']) &&  isset($_GET['input']) && isset($_GET['page']) && isset($_GET['produtPerPage']))
{
  $searchType = $_GET['searchType'];
  $input = $_GET['input'];
  $page = $_GET['page'];
  $productPerPage = $_GET['produtPerPage'];
  $products = searchProduct($searchType,$input);
  $pageCount = intval(( count($products) / $productPerPage ) + 1 );
  $startIndex = ( $page - 1 ) * $productPerPage;
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
  echo '<response>';
  if($products!=false)
  {
    $productsByPage = array_splice($products,$startIndex,$productPerPage);
    foreach($productsByPage as $item)
    {
        echo '<item>';
        echo '<productId>'.$item['product_id'].'</productId>';
        echo '<productName>'.$item['product_name'].'</productName>';
        echo '<productPrice>'.number_format($item['price']).'</productPrice>';
        echo '<productImage>'.ProductImage::get_one_product_image($item['product_id']).'</productImage>';
        echo'</item>';
    }
    echo '<page>'.$page.'</page>';
    echo '<pageCount>'.$pageCount.'</pageCount>';
    echo '<input>'.$input.'</input>';
    echo '<productPerPage>'.$productPerPage.'</productPerPage>';
    echo '<searchType>'.$searchType.'</searchType>';
    echo '</response>';
  }else {
    echo '<Error>Không Tìm Thấy Sản Phầm</Error>';
    echo '</response>';
  }
}else {
  echo 'Something went wrong when searchProduct';
}
?>
