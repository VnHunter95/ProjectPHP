<?php
  require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
  class Customer{
    public $customer_id;
    public $customer_name;
    public $customer_phone_number;
    public $customer_address;
    public $customer_email;
    public function __construct($cus_id, $cus_name,$cus_phone,$cus_add,$cus_email){
      $this->customer_id  = $cus_id;
      $this->customer_name  = $cus_name;
      $this->customer_phone_number = $cus_phone;
      $this->customer_address = $cus_add;
      $this->customer_email = $cus_email;
    }
    public function savecus(){
      $db = new DB();
      $sql = "INSERT INTO customer (customer_name, customer_phone_number,customer_address,customer_email) values
      ('".mysqli_real_escape_string($db->connect(),$this->customer_name)."',
      '".mysqli_real_escape_string($db->connect(),$this->customer_phone_number)."',
      '".mysqli_real_escape_string($db->connect(),$this->customer_address)."',
      '".mysqli_real_escape_string($db->connect(),$this->customer_email)."')";
      $result = $db-> query_execute_return_id($sql);
      return $result;
    }
    public function delcus(){
      $db = new DB();
      $sql = "DELETE FROM customer where customer_id = '".$this->customer_id."'";
      $result = $db->query_execute($sql);
      return $result;
    }
  }

?>
