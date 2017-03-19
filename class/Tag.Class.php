<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');

  class Tag
  {
    private $tagId;
    private $tagName;

    public function __construct($id,$name)
    {
        $this->tagId = $id;
        $this->tagName = $name;
    }

    public static function getTagList()
    {
      $db = new DB();
      $sql = "SELECT * FROM TAG";
      $result = $db->select_to_array($sql);
      return $result;
    }
    //Get list of tag id belong to a product
    public static function getTagOfProduct($id)
    {
      $db = new DB();
      $sql = "SELECT pt.tag_id FROM TAG t,Product_Tag pt , Product p WHERE pt.product_id = p.product_id AND t.tag_id=pt.tag_id AND pt.product_id = ".$id ;
      $result = $db->select_to_array($sql);
      return $result;
    }
    //return tag name by ID
    public static function getTagName($id)
    {
      $db = new DB();
      $sql = "SELECT tag_name from TAG WHERE tag_id = ".$id;
      $result = $db->select_to_array($sql);
      reset($result);
      return $result[0]['tag_name'];
    }

    public function save()
    {
      $db = new DB();
      $sql = "INSERT INTO tag(tag_id,tag_name) VALUES(null,'".$this->tagName."')";
      $result = $db->query_execute_return_affected_rows($sql);
      return $result;
    }
    public function delete()
    {
      $db = new DB();
      $sql = "DELETE FROM tag WHERE tag_id = '".$this->tagId."'";
      $result = $db->query_execute_return_affected_rows($sql);
      return $result;
    }
    public static function editTag($id,$name)
    {
      $db = new DB();
      $sql = "UPDATE tag SET tag_name = '".$name."' WHERE tag_id = '".$id."'";
      $result = $db->query_execute_return_affected_rows($sql);
      return $result;
    }
  }

 ?>
