<?php
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/class/Staff.Class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/login.php');


  $getProfile=Staff::getprofile($user,$pass,$name,$role);
  if(isset(($_SESSION['staff'])=$getProfile){
    
    $pass = $_POST['txtstaffpassword'];
    $name = $_POST['txtstaffname'];

    $updateProfile=Staff::updateProfile($user,$pass,$name,$role);
  }
?>
