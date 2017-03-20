<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/User.Class.php');
  function getCountUser()
  {
    $count = User::getUserCount();
    return $count;
  }
?>
