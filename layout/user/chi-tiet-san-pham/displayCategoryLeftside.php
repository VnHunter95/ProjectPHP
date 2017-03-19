<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductGroup.Class.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Supplier.Class.php');
?>
<div class=" rsidebar span_1_of_left">
  <div class="of-left">
    <h3>Sản Phẩm</h3>
  </div>
     <ul class="menu">
       <li class="item1"><a href="#">Loại Sản Phẩm</a>
         <ul class="cute">
        <?php
          $groups = ProductGroup::list_product_group();
          foreach($groups as $item)
          {
            echo "<li class='subitem1'><a onclick='goToProductList(1,".$item['product_group_id'].")' style='cursor: pointer;'>".$item['product_group_name']."</a></li>";
          }
        ?>
          </ul>
        </li>
       <li class="item2"><a href="#">Nhà Sản Xuất</a>
          <ul class="cute">
            <?php
              $suppilers = Supplier::list_supplier();
              foreach($suppilers as $item)
              {
                echo "<li class='subitem1'><a onclick='goToProductList(2,".$item['supplier_id'].")' style='cursor: pointer;'>".$item['supplier_name']."</a></li>";
              }
            ?>
          </ul>
        </li>
     </ul>
</div>
