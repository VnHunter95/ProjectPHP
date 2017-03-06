<div class="col-md-9 product1">
<?php
    $pageCount;
    $products;
    $page = $_GET["page"];
    if(isset($_GET["groupid"])&&isset($_GET["page"]))
    {
      $groupid=$_GET["groupid"];
      $products = Product::list_product_by_group($groupid,$page,9);
      $pageCount = Product::getProductByGroupPageCount($groupid,9);
    }else if(isset($_GET['supplierid']))
    {
      $supid=$_GET['supplierid'];
      $products = Product::list_product_by_supplier($supid,$page,9);
      $pageCount = Product::getProductBySupplierPageCount($supid,9);
    }
    else {
      $products=Product::listProductWithLimit(18);
    }
    //Code inflate product layout
    if(isset($products))
    {
      $loop = 1;
      foreach($products as $item)
      {
        $image = ProductImage::get_one_product_image($item['product_id']);
        echo ($loop == 1) ? "\n<div class='bottom-product'>": "";
        echo "\n<div class='col-md-4 bottom-cd simpleCart_shelfItem'>"
              ."\n<div class='product-at'>"
                ."\n<a href='single.html'><img class='img-responsive' src='/shared/image/".$image."' alt='Product Image' style='withd:300px; height:300px;  margin: 0 auto;>' >"
                  ."\n<div class='pro-grid'>"
                      ."\n<span class='buy-in'>Mua Ngay</span>"
                  ."\n</div>"
                ."\n</a>"
              ."\n</div>"
              ."\n<p class='tun'>".$item['product_name']."</p>" // Rut gon description
              ."\n<a href='#' class='item_add'><p class='number item_price'><i> </i>".number_format($item['price'])." Vnđ</p></a>"
            ."\n</div>";
        echo ($loop == 3) ? "\n<div class='clearfix'></div>\n</div>" : "";
        if($loop == 3)
        {
          $loop=1;
        }else {
          $loop++;
        }
      }
      if($loop!=1)
      {
        echo "\n</div>";
      }
    }
?>
<!--Code from template
  <div class=" bottom-product"> 			bottom-product - 3 products inline
  <div class="col-md-4 bottom-cd simpleCart_shelfItem">
    <div class="product-at ">
      <a href="single.html"><img class="img-responsive" src="images/pi5.jpg" alt=""> product_image
      <div class="pro-grid">
            <span class="buy-in">Buy Now</span> Add to cart
      </div>
    </a>
    </div>
    <p class="tun">It is a long established fact that a reader</p> short description
<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
</div>
</div> -->
</div>
<div class="clearfix"> </div>
