<?php require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.class.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductImage.class.php');
?>
<?php
  $col = 1;
  $products=getProduct(true,6);
  foreach($products as $item)
  {
    if($col==1)
    {
      echo "<div class='grid-in'>";
    }
    $filename = ProductImage::get_one_product_image($item['product_id']);
    echo "<div class='col-md-4 grid-top'>"
          ."<a href='single.html' class='b-link-stripe b-animate-go  thickbox'>"
          ."<img class='img-responsive' src='/shared/image/".$filename."' alt='' style='height: 356px; margin: 0 auto;'>"
              ."<div class='b-wrapper'>"
                  ."<h3 class='b-animate b-from-left    b-delay03'>"
                    ."<span>Xem Ngay</span>"
                  ."</h3>"
                ."</div>"
          ."</a>"
          ."<p><a href='single.html'>".$item['product_name']."</a></p>"
          ."</div>";
    if($col==3)
    {
      echo "</div>";
      $col=1;
    }else {
      $col++;
    }
  }
  //end of loop
  if($col!=1)
  {
    echo "</div>";
  }
?>
