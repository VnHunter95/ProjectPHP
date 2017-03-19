<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Supplier.Class.php');

  $list = Staff::getStaffList();
  $row =  array();
  foreach($list as $item)
  {
    $row[] = $item;
  }
  echo json_encode($row)."\n";
?>
