<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');


  class User{

    private $userId;
    private $username;
    private $password;
    private $customerId;

    public function __construct($id,$user,$pass,$cus_id)
    {
      $this->userId=$id;
      $this->username=$user;
      $this->password=$pass;
      $this->customerId=$cus_id;
    }

    public static function getUserCount()
    {
      $db = new DB();
      $sql = "SELECT COUNT(*) FROM user as Count";
      $result = $db->query_execute($sql);
      $count = $result->fetch_row();
      return $count[0];
    }

    public function saveuser(){
      $db = new DB();
      $sql = "INSERT INTO user (username, password, customer_id) values
      ('".mysqli_real_escape_string($db->connect(),$this->username)."',
      '".mysqli_real_escape_string($db->connect(),$this->password)."',
      '".mysqli_real_escape_string($db->connect(),$this->customerId)."')";
      $result = $db->query_execute($sql);
    }

    public static function getCusomerByUser($username)
    {
      $db = new DB();
        $sql = "SELECT c.* FROM customer c , user u WHERE c.customer_id = u.customer_id AND u.username = '".$username."'";
      $result = $db->select_to_array($sql);

      return $result;
    }
  }

?>
