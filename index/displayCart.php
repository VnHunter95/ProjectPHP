<li>
    <a href="#" data-toggle="modal" data-target="#cartModal"><span class="glyphicon glyphicon-shopping-cart"></span> 2 Sản Phẩm - 360.000 VNĐ</a>
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
                            <!--Product 1-->
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"
                                            /></div>
                                        <div class="col-sm-6">
                                            <h4 style="max-width: 320px;word-wrap: break-word;">Product 1</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">180.000 VNĐ</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td data-th="Subtotal" class="text-center">180.000 VNĐ</td>
                                <td data-th="" class="actions">
                                    <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                            </tr>
                            <!--Product 2-->
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"
                                            /></div>
                                        <div class="col-sm-6">
                                            <h4 style="max-width: 320px;word-wrap: break-word;">Product 2</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">180.000 VNĐ</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td data-th="Subtotal" class="text-center">180.000 VNĐ</td>
                                <td data-th="" class="actions">
                                    <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total: 360.000 VNĐ</strong></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total: 360.000 VNĐ</strong></td>
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
