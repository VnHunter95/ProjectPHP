<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/StoreInfo.Class.php');
  $storeInfo = StoreInfo::getStoreInfo();
?>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-top-at">
                <div class="col-md-4 amet-sed ">
                    <h3>Thông Tin Liên Hệ</h3>
                    <h4><?php echo $storeInfo[0]['store_name']; ?> </h4>
                    <p>Địa chỉ: <?php echo $storeInfo[0]['store_address']; ?></p>
                    <p>Số điện thoại: <?php echo $storeInfo[0]['store_phone_number_1']." - ".$storeInfo[0]['store_phone_number_2']; ?> </p>
                    <p>Email: <?php echo $storeInfo[0]['store_email'];?></p>
                    <p>Facebook: <?php echo $storeInfo[0]['store_facebook'];?></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
</div>
</body>

</html>
