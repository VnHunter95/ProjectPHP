<li>
<?php
  $total = 0 ;
  $itemCount = 0;
  if(isset($_SESION['cart']) || count($_SESSION['cart']) > 0)
  {
    foreach($_SESSION['cart'] as $item)
    {
      $total += intval($item['price'])*intval($item['quantity']);
      $itemCount += intval($item['quantity']);
    }
    echo '<a href="#" data-toggle="modal" data-target="#cartModal" id="cartTotal"><span class="glyphicon glyphicon-shopping-cart"></span> '.$itemCount.' Sản Phẩm - '.number_format($total).' VNĐ </a>';
  }else {
    echo '<a href="#" data-toggle="modal" data-target="#cartModal" id="cartTotal"><span class="glyphicon glyphicon-shopping-cart"></span> Empty Cart</a>';
  }
?>
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
                        <tbody>
                            <?php include('displayCartItems.php'); ?>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong><?php echo 'Total: '.number_format($total).' VNĐ'; ?></strong></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><?php echo 'Total: '.number_format($total).' VNĐ'; ?></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" onclick="location.href = 'http://'+window.location.host+'/layout/user/thanh-toan.php'" >Thanh Toán</button>
                    <button type="button" class="btn btn-default" style="float:left;">Xóa giỏ hàng</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</li>
