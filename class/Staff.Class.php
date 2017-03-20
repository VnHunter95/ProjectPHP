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

    public static function login($user,$pass,$name,$role)
    {
      $db = new Db();
      $sql = "SELECT staff_id FROM staff WHERE staff_username = '".$user."' and staff_password = '".$pass."' and staff_name='".$name."' and staff_role='".$role."'";
      $result = $db->select_to_array($sql);
      return $result;
    }
    public static function getprofile($user,$pass,$name,$role){
      $db = new Db();
        $sql = "SELECT staff_username,staff_password,staff_name,staff_role FROM staff WHERE staff_username ='".$user."'";
      $result = $db->select_to_array($sql);
      return $result;
    }
    public static function savestaff($user,$pass,$name,$role)
    {
      $db =new Db();
      $sql= "UPDATE staff_password ,staff_name SET staff_password='".$pass."'and staff_name='".$name."  WHERE staff_username ='".$user."'staff_role='".$role."'";
      $result =$db->select_to_array($sql);
      return $result;
    }
    
}

?>
