<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
    function login($username,$password)
    {
      $db = new DB();
      $sql = "SELECT username FROM user WHERE password = '".$password."'";
      $res = $db->select_to_array($sql);
      if(count($res) === 1)
      {
        $_SESSION['username'] = $res[0]['username'];
        return true;
      }else {
        return false;
      }
    }
?>
