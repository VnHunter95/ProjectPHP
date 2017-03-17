<?php include_once($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<?php
  if(isset($_SESSION['user'])!=""){
    header("Location: index.php");
  }

  if(isset($_POST['btndangky'])){
    require_once($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/register.php');
    echo "<script>alter('Đã xảy ra lỗi, đăng ký thất bại!');</script>";
  }
  if(isset($_POST['btnreset'])){
    $_POST['txtusername'] = "";
    $_POST['txtpassword'] = "";
    $_POST['txtcusname'] = "";
    $_POST['txtcusphone'] = "";
    $_POST['txtcusadd'] = "";
    $_POST['txtcusemail'] = "";
  }

?>

<!-- Form -->
<div class="container">
  <div class="col col-md-5 col-offset-4">
    <form method="post" enctype="multipart/form-data" >
    <!-- Tên tài khoản -->
    <div class="form-group row">
      <div class = "lbltitle">
        <label>Tên đăng nhập</label>
      </div>
      <div class="lblinput">
        <input type="text" name="txtusername" id="txtusername" minlength="6" maxlength="18" required  value="<?php echo isset($_POST["txtusername"]) ? $_POST["txtusername"] : "" ; ?>" />
      </div>
    </div>
    <!-- Mật khẩu -->
    <div class="form-group row">
      <div class = "lbltitle">
        <label>Mật khẩu</label>
      </div>
      <div class="lblinput">
        <input type="password" name="txtpassword" minlength="6" maxlength="18" required value="<?php echo isset($_POST["txtpassword"]) ? $_POST["txtpassword"] : "" ; ?>"></textarea>
      </div>
    </div>
    <!-- Tên khách hàng -->
    <div class="form-group row">
      <div class = "lbltitle">
        <label>Tên khách hàng</label>
      </div>
      <div class="lblinput">
        <input type="text" name="txtcusname"  maxlength="50" required value="<?php echo isset($_POST["txtcusname"]) ? $_POST["txtcusname"] : "" ; ?>" />
      </div>
    </div>
    <!-- Số điện thoại -->
    <div class="form-group row">
      <div class = "lbltitle">
        <label>Số điện thoại</label>
      </div>
      <div class="lblinput">
        <input type="tel" name="txtcusphone" pattern="^0\d{9,10}" required value="<?php echo isset($_POST["txtcusphone"]) ? $_POST["txtcusphone"] : "" ; ?>" />
      </div>
    </div>
    <!-- Địa chỉ -->
    <div class="form-group row">
      <div class = "lbltitle">
        <label>Địa chỉ liên lạc</label>
      </div>
      <div class="lblinput">
        <input type="textarea" name="txtcusadd" maxlength="150" required value="<?php echo isset($_POST["txtcusadd"]) ? $_POST["txtcusadd"] : "" ; ?>" />
      </div>
    </div>
    <!-- Email  -->
    <div class="form-group row">
      <div class = "lbltitle">
        <label>Email</label>
      </div>
      <div class="lblinput">
        <input type="email" name="txtcusemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" maxlength="50" required value="<?php echo isset($_POST["txtcusemail"]) ? $_POST["txtcusemail"] : "" ; ?>" />
      </div>
    </div>
    <div>
      <div class="form-group row">
        <input type="submit" name="btndangky" required value="Đăng ký"/>
      </div>
      <div class="form-group row">
        <input type="reset" name="btnreset"  value="Làm mới"/>
      </div>
    </div>
  </form>
  </div>
</div>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/footer.php");?>
