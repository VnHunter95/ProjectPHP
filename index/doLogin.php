<?php
  session_start();
  include($_SERVER['DOCUMENT_ROOT']."/ProjectPHP/layout/user/method/login.php");
  $responseCode;
  if(isset($_GET['username'])&&isset($_GET['password']))
  {
    $username = $_GET['username'];
    $pass = $_GET['password'];
    $code = login($username,$pass);
    $responseCode = $code;
  } else
  {
    $responseCode = 0;
  }
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
  echo '<response>';
  echo  $responseCode;
  echo '</response>';
?>
