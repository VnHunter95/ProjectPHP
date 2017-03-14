<?php
  function logoutAdmin()
  {
    if(isset($_SESSION['staff']))
    {
      unset($_SESSION['staff']);
    }
  }
?>
