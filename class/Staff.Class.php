<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');

  class Staff{
    private $staffId;
    private $staffUsername;
    private $staffPassword;
    private $staffName;
    private $staffRole;

    public function __construct($id,$user,$pass,$name,$role)
    {
      $this->staffId = $id;
      $this->staffUsername = $user;
      $this->staffPassword = $pass;
      $this->staffName = $name;
      $this->staffRole = $role;
    }

    public static function login($user,$pass)
    {
      $db = new DB();
      $sql = "SELECT staff_id FROM staff WHERE staff_username = '".$user."' and staff_password = '".$pass."'";
      $result = $db->select_to_array($sql);
      return $result;
    }
  }

?>
