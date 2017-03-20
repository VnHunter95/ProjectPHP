<?php
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getSupplier.php');
  include($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getProductGroup.php');
  $suppliers = getSupplier();
  $groups = getProductGroup();
?>
    <div class="head-top">
        <div class=" h_menu4">
            <ul class="memenu skyblue">
                <li><a class="color1" href="#">Nhà Sản Xuất</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                      <?php
                                        foreach($suppliers as $item)
                                        {
                                          echo '<li><a href="/layout/user/danh-sach-san-pham.php?supplierid='.$item['supplier_id'].'&page=1">'.$item['supplier_name'].'</a></li>';
                                        }
                                      ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a class="color2" href="#">Loại Sản Phẩm</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                      <?php
                                        foreach($groups as $item)
                                        {
                                          echo '<li><a href="/layout/user/danh-sach-san-pham.php?groupid='.$item['product_group_id'].'&page=1">'.$item['product_group_name'].'</a></li>';
                                        }
                                      ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
