<?php
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProductTags.php') ;
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProductImages.php') ;
  $productTags = getProductTags($id);
  $productImages = getProductImages($id);
?>
<div class="col-md-9 product-price1">
  <div class="col-md-5 single-top">
    <div class="flexslider">
      <ul class="slides">
        <?php
          if($productImages!=null)
          {
            foreach ($productImages as $item)
            {
              echo '<li data-thumb="/shared/image/'.$item.'">'
                    .'<img src="/shared/image/'.$item.'" />'
                  .'</li>';
            }
          }
        ?>
      </ul>
    </div>
      <!-- FlexSlider -->
      <script defer src="/shared/js/jquery.flexslider.js"></script>
      <link rel="stylesheet" href="/shared/css/flexslider.css" type="text/css" media="screen" />

      <script>
        // Can also be used with $(document).ready()
          $(window).load(function() {
            $('.flexslider').flexslider({
              animation: "slide",
              controlNav: "thumbnails"
            });
          });
      </script>
  </div>
  <div class="col-md-7 single-top-in simpleCart_shelfItem">
    <div class="single-para ">
      <h4><?php echo $prod[0]['product_name']; ?></h4>
      <h5 class="item_price"><?php echo number_format($prod[0]['price']).' Vnđ'; ?></h5>
      <p><?php echo $prod[0]['description'];?></p>
      <ul class="tag-men">
        <li><span>TAG</span>
          <span class="women1">:
              <?php
                if($productTags != false)
                {
                  foreach($productTags as $item){
                    echo  ' '.TAG::getTagName($item['tag_id']).', ';
                  }
                }
              ?>
          </span>
       </li>
     </ul>
     <a onclick="addToCart(<?php echo $prod[0]['product_id']; ?>)" class="add-cart item_add" style="cursor: pointer;">Thêm Giỏ Hàng</a>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="cd-tabs" style="padding-left:15px;padding-right:15px">
    <nav style = "padding-top:15px">
      <ul class="cd-tabs-navigation">
        <li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>
      </ul>
    </nav>
    <ul class="cd-tabs-content">
      <li data-content="television" class="selected">
        <div class="comments-top-top">
              <div class="top-comment-left">
                <img class="img-responsive" src="/doc/design/layoutimage/co.png" alt="">
              </div>
            <div>
              <div class="top-comment-right">
                <a href="#" class="close1"></a>
                <h6><a>Hendri</a> - September 3, 2014</h6>
                <p>Wow nice!</p>
              </div>
            </div>
        </div>
      </li>
      <div class="clearfix"></div>
    </ul>
  </div>
  <?php include('chi-tiet-san-pham/displayRelatedProducts.php');?>
</div>
