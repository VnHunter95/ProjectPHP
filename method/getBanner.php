<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/class/Banner.Class.php");
    function getBanner()
    {
      $list = Banner::list_banner();
      return $list;
    }
?>
