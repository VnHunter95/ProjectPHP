<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Tag.Class.php');
  function getTag(){
    $list = Tag::getTagList();
    return $list;
  }
?>
