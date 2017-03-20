<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/config/DB.class.php');

 class StoreInfo
 {
   private $storeName;
   private $storeAdressOne;
   private $storePhoneOne;
   private $storePhoneTwo;
   private $storeEmail;
   private $storeFacebook;

   function __construct($name,$adr,$p1,$p2,$email,$fb)
   {
     $this->storeName = $name;
     $this->storeAdressOne = $adr;
     $this->storePhoneOne = $p1;
     $this->storePhoneTwo = $p2;
     $this->storeEmail = $email;
     $this->storeFacebook = $fb;
   }

   public static function getStoreInfo()
   {
     $db = new DB();
     $sql = "SELECT * FROM store_infomation LIMIT 1 ";
     $result=$db->select_to_array($sql);
     if($result!=false)
     {
       reset($result);
     }
     return $result;
   }

   public function getStoreName()
   {
     $db = new DB();
     $sql = "SELECT * FROM store_infomation LIMIT 1 ";
     $result=$db->select_to_array($sql);
     if($result!=false)
     {
       reset($result);
     }
     return $result[0]['store_name'];
   }
   public function edit()
   {
     $oldname = $this->getStoreName();
     if($oldname == false)
     {
       return false;
     }
     $db = new DB();
     $sql = "UPDATE `store_infomation` SET `store_name` = '".$this->storeName."' , `store_address` = '".$this->storeAdressOne."' , `store_phone_number_1` = '".$this->storePhoneOne."' , `store_phone_number_2` = '".$this->storePhoneTwo."', `store_email` = '".$this->storeEmail."', `store_facebook` = '".$this->storeFacebook."' WHERE `store_infomation`.`store_name` = '".$oldname."'";
     $result = $db->query_execute_return_affected_rows($sql);
     return $result;
   }
 }

?>
