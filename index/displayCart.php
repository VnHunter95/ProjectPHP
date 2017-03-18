<li>
<?php
  $total = 0 ;
  $itemCount = 0;
  $cartInfo = ' (0) Sản Phẩm ';
  if(isset($_SESION['cart']))
  {
    if(count($_SESSION['cart']) > 0){
      foreach($_SESSION['cart'] as $item)
      {
        $total += intval($item['price'])*intval($item['quantity']);
        $itemCount += intval($item['quantity']);
      }
      $cartInfo = $itemCount.' Sản Phẩm - '.number_format($total).' VNĐ </a>';
    }
  }
?>
<a href="#" data-toggle="modal" data-target="#cartModal" id="cartTotal"><span class="glyphicon glyphicon-shopping-cart"></span><?php echo $cartInfo?></a>
    <div id="cartModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Giỏ hàng</h4>
                </div>
                <div class="modal-body">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:40%">Product</th>
                                <th style="width:20%">Price</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody id="itemTable">
                            <?php include('displayCartItems.php'); ?>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center" id="cartTotal2"><strong><?php echo 'Total: '.number_format($total).' VNĐ'; ?></strong></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center" id="cartTotal1"><?php echo 'Total: '.number_format($total).' VNĐ'; ?></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <form action="/layout/user/thanh-toan.php"><button type="submit" class="btn btn-info">Thanh Toán</button></form>
                    <button type="button" class="btn btn-default" style="float:left;" onclick="clearCart()">Xóa giỏ hàng</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal" >Close</button>
                </div>
            </div>
        </div>
    </div>
</li>
