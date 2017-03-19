<?php
      require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");

    class Supplier{
      private $supplier_id;
      private $supplier_name;
      private $supplier_address;
      private $supplier_phone_number;
      private $is_active;


      public function __construct($id,$name,$address,$phone,$active){
        $this->supplier_id = $id;
        $this->supplier_name = $name;
        $this->supplier_address = $address;
        $this->supplier_phone_number = $phone;
        $this->is_active = $active;
      }

      public static function list_supplier(){

        $db= new Db();
        $sql = "SELECT * FROM supplier ORDER BY supplier_name ASC";
        $res=$db->select_to_array($sql);
        return $res;
      }

      public function save()
      {
        $db= new Db();
        $sql = "INSERT INTO supplier (supplier_id,supplier_name,supplier_address,supplier_phone_number,is_active)"
              ."VALUES(null,'".$this->supplier_name."','".$this->supplier_address."','".$this->supplier_phone_number."', b'".$this->is_active."')";
        $res=$db->query_execute_return_affected_rows($sql);
        return $res;
      }
      public function edit()
      {
        $db= new Db();
        $sql = "UPDATE supplier SET supplier_name = '".$this->supplier_name."', supplier_address = '".$this->supplier_address."' , supplier_phone_number = '".$this->supplier_phone_number."', is_active = b'$this->is_active' WHERE supplier_id = '$this->supplier_id'";
        $res=$db->query_execute_return_affected_rows($sql);
        return $res;
      }
      public function delete()
      {
        $db= new Db();
        $sql = "DELETE FROM supplier WHERE supplier_id = '$this->supplier_id'";
        $res = $db->query_execute_return_affected_rows($sql);
        return $res;
      }
    }

?>
