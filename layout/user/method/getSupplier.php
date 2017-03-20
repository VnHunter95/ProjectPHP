<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/ProjectPHP/class/Supplier.Class.php');
  function getSupplier()
  {
    $list = Supplier::list_supplier();
    return $list;
  }
?>
