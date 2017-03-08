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
  }

 ?>
