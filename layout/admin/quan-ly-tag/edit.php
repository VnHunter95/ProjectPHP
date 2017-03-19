<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/class/Tag.Class.php');
#code:
#    -1 - Can't edit
#    0 - Unknown
#    1 - Edit Ok

$code = '0';
if(isset($_GET['id'])&&isset($_GET['name']))
{
  $id   = $_GET['id'];
  $name = $_GET['name'];
  if(Tag::editTag($id,$name)==1)
  {
        $code = '1';
  }else {
    $code = '-1';
  }
}
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
echo '<code>'.$code.'</code>';
echo ($code=='1') ? "<id>".$id."</id><name>".$name."</name>" : "" ;
echo '</response>';
?>
