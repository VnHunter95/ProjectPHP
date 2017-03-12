<?php include('getRelatedProducts.php'); ?>
<?php
      $relatedProds = getRelatedProducts($productTags,$id);
?>
<div class=" bottom-product">
  <?php
    if($relatedProds != 0 )
    {
      foreach($relatedProds as $item)
      {
  ?>
      <div class="col-md-4 bottom-cd simpleCart_shelfItem">
        <div class="product-at ">
          <a href="/layout/user/chi-tiet-san-pham.php?productid=<?php echo $item['product_id']; ?>"><img class="img-responsive" src="/shared/image/<?php echo ProductImage::get_one_product_image($item['product_id']);?>" alt="Related Products" style = "withd:300px; height:300px;  margin: 0 auto;">
          <div class="pro-grid">
                <span class="buy-in">Mua Ngay</span>
          </div>
        </a>
        </div>
        <p class="tun"><?php echo $item['product_name']; ?></p>
        <a class="item_add" ><p class="number item_price"><i> </i><?php echo number_format($item['price'])." Vnđ";?></p></a>
      </div>
  <?php
      }
    }
  ?>
  <div class="clearfix"> </div>
</div>
