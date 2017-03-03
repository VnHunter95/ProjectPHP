<?php
      require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");

    class Product{
      private $productId;
      private $supplierId;
      private $productGroupId;
      private $productName;
      private $description;
      private $price;
      private $numberRemain;
      private $numberSold;
      private $updateDate;


      public function __construct($supId,$groupId,$name,$desc,$productPrice,$remain,$sold,$update){
        $this->suppilerId=$supId;
        $this->productGroupId=$groupId;
        $this->productName=$name;
        $this->description=$desc;
        $this->price=$productPrice;
        $this->numberRemain=$remain;
        $this->numberSold=$sold;
        $this->updateDate=$update;
      }
      //Get Product list
      public static function list_product(){
        $db= new Db();
        $sql = "SELECT * FROM product";
        $res=$db->select_to_array($sql);
        return $res;
      }
      //Get Product list by group
      public static function list_product_by_group($groupid){
        $db= new Db();
        $sql = "SELECT * FROM product WHERE product_group_id = '".$groupid."' ORDER BY product_name";
        $res=$db->select_to_array($sql);
        return $res;
      }
      //Get Product List by Supplier
      public static function list_product_by_supplier($supid)
      {
        $db= new Db();
        $sql = "SELECT * FROM product WHERE product_supplier_id = '".$supid."' ORDER BY product_name";
        $res=$db->select_to_array($sql);
        return $res;
      }
      //Get $quantity New Products
      public static function list_new_product($quantity)
      {
        $db= new Db();
        $sql = "SELECT * FROM product ORDER BY update_date DESC ";
        if($quantity!=0)
        {
          $sql = $sql." LIMIT ".$quantity."";
        }
        $res=$db->select_to_array($sql);
        return $res;
      }
      //Get $quantity Popular Products
      public static function list_popular_product($quantity)
      {
        $db= new Db();
        $sql = "SELECT * FROM product ORDER BY number_sold ";
        if($quantity!=0)
        {
          $sql =$sql." LIMIT ".$quantity."";
        }
        $res=$db->select_to_array($sql);
        return $res;
      }
    }

?>
