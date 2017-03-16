<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductImage.Class.php');
  function getProductImages($id)
  {
    $imageids = ProductImage::getImagesofProduct($id);
    if($imageids == false || count($imageids) == 0 )
    {
      return false;
    }else {
      $imageFilenames = array();
      foreach($imageids as $item)
      {
        $imageFilenames[] = ProductImage::getImageFilename($item['image_id']);
      }
      return $imageFilenames;
    }
  }
?>
