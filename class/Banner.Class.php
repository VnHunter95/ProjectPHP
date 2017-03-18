<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
    class Banner
    {
        private $fileName;

        public function __construct($name)
        {
          $this->fileName=$name;
        }
        //Get banner filename list
        public static function list_banner()
        {
          $db = new Db();
          $sql = "SELECT * FROM Banner";
          $res=$db->select_to_array($sql);
          return $res;
        }

        public function save()
        {
          $db = new Db();
          $sql = "INSERT INTO Banner VALUES('".$this->fileName."')";
          $res=$db->query_execute($sql);
          return $res;
        }
    }
?>
