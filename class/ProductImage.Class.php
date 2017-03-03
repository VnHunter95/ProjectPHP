<?php
  require_once($_SERVER['DOCUMENT_ROOT']."/config/db.class.php");

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
      $sql = "SELECT image_filename FROM image i , product_image pi WHERE i.image_id = pi.image_id AND pi.product_id= '".$productId."'";
      $res = $db->select_to_array($sql);
      reset($res);
      return $res[0]['image_filename'];
    }
  }



?>
