<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');

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
     $this->$storeAdressOne = $adr;
     $this->$storePhoneOne = $p1;
     $this->$storePhoneTwo = $p2;
     $this->$storeEmail = $email;
     $this->$storeFacebook = $fb;
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
 }

?>
