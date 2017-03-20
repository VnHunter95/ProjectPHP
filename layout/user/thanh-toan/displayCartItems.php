<?php
  $totalPrice = 0;
  if($cartItems == false || $cartItems == 0)
  {
    echo '<h2>Chưa có sản phẩm trong giỏ hàng</h2>';
  }else {
    foreach($cartItems as $item)
    {
      $name = $item['product_name'];
      $totalPrice += intval($item['quantity'])*intval($item['price']);
    ?>
    <div class="cart-header">
         <div class="cart-sec simpleCart_shelfItem">
            <div class="cart-item cyc">
               <img src="/shared/image/<?php echo $item['image']; ?>" class="img-responsive" alt="Product Image"/>
            </div>
             <div class="cart-item-info">
            <h3><a href="/layout/user/chi-tiet-san-pham.php?productid=<?php echo $item['id']; ?>"><?php echo $name ?></a></h3>
            <ul class="qty">
              <li><p>Đơn giá :<?php echo number_format($item['price']); ?></p></li>
              <li><p>Số lượng : <?php echo $item['quantity']; ?> </p></li>
            </ul>

               <div class="delivery">
                 <p>Thành tiền: <?php echo number_format($item['price']*$item['quantity']); ?></p>
               <div class="clearfix"></div>
                </div>
             </div>
             <div class="clearfix"></div>

          </div>
    </div>
    <?php
    }
  }
?>
