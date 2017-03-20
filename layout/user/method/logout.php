<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ProjectPHP/config/DB.class.php");
    function logout()
    {
      if(isset($_SESSION['username']))
      {
        unset($_SESSION['username']);
        return true;
      }else {
        return false;
      }
    }
?>
