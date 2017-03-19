<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/User.Class.php');
  $username = $_SESSION['username'];
  $cusomterInfo = User::getCusomerByUser($username)[0];
?>

<div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Thông Tin Đặt Hàng</h4>
     </div>
     <div class="modal-body">
       <div class="info-group">
           <h3>Thông Tin Khách Hàng</h3>
           <p>Tên khách hàng: <?php echo $cusomterInfo['customer_name'] ?></p>
           <p>Email: <?php echo $cusomterInfo['customer_email'] ?></p>
           <p>Điện thoại: <?php echo $cusomterInfo['customer_phone_number'] ?></p>
           <p>Địa Chỉ: <?php echo $cusomterInfo['customer_address'] ?></p>
           <!-- cdn for modernizr, if you haven't included it already -->
          <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
          <!-- polyfiller file to detect and load polyfills -->
          <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
          <script>
            webshims.setOptions('waitReady', false);
            webshims.setOptions('forms-ext', {types: 'date'});
            webshims.polyfill('forms forms-ext');
          </script>
          <hr>
          <h4>Ngày giao hàng</h4>
          <br>
          <input class="form-control" style="width:50%" id="deliveryDate" type="date" placeholder="Ngày/Tháng/Năm" />
       </div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-success" onClick="order()">Đặt Hàng</button>
       <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
     </div>
   </div>
</div>
