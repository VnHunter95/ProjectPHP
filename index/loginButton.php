<li id="loginButton">
    <a class="lock" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Đăng nhập</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tenDN">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="tenDN" id="usernameLogin">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="passwordLogin">
                    </div>
                </div>
                <div class="modal-footer">
                    <label style="float:left">Chưa có tài khoản? <a href="dang-ky.php">Đăng ký</a></label>
                    <button type="submit" class="btn btn-primary" onclick="login()" >Đăng nhập</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</li>
