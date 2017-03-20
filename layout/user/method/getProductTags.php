<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Tag.Class.php');
  function getProductTags($id)
  {
    $tagIds = Tag::getTagOfProduct($id);
    if($tagIds == false || count($tagIds) == 0 )
    {
      return false;
    }else {
      $tagNames = array();
      foreach($tagIds as $item)
      {
        $tagNames[] = $item;
      }
      return $tagNames;
    }
  }
?>
