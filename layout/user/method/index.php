<!--File DEMO 3 method-->
<!DOCTYPE html>
<html lang='vi'>
  <head>
    <title>Demo 3 method</title>
  </head>
  <body>
    <?php
      include('getProductGroup.php');
      include('getTag.php');
      include('getSupplier.php');

      $tags = getTag();
      $productGroups= getProductGroup();
      $suppliers= getSupplier();

      echo '<h2> TAGS ! </h2>';
      foreach($tags as $item)
      {
        echo '</br><p>'.$item['tag_name'].'</p>';
      }
      echo '</br></br><h2> Groups ! </h2>';
      foreach($productGroups as $item)
      {
        echo '</br><p>'.$item['product_group_name'].'</p>';
      }

      echo '</br></br><h2> SUPPLIERs ! </h2>';
      foreach($suppliers as $item)
      {
        echo '</br><p>'.$item['supplier_name'].'</p>';
      }
    ?>
  </body>
</html>
