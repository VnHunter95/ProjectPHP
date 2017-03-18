<?php
if(isset($_SESSION['cart']))
{
  if(count($_SESSION['cart']) > 0)
  {
    foreach ($_SESSION['cart'] as $item):
    ?>
    <tr>
        <td data-th="Product">
            <div class="row">
                <div class="col-sm-4 hidden-xs"><img src="/shared/image/<?php echo $item['image']; ?>" alt="..." class="img-responsive" style="height: 100px; width: 100px;"
                    /></div>
                <div class="col-sm-6">
                    <h4 style="max-width: 320px;word-wrap: break-word;"><?php echo $item['product_name']; ?></h4>
                </div>
            </div>
        </td>
        <td data-th="Price"><?php echo number_format($item['price']); ?></td>
        <td data-th="Quantity">
            <input id="<?php echo 'quantity'.$item['id']?>" min="1" type="number" class="form-control text-center" value="<?php echo $item['quantity']; ?>">
        </td>
        <td data-th="Subtotal" class="text-center"><?php echo number_format(intval($item['price'])*($item['quantity'])); ?></td>
        <td data-th="" class="actions">
            <button class="btn btn-danger btn-sm"  onclick="<?php echo 'removeFromCart('.$item['id'].');' ?>" ><span class="glyphicon glyphicon-trash"></span></button>
            <button class="btn btn-danger btn-sm" onclick="<?php echo 'preUpdateCart('.$item['id'].');'; ?>"><span class="glyphicon glyphicon-edit"></span></button>
        </td>
    </tr>
<?php   endforeach;
  }
}else {
}
?>
