<?php
      require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");

    class ProductGroup{
      private $product_group_id;
      private $product_group_name;

      public function __construct($name){
        $this->category_name = $name;
      }

      public static function list_product_group(){

        $db= new Db();
        $sql = "SELECT * FROM product_group ORDER BY product_group_name ASC";
        $res=$db->select_to_array($sql);
        return $res;
      }

    }

?>
