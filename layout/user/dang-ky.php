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

	<div class=" container">
    <br>
		<form method="post" enctype="multipart/form-data">
			<div class="panel panel-default">
            <div class="panel-heading panel-image">
                <div class="yourname">

                </div>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="lbltitle">
                            <label>Tên khách hàng</label>
                        </div>
                        <div class="lblinput">
                            <input class="form-control" type="text" name="txtcusname" minlength="1" maxlength="50" required value="<?php echo isset($_POST["
                                txtcusname "]) ? $_POST["txtcusname "] : "" ; ?>" />
                        </div>
                    </div>
                    <!-- Số điện thoại -->
                    <div class="form-group">
                        <div class="lbltitle">
                            <label>Số điện thoại</label>
                        </div>
                        <div class="lblinput">
                            <input class="form-control" type="tel" name="txtcusphone" pattern="^0\d{9,10}" required value="<?php echo isset($_POST["
                                txtcusphone "]) ? $_POST["txtcusphone "] : "" ; ?>" />
                        </div>
                    </div>
                    <!-- Địa chỉ -->
                    <div class="form-group">
                        <div class="lbltitle">
                            <label>Địa chỉ liên lạc</label>
                        </div>
                        <div class="lblinput">
                            <textarea class="form-control" rows="4" cols="50" name="txtcusadd" maxlength="150" required value="<?php echo isset($_POST["
                                txtcusadd "]) ? $_POST["txtcusadd "] : "" ; ?>" /></textarea>
                        </div>
                    </div>
                    <!-- Email  -->
                    <div class="form-group">
                        <div class="lbltitle">
                            <label>Email</label>
                        </div>
                        <div class="lblinput">
                            <input class="form-control" type="email" name="txtcusemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" maxlength="50"
                                required value="<?php echo isset($_POST[" txtcusemail "]) ? $_POST["txtcusemail "] : "" ; ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="lbltitle">
                            <label>Tên đăng nhập</label>
                        </div>
                        <div class="lblinput">
                            <input class="form-control" type="text" name="txtusername" id="txtusername" pattern="[A-Za-z0-9]+" minlength="6" maxlength="18"
                                required value="<?php echo isset($_POST[" txtusername "]) ? $_POST["txtusername "] : "" ; ?>" />
                        </div>
                    </div>
                    <!-- Mật khẩu -->
                    <div class="form-group">
                        <div class="lbltitle">
                            <label>Mật khẩu</label>
                        </div>
                        <div class="lblinput">
                            <input class="form-control" type="password" name="txtpassword" minlength="6" maxlength="18" required value="<?php echo isset($_POST["
                                txtpassword "]) ? $_POST["txtpassword "] : "" ; ?>">
                        </div>
                    </div>
            <input class="btn btn-default" type="reset" name="btnreset" value="Làm mới" />
            <input class="btn btn-success" type="submit" name="btndangky" required value="Đăng ký" />
                </div>
            </div>
        </div>
		</form>
	</div>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/footer.php");?>
