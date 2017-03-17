<div class="modal-dialog">
   <!-- Modal content-->

  <form action="thanh-toan/placeOrder.php" method="POST">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Vui lòng nhập thông tin</h4>
     </div>
     <div class="modal-body">
         <label>Họ Tên</label></br><input type="text" name="cusName" required=""/></br>
         <label>Điện Thoại</label></br><input name="cusPhone" type="tel" pattern="^0\d{9,10}" required ></br>
         <label>Email</label></br><input type="email" name="cusEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></br>
         <label>Địa Chỉ</label></br><textarea type="text" name="cusAdress" required/></textarea></br>
         <label>Ngày Giao Hàng</label></br><input name="deliveryDate" type="date" placeholder="Ngày/Tháng/Năm" />
         <!-- cdn for modernizr, if you haven't included it already -->
          <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
          <!-- polyfiller file to detect and load polyfills -->
          <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
          <script>
            webshims.setOptions('waitReady', false);
            webshims.setOptions('forms-ext', {types: 'date'});
            webshims.polyfill('forms forms-ext');
          </script>
     </div>
     <div class="modal-footer">
       <button type="submit" class="btn btn-primary" name="btnSubmit">Đặt Hàng</button>
       <button type="button" class="btn btn-default" data-dismiss="modal">Tắt</button>
     </div>
   </div>
   </form>
</div>
