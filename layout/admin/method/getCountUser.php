<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/User.Class.php');
  function getCountUser()
  {
    $count = User::getUserCount();
    return $count;
  }
?>
