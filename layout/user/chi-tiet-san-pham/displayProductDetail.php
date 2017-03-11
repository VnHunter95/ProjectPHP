<?php
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProductTag.php') ;
  $productTags = getProductTag($prod[0]['product_id']);
?>
<div class="col-md-9 product-price1">
  <div class="col-md-5 single-top">
      <div class="flexslider">
          <ul class="slides">
            <li data-thumb="/doc/design/layoutimage/si.jpg">
              <img src="/doc/design/layoutimage/si.jpg" />
            </li>
            <li data-thumb="/doc/design/layoutimage/si1.jpg">
              <img src="/doc/design/layoutimage/si1.jpg" />
            </li>
            <li data-thumb="/doc/design/layoutimage/si2.jpg">
              <img src="/doc/design/layoutimage/si2.jpg" />
            </li>
            <li data-thumb="/doc/design/layoutimage/si.jpg">
              <img src="/doc/design/layoutimage/si.jpg" />
            </li>
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
          <?php
            if($productTags != false)
            {
              foreach($productTags as $item){
                echo '<span class="women1">: '.$item.',</span>';
              }
            }
          ?>
        </li>
      </ul>
      <a href="#" class="add-cart item_add">Thêm Giỏ Hàng</a>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="cd-tabs">
    <nav>
      <ul class="cd-tabs-navigation">
        <li><a data-content="fashion"  href="#0">Description </a></li>
        <li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
        <li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>
      </ul>
    </nav>
    <ul class="cd-tabs-content">
      <li data-content="fashion" >
        <div class="facts">
              <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
              <ul>
                <li>Research</li>
                <li>Design and Development</li>
                <li>Porting and Optimization</li>
                <li>System integration</li>
                <li>Verification, Validation and Testing</li>
                <li>Maintenance and Support</li>
              </ul>
        </div>

      </li>
      <li data-content="cinema" >
          <div class="facts1">
                  <div class="color"><p>Color</p>
                    <span >Blue, Black, Red</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="color">
                    <p>Size</p>
                    <span >S, M, L, XL</span>
                    <div class="clearfix"></div>
                  </div>
          </div>
      </li>
      <li data-content="television" class="selected">
        <div class="comments-top-top">
              <div class="top-comment-left">
                <img class="img-responsive" src="/doc/design/layoutimage/co.png" alt="">
              </div>
              <div class="top-comment-right">
                <h6><a href="#">Hendri</a> - September 3, 2014</h6>
                <ul class="star-footer">
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                </ul>
                <p>Wow nice!</p>
              </div>
              <div class="clearfix"> </div>
              <a class="add-re" href="#">ADD REVIEW</a>
        </div>
      </li>
      <div class="clearfix"></div>
    </ul>
  </div>
  <div class=" bottom-product">
        <div class="col-md-4 bottom-cd simpleCart_shelfItem">
          <div class="product-at ">
            <a href="#"><img class="img-responsive" src="/doc/design/layoutimage/pi3.jpg" alt="">
            <div class="pro-grid">
                  <span class="buy-in">Buy Now</span>
            </div>
          </a>
          </div>
          <p class="tun">It is a long established fact that a reader</p>
          <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
        </div>
        <div class="col-md-4 bottom-cd simpleCart_shelfItem">
          <div class="product-at ">
            <a href="#"><img class="img-responsive" src="/doc/design/layoutimage/pi1.jpg" alt="">
            <div class="pro-grid">
                  <span class="buy-in">Buy Now</span>
            </div>
            </a>
          </div>
          <p class="tun">It is a long established fact that a reader</p>
          <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
        </div>
        <div class="col-md-4 bottom-cd simpleCart_shelfItem">
          <div class="product-at ">
            <a href="#"><img class="img-responsive" src="/doc/design/layoutimage/pi4.jpg" alt="">
            <div class="pro-grid">
                  <span class="buy-in">Buy Now</span>
            </div>
            </a>
          </div>
          <p class="tun">It is a long established fact that a reader</p>
          <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
        </div>
          <div class="clearfix"> </div>
  </div>
</div>
