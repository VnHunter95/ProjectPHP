<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
    function login($username,$password)
    {
      $db = new DB();
      $sql = "SELECT username, is_banned FROM user WHERE username = '".$username."' AND password = '".$password."'";
      $res = $db->select_to_array($sql);
      if(count($res) === 1)
      {
        if($res[0]['is_banned'] == '1')
        {
          return 3;
        }
        $_SESSION['username'] = $res[0]['username'];
        return 1;
      }else {
        return 2;
      }
    }
?>
