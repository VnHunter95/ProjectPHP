<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Tag.Class.php');

  $list = Tag::getTagList();
  $row =  array();
  foreach($list as $item)
  {
    $row[] = $item;
  }
  echo json_encode($row)."\n";
?>
