<li id="helloUser">
    <a>Xin chào, <?php if(isset($_SESSION['username']))
                        {
                          $username = $_SESSION['username'];
                          echo $username;
                        }
                ?>
    </a>
</li>
<li id= "logoutButton">
    <a class="lock" onclick="logout()" style="cursor: pointer;">Đăng Xuất</a>
</li>
