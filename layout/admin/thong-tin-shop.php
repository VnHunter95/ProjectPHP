<?php
  include('header.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/StoreInfo.Class.php');
  if(isset($_POST["btnsubmit"]))
  {
    $name     = $_POST['name'];
    $address  = $_POST['address'];
    $phone1   = $_POST['phone1'];
    $phone2   = $_POST['phone2'];
    $email    = $_POST['email'];
    $facebook = $_POST['facebook'];
    $newInfo = new StoreInfo($name,$address,$phone1,$phone2,$email,$facebook);
    if($newInfo->edit() == 1)
    {
      echo '<script>alert("Sửa thông tin shop thành công !")</script>';
    }else {
      echo '<script>alert("Sửa thông tin shop thất bại !")</script>';
    }
  }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a>
            </li>
            <li class="active">Quản lý sản phẩm</li>
        </ol>
    </div>


    <!--thêm sp-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action"thong-tin-shop.php" method="POST">
                        <div class="form-group">
                            <label for="name">Tên shop:</label>
                            <input type="text" class="form-control" id="name" name="name" disabled="true" maxlength="150" required>
                        </div>
                        <div class="form-group">
                            <label for="phone1">Địa chỉ :</label>
                            <textarea rows="8" class="form-control" id="address"  name="address" disabled="true" maxlength="150" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone1">Số điện thoại 1:</label>
                            <input type="text" class="form-control" id="phone1" name="phone1" disabled="true" required pattern="^0\d{9,10}">
                        </div>
                        <div class="form-group">
                            <label for="phone2">Số điện thoại 2:</label>
                            <input type="text" class="form-control" id="phone2" name="phone2" disabled="true" maxlength="50" pattern="^0\d{9,10}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" disabled="true" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" disabled="true">
                        </div>
                        <button type="button" id="btncancle" class="btn btn-secondary" style="float: right; display: none;" onclick="showButton('0')" style="float: right; display: none;">Hủy</button>
                        <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info" style="float: right; display: none;">Lưu</button>
                        <button type="button" id="btnedit" class="btn btn-info" style="float: right;" onclick="showButton('1')" style="float: right;">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  var info;
  $(document).ready(function () {
    var url = 'http://'+window.location.hostname+':5454/layout/admin/thong-tin-shop/shopInfo.php';
    $.getJSON(url, function (data) {
        info = data[0];
        fillInfo();
      });
  });
  function fillInfo()
  {
    $('#name').val(info.store_name);
    $('#address').val(info.store_address);
    $('#phone1').val(info.store_phone_number_1);
    $('#phone2').val(info.store_phone_number_2);
    $('#email').val(info.store_email);
    $('#facebook').val(info.store_facebook);
  }
  function showButton( bool )
  {
    if( bool == '1')
    {
      $('#btnedit').hide();
      $('#btncancle').show();
      $('#btnsubmit').show();
    }else{
      fillInfo();
      $('#btnedit').show();
      $('#btncancle').hide();
      $('#btnsubmit').hide();
    }
  }
</script>
<?php include('footer.php'); ?>
