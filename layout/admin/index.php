HELLO ! THIS IS ADMIN INDEX.php
       THIS IS A TEST
<?php

  include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/getCountUser.php');
  include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/getCountComment.php');
  include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/getCountOrder.php');
  include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/login.php');
  include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/logoutAdmin.php');
  $count = getCountUser();
  $comment = getCountComment();
  $order = getCountOrder();
?>
</br>
THIS IS THE USER COUNT: <?php echo $count ?>
</br>

THIS IS THE COMMENT COUNT: <?php echo $comment ?>
</br>
THIS IS THE ORDER COUNT: <?php echo $order ?>
<?php
  if(!isset($_SESSION['staff']))
  {
    echo '
          </br>
          NOT LOGIN
          </br>
          RUN LOGIN METHOD WITH USER: Admin Pass: Admin
          </br>
          </br> Đã CHạy hàm login, F5 để xem id login và chạy hàm đăng xuất
        ';
    login("Admin","Admin");
  }else{
    $id = $_SESSION['staff'];
    echo 'LOGGED IN AS : ID = '.$id;
    echo '</br>CHAY METHOD LOGOUTADMIN !
          Đã chạy hàm logoutadmin();
    ';
    logoutAdmin();
  }
  ?>
