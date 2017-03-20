<?php
  session_start();
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Staff.Class.php');
  function login($user,$pass)
  {
    $id = Staff::login($user,$pass);
    if($id != false )
    {
      echo '<script> alert("Login OK !"); </script>';
      $_SESSION['staff'] = $id[0]['staff_id'];
    }else {
      echo '<script> alert("CAN\'T LOGIN !!!! !"); </script>';
    }
  }
?>
