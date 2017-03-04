<!-- File Demo Method -->
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="wrapper">
          <?php
              session_start();
              require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
              include('login.php');
              include('logout.php');
              login('toan','123');
              if(!isset($_SESSION['username']))
              {
              header("Location: ".$_SERVER['DOCUMENT_ROOT']."/giao-dien/user/method/");
              exit();
            }else {
              echo "<h3>".$_SESSION['username']."</h3>";
            }
          ?>
        </div>
    </body>
</html>
