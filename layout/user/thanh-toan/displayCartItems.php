<?php
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getCartItems.php');
  //POPULATE DATA SESSION WITH CODE !!! FOR TESING ONLY
  $cart = array();
  $item1 = array('id' => '23', 'product_name' => 'Nendoroid Shion 1', 'price' => '2900000', 'quantity' => '2');
  $item2 = array('id' => '24', 'product_name' => 'Nendoroid Shion 2', 'price' => '3000000', 'quantity' => '2');
  $item3 = array('id' => '23', 'product_name' => 'Nendoroid Shion 3', 'price' => '2900000', 'quantity' => '2');
  $item4 = array('id' => '24', 'product_name' => 'Nendoroid Shion 4', 'price' => '3000000', 'quantity' => '2');
  $total = array('total_price' => '99999999');
  $cart[] = $item1;
  $cart[] = $item2;
  $cart[] = $item3;
  $cart[] = $item4;
  $cart[] = $total;
  $_SESSION['cart'] = $cart;
  ///////////////
  $cartItems = getCartItems();
  if($cartItems == false)
  {
    echo '<h2>Chưa có sản phẩm trong giỏ hàng</h2>';

  }else {
    $totalInfo = array_pop($cartItems);
    foreach($cartItems as $item)
    {
      $name = $item['product_name'];
    ?>
    <div class="cart-header">
         <div class="cart-sec simpleCart_shelfItem">
            <div class="cart-item cyc">
               <img src="images/pic1.jpg" class="img-responsive" alt=""/>
            </div>
             <div class="cart-item-info">
            <h3><a href="#"><?php echo $name ?></a></h3>
            <ul class="qty">
              <li><p>Size : 5</p></li>
              <li><p>Qty : 1</p></li>
            </ul>

               <div class="delivery">
               <p>Service Charges : Rs.100.00</p>
               <span>Delivered in 2-3 bussiness days</span>
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
