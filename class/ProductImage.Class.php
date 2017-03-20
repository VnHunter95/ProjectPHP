<?php
  require_once($_SERVER['DOCUMENT_ROOT']."/ProjectPHP/config/DB.class.php");

  class ProductImage
  {
    private $imageId;
    private $imageFilename;

    public function __construct($filename)
    {
      $this->ImageFilename = $filename;
    }
    //Get list of image for product with $prouctId Id
    public static function get_product_images($productId)
    {
      $db = new Db();
      $sql = "SELECT image_filename FROM image i , product_image pi WHERE i.image_id = pi.image_id AND WHERE pi.product_id= '".$productId."'";
      $res = $db->select_to_array($sql);
      return $res;
    }
    //Get 1 Image for product with $productId Id
    public static function get_one_product_image($productId)
    {
      $db = new Db();
      $sql = "SELECT image_filename FROM image i , product_image pi WHERE i.image_id = pi.image_id AND pi.product_id= '".$productId."' ORDER BY pi.image_id";
      $res = $db->select_to_array($sql);
      reset($res);
      return $res[0]['image_filename'];
    }
    public static function getImagesofProduct($productId)
    {
      $db = new DB();
      $sql = "SELECT i.image_id FROM image i,product_image p_i , Product p WHERE p_i.product_id = p.product_id AND i.image_id=p_i.image_id AND p_i.product_id = ".$productId ;
      $result = $db->select_to_array($sql);
      return $result;
    }
    public static function getImageFilename($imageId)
    {
      $db = new DB();
      $sql = "SELECT image_filename from IMAGE WHERE image_id = ".$imageId;
      $result = $db->select_to_array($sql);
      reset($result);
      return $result[0]['image_filename'];
    }
  }



?>
