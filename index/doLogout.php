<?php
  session_start();
  $responseCode = 69;
  if(isset($_SESSION['username']))
  {
    unset($_SESSION['username']);
    $responseCode = 0;
  }
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
  echo '<response>';
  echo  $responseCode;
  echo '</response>';
?>
