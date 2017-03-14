<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Comment.Class.php');
  function getCountComment()
  {
    $count = Comment::getCommentCountAll();
    return $count;
  }
?>
