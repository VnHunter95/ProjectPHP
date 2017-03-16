<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');


  class User{

    private $userId;
    private $username;
    private $password;
    private $customerId;

    public function __construct($id,$user,$pass,$customerId)
    {
      $this->userId=$id;
      $this->username=$user;
      $this->pass=$password;
      $this->customerId=$customerId;
    }

    public static function getUserCount()
    {
      $db = new DB();
      $sql = "SELECT COUNT(*) FROM user as Count";
      $result = $db->query_execute($sql);
      $count = $result->fetch_row();
      return $count[0];
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
