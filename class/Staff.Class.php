<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/config/DB.class.php');

  class Staff{
    private $staffId;
    private $staffUsername;
    private $staffPassword;
    private $staffName;
    private $staffRole;
    private $isActive;

    public function __construct($id,$user,$pass,$name,$role,$active)
    {
      $this->staffId = $id;
      $this->staffUsername = $user;
      $this->staffPassword = $pass;
      $this->staffName = $name;
      $this->staffRole = $role;
      $this->isActive = $active;
    }

    public static function login($user,$pass)
    {
      $db = new DB();
      $sql = "SELECT * FROM staff WHERE staff_username = '".$user."' and staff_password = '".$pass."'";
      $result = $db->select_to_array($sql);
      return $result;
    }
      public static function getStaffList(){

        $db= new Db();
        $sql = "SELECT * FROM staff ORDER BY staff_id ASC";
        $res=$db->select_to_array($sql);
        return $res;
      }

      public function save()
      {
        $db= new Db();
        $sql = "INSERT INTO staff (staff_id,staff_username,staff_password,staff_name,staff_role,is_active)"
              ."VALUES(null,'".$this->staffUsername."','".$this->staffPassword."','".$this->staffName."','".$this->staffRole."',b'".$this->isActive."')";
        $res=$db->query_execute_return_affected_rows($sql);
        return $res;
      }
      public function edit()
      {
        $db= new Db();
        $sql = "UPDATE staff SET staff_username = '".$this->staffUsername."', staff_password = '".$this->staffPassword."' , staff_name = '".$this->staffName."', staff_role='".$this->staffRole."' , is_active = b'".strval($this->isActive)."' WHERE staff_id = '$this->staffId'";
        $res=$db->query_execute_return_affected_rows($sql);
        return $res;
      }
      public function delete()
      {
        $db= new Db();
        $sql = "DELETE FROM staff WHERE staff_id = '$this->staffId'";
        $res = $db->query_execute_return_affected_rows($sql);
        return $res;
      }
    }
?>
