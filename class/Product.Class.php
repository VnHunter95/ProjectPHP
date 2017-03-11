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
      //Get Product list by group by pages
      public static function list_product_by_group($groupId,$page,$productPerPage){
        $db=new DB();
        $startIndex = ($productPerPage*($page-1));
        $sql = "SELECT * FROM product WHERE product_group_id = '".$groupId."' ORDER BY product_name LIMIT ".$startIndex.",".$productPerPage."";
        $res=$db->select_to_array($sql);
        return $res;
      }
      //Get Product List by Supplier
      public static function list_product_by_supplier($supplierId,$page,$productPerPage)
      {
        $db= new Db();
        $startIndex = ($productPerPage*($page-1));
        $sql = "SELECT * FROM product WHERE supplier_id = '".$supplierId."' ORDER BY product_name LIMIT ".$startIndex.",".$productPerPage."";
        $res=$db->select_to_array($sql);
        return $res;
      }
      //Get Product List by Tag
      public static function list_product_by_tag($tagId,$page,$productPerPage)
      {
        $db= new Db();
        $startIndex = ($productPerPage*($page-1));
        $sql = "SELECT p.* FROM product p , tag t , product_tag pt "
              ." WHERE p.product_id = pt.product_id AND t.tag_id = pt.tag_id AND t.tag_id = ".$tagId
              ." ORDER BY product_name LIMIT ".$startIndex.",".$productPerPage."";
        $res=$db->select_to_array($sql);
        return $res;
      }
      // get list new product with page
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
      #Search product, return list of product that producr name,description,suppiler name,group name match $input,
      #if not found search product by tag
      public static function search($input)
      {
        $db= new Db();
        $sql = "SELECT DISTINCT p.product_name ,p.product_id ,p.supplier_id ,p.product_group_id ,p.description ,p.price ,p.number_remain ,p.number_sold ,p.update_date"
              ." FROM product p, product_group pg, supplier s"
              ." WHERE p.product_group_id = pg.product_group_id AND p.supplier_id = s.supplier_id"
              ." AND p.product_name like '%".$input."%'"
              ." OR p.description like '%".$input."%'"
              ." OR pg.product_group_name like '%".$input."%'"
              ." OR s.supplier_name like '%".$input."%'"
              ." ORDER BY product_name";
        $res=$db->select_to_array($sql);
        if($res==false)
        {
          $res=Product::searchByTag($input);
        }
        return $res;
      }
      #Search product that Tag Name conntain $input
      public static function searchByTag($input)
      {
        $db= new Db();
        $sql =  " SELECT p.* "
                ." FROM product_tag pt,product p , tag t"
                ." WHERE pt.product_id = p.product_id AND t.tag_id = pt.tag_id"
                ." AND t.tag_name like '%".$input."%'";
        $res=$db->select_to_array($sql);
        return $res;
      }
      #search product that Group Name contain $input
      public static function searchByGroup($input)
      {
        $db= new Db();
        $sql =  "SELECT p.*"
                ." FROM product p , product_group pg"
                ." WHERE p.product_group_id = pg.product_group_id"
                ." AND pg.product_group_name like '%".$input."%'";
        $res=$db->select_to_array($sql);
        return $res;
      }
      #search product that Suppiler Name contain $input
      public static function searchBySupplier($input)
      {
        $db= new Db();
        $sql =  "SELECT p.*"
                ." FROM product p , supplier s"
                ." WHERE p.supplier_id = s.supplier_id"
                ." AND s.supplier_name like '%".$input."%'";
        $res=$db->select_to_array($sql);
        return $res;
      }
      #search product that product name contain $input
      public static function searchByName($input)
      {
        $db= new Db();
        $sql =   " SELECT * "
                ." FROM product"
                ." WHERE product_name like '%".$input."%'";
        $res=$db->select_to_array($sql);
        return $res;
      }
      #search product that product description contain $input
      public static function searchByDescription($input)
      {
        $db= new Db();
        $sql =  "SELECT *"
                ." FROM product"
                ." WHERE description like '%".$input."%'";
        $res=$db->select_to_array($sql);
        return $res;
      }
      #Get product depend on number of product per page
      # @params $limit - number of product that return
      public static function listProductWithLimit($limit)
      {
        $db= new Db();
        $sql = "SELECT * FROM product LIMIT ".$limit;
        $res=$db->select_to_array($sql);
        return $res;
      }
      #Calculate page count of product by group and number of product per page
      # @pagrams $groupId
      # @pagrams $productPerPage
      # @return  $pageCount - number of page
      public static function getProductByGroupPageCount($groupId,$productPerPage)
      {
        $db = new DB();
        $res = $db->query_execute("SELECT COUNT(*) as rowCount FROM product WHERE product_group_id = '".$groupId."'");
        $rowCount = $res->fetch_row();
        $pageCount =  ($rowCount[0] / $productPerPage) + 1;
        $pageCount  = intval($pageCount);
        return $pageCount;
      }
      #Calculate page count of product by supplier and number of product per page
      # @pagrams $supplierId
      # @pagrams $productPerPage
      # @return  $pageCount - number of page
      public static function getProductBySupplierPageCount($supplierId,$productPerPage)
      {
        $db = new DB();
        $res = $db->query_execute("SELECT COUNT(*) as rowCount FROM product WHERE supplier_id = '".$supplierId."'");
        $rowCount = $res->fetch_row();
        $pageCount =  ( $rowCount[0] / $productPerPage ) + 1;
        $pageCount = intval($pageCount);
        return $pageCount;
      }
      #Calculate page count of product by supplier and number of product per page
      # @pagrams $supplierId
      # @pagrams $productPerPage
      # @return  $pageCount - number of page
      public static function getProductByTagPageCount($tagId,$productPerPage)
      {
        $db = new DB();
        $sql = "SELECT COUNT(*) FROM product p , tag t , product_tag pt "
              ." WHERE p.product_id = pt.product_id AND t.tag_id = pt.tag_id AND t.tag_id = ".$tagId;
        $res = $db->query_execute($sql);
        $rowCount = $res->fetch_row();
        $pageCount =  ( $rowCount[0] / $productPerPage ) + 1;
        $pageCount = intval($pageCount);
        return $pageCount;
      }
      public static function getProductById($id)
      {
        $db = new DB();
        $sql = "SELECT * FROM product p"
              ." WHERE p.product_id =".$id;
        $res = $db->select_to_array($sql);
        if($res != false)
        {
          reset($res);
        }
        return $res;
      }
    }

?>
