<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');
  class Comment{

    private $commentId;
    private $userId;
    private $productId;
    private $commentText;
    private $commentTime;

    public function __construct($id,$user,$product,$text,$time)
    {
      $this->commentId=$id;
      $this->userId=$user;
      $this->productId=$product;
      $this->commentText=$text;
      $this->commentTime=$time;
    }

    public static function getCommentCountAll()
    {
      $db = new DB();
      $sql = "SELECT COUNT(*) FROM comment as Count";
      $result = $db->query_execute($sql);
      $count = $result->fetch_row();
      return $count[0];
    }

  }

?>
