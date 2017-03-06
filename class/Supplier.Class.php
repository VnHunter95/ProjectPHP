<?php
      require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");

    class Supplier{
      private $suppiler_id;
      private $suppiler_name;
      private $suppiler_address;
      private $suppiler_phone_number;


      public function __construct($name,$address,$phone){
        $this->$suppiler_id = $name;
        $this->$suppiler_address = $address;
        $this->$suppiler_phone_number = $phone;
      }

      public static function list_supplier(){

        $db= new Db();
        $sql = "SELECT * FROM supplier ORDER BY supplier_name ASC";
        $res=$db->select_to_array($sql);
        return $res;
      }

    }

?>
