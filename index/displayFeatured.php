<?php
      require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/ProductImage.class.php');
?>
<?php
  $list = getProduct(false,5);
  $filenames = array();
  foreach($list as $item)
  {
    $filename = ProductImage::get_one_product_image($item['product_id']);
    array_push($filenames,$filename);
  }
?>
<div class="col-md-6 men">
  <a href="/ProjectPHP/layout/user/chi-tiet-san-pham.php?productid=<?php echo $list[0]['product_id'] ?>" class="b-link-stripe b-animate-go  thickbox"><img src="/shared/image/<?php echo $filenames[0]?>" alt=""  style='display: block;max-width: 100%; max-height: 429px; margin: 0 auto;'>
    <div class="b-wrapper">
              <h3 class="b-animate b-from-top top-in   b-delay03 ">
                <span><font size='4'><?php echo $list[0]['product_name']?></font></span>
              </h3>
    </div>
  </a>
</div>
<div class="col-md-6">
  <div class="col-md3">
    <div class="col-md-6 men1">
      <a href="/ProjectPHP/layout/user/chi-tiet-san-pham.php?productid=<?php echo $list[1]['product_id'] ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/shared/image/<?php echo $filenames[1]?>" alt="" style='block;max-width: 100%; max-height: 196px; margin: 0 auto; '>
          <div class="b-wrapper">
              <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                <span><font size='4'><?php echo $list[1]['product_name']?></font></span>
              </h3>
            </div>
      </a>
    </div>
    <div class="col-md-6 men1">
      <a href="/ProjectPHP/layout/user/chi-tiet-san-pham.php?productid=<?php echo $list[2]['product_id'] ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/shared/image/<?php echo $filenames[2]?>" alt="" style='block;max-width: 100%; max-height: 196px; margin: 0 auto; '>
          <div class="b-wrapper">
              <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                <span><font size='4'><?php echo $list[2]['product_name']?></font></span>
              </h3>
            </div>
      </a>
    </div>
  </div>
  <div class="col-md3">
    <div class="col-md-6 men1">
      <a href="/ProjectPHP/layout/user/chi-tiet-san-pham.php?productid=<?php echo $list[3]['product_id'] ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/shared/image/<?php echo $filenames[3]?>" alt="" style='block;max-width: 100%; max-height: 196px; margin: 0 auto; '>
          <div class="b-wrapper">
              <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                <span><font size='4'><?php echo $list[3]['product_name']?></font></span>
              </h3>
            </div>
      </a>
    </div>
    <div class="col-md-6 men1">
      <a href="/ProjectPHP/layout/user/chi-tiet-san-pham.php?productid=<?php echo $list[4]['product_id'] ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/shared/image/<?php echo $filenames[4]?>" alt=""  style='block;max-width: 100%; max-height: 196px ; margin: 0 auto;'>
          <div class="b-wrapper">
              <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                <span><font size='4'><?php echo $list[4]['product_name']?></font></span>
              </h3>
            </div>
      </a>

    </div>
    <div class="clearfix"> </div>
  </div>
</div>
