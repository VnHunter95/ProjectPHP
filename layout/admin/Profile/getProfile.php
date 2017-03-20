<?php
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/class/Staff.Class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/login.php');


    $getProfile=Staff::getprofile($user,$pass,$name,$role);
    if( isset(($_SESSION['staff'])as $getProfile){

        echo "<tr><td>userId='".$getProfile["staff_username"]."'</td><td>userpass='".$getProfile["staff_password"]."'</td><td>NameStaff='".$getProfile["staff_name"]."'</td><td>staffrole='".$getProfile["staff_role"]."'</td><tr>";
    }else {
      echo "Khong co nhan dc id nao";
    }
  }

 ?>
