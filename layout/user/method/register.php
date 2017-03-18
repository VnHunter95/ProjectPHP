<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Customer.Class.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/User.Class.php');
  //Nhập
  $user_name = $_POST['txtusername'];
  $user_pass = $_POST['txtpassword'];
  $cus_name = $_POST['txtcusname'];
  $cus_phone = $_POST['txtcusphone'];
  $cus_addess = $_POST['txtcusadd'];
  $cus_email = $_POST['txtcusemail'];
  // Lưu thông tin
  $cusinfo = new Customer( null, $cus_name, $cus_phone,$cus_addess,$cus_email);
  $result1 = $cusinfo->savecus();

//  $userinfo = new User(null,$user_name, $user_pass, $result1);
//  $result2 = $userinfo->saveuser();

  // Test
  $cusinfo->customer_id= $result1;
  if($result1 == false){
    echo "<h1>Đã có lỗi xảy ra với thông tin khách hàng.</h1>";
  }else
  {
    $userinfo = new User(null,$user_name, $user_pass, $result1);
    $result2 = $userinfo->saveuser();
    //HELLO THIS IS ANOTHER PERSON LINE !
    if($result2 == false)
    {
      echo "<h1>Tên đăng nhập đã được sử dụng.</h1>";
      $result1= $cusinfo->delcus();
    }
    else {
      echo "Đăng ký thành công!";
    }
  }
?>
