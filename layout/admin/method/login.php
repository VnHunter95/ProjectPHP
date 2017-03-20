<?php
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Staff.Class.php');
  function login($user,$pass)
  {
    $id = Staff::login($user,$pass);
    if($id != false )
    {
      $_SESSION['staff'] = $id[0];
      return true;
    }else {
      return false;
    }
  }
?>
