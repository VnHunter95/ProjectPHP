<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Product.class.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/ProductImage.class.php');
?>
<?php
  $col = 1;
  $products=getProduct(true,9);
  $loopCount = count($products);
  $loop=0;
  foreach($products as $item)
  {
    if($col==1)
    {
      echo "<div class='grid-in'>";
    }
    $filename = ProductImage::get_one_product_image($item['product_id']);
    echo "<div class='col-md-4 grid-top'>"
<<<<<<< HEAD
          ."<a href='/ProjectPHP/layout/user/chi-tiet-san-pham.php?productid=".$item['product_id']."' class='b-link-stripe b-animate-go  thickbox'>"
          ."<img src='/ProjectPHP/shared/image/".$filename."' alt='' style='block;max-width: 100%; max-height: 356px; margin: 0 auto;'>"
=======
          ."<a href='/layout/user/chi-tiet-san-pham.php?productid=".$item['product_id']."' class='b-link-stripe b-animate-go  thickbox'>"
          ."<img src='/shared/image/".$filename."' alt='' style='display:block;width:350px;height:400px;max-width: 100%; max-height: 356px; margin: 0 auto;'>"
>>>>>>> 493e5c61bbbe9bc05d4de2013e774e2288f15c59
              ."<div class='b-wrapper'>"
                  ."<h3 class='b-animate b-from-left    b-delay03'>"
                    ."<span>Xem Ngay</span>"
                  ."</h3>"
                ."</div>"
          ."</a>"
          ."<p><a href='/ProjectPHP/layout/user/chi-tiet-san-pham.php?product_id=".$item['product_id']."'>".$item['product_name']."</a></p>"
          ."</div>";
    if(++$loop === $loopCount) {
    echo "<div class='clearfix'></div>";
    echo "</div>";
    return;
    }
    if($col==3)
    {
      echo "</div>";
      $col=1;
    }else {
      $col++;
    }
  }
?>
