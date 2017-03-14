<?php
      session_start();
      if(isset($_SESSION['username']))
      {
        echo '<script> alert("Đã Đăng Nhập !"); </script>';
        include('index/logoutButton.php');
      }else {
        include('index/loginButton.php');
      }
?>
