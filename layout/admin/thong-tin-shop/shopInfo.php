<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/StoreInfo.Class.php');

  $list = StoreInfo::getStoreInfo();
  echo json_encode($list)."\n";
?>
