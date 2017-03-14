<?php
      session_start();
      if(isset($_SESSION['username']))
      {
        include($_SERVER['DOCUMENT_ROOT'].'/index/logoutButton.php');
      }else {
        include($_SERVER['DOCUMENT_ROOT'].'/index/loginButton.php');
      }
?>
