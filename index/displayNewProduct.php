<?php require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.class.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductImage.class.php');
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
          ."<a href='/layout/user/chi-tiet-san-pham.php?productid=".$item['product_id']."' class='b-link-stripe b-animate-go  thickbox'>"
          ."<img src='/shared/image/".$filename."' alt='' style='block;max-width: 100%; max-height: 356px; margin: 0 auto;'>"
              ."<div class='b-wrapper'>"
                  ."<h3 class='b-animate b-from-left    b-delay03'>"
                    ."<span>Xem Ngay</span>"
                  ."</h3>"
                ."</div>"
          ."</a>"
          ."<p><a href='/layout/user/chi-tiet-san-pham.php?product_id=".$item['product_id']."'>".$item['product_name']."</a></p>"
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
