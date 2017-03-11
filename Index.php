<?php include_once("header.php");?>

<div class="container">
  <div class="banner">
          <script src="shared/js/responsiveslides.min.js"></script>
          <script>
              $(function () {
                  $("#slider").responsiveSlides({
                      auto: true,
                      nav: true,
                      speed: 500,
                      namespace: "callbacks",
                      pager: true,
                  });
              });
          </script>
          <div id="top" class="callbacks_container">
              <ul class="rslides" id="slider">
                  <?php
                  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getBanner.php');
                  $banners = getBanner();
                  foreach( $banners as $item){
                  echo "<li><img src='/banner/".$item["banner_image_filename"]."' alt='Banner Image' class='img-responsive' style='width:100%; height:500px'></li>";
                  }
                  ?>
              </ul>
          </div>
  </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProduct.php');?>
<!--content-->
<div class="content">
    <div class="container">
        <div class="content-top">
            <h1>NEW RELEASED</h1>
            <?php include($_SERVER['DOCUMENT_ROOT']."/layout/user/method/displayNewProduct.php");?>
        </div>
        <!----->

        <div class="content-top-bottom">
            <h2>Featured Collections</h2>
            <?php include($_SERVER['DOCUMENT_ROOT']."/layout/user/method/displayFeatured.php");?>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!---->
</div>
<?php include_once("footer.php");?>
