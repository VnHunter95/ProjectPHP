<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Tag.Class.php');
  function getProductTag($id)
  {
    $tagIds = Tag::getTagOfProduct($id);
    if($tagIds == false || count($tagIds) == 0 )
    {
      return false;
    }else {
      $tagNames = array();
      foreach($tagIds as $item)
      {
        $tagNames[] = Tag::getTagName($item['tag_id']);
      }
      return $tagNames;
    }
  }
?>
