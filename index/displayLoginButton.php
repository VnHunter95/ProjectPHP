<?php
      session_start();
      if(isset($_SESSION['username']))
      {
        include($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/index/logoutButton.php');
      }else {
        include($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/index/loginButton.php');
      }
?>
