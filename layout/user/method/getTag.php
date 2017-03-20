<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Tag.Class.php');
  function getTag(){
    $list = Tag::getTagList();
    return $list;
  }
?>
