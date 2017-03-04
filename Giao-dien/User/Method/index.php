<!-- File Demo Method -->
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="wrapper">
          <?php
            include('searchProduct.php');
            echo "<br><br>";
            echo "<h1>Demo 1 - Search Theo Tên - searchProduct(1,'Love')";
            $list = searchProduct(1,'Love');
            foreach($list as $item)
            {
                echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
            }
            unset($list);
            echo "<br><br>";
            echo "<h1>Demo 2 - Search Theo Group - searchProduct(2,'Figur')";
            $list = searchProduct(2,'Figur');
            foreach($list as $item)
            {
                echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
            }

            unset($list);
            echo "<br><br>";
            echo "<h1>Demo 3 - Search Theo Supplier - searchProduct(3,'Good Smi')";
            $list = searchProduct(3,'Good Smi');
            if(empty($list))
            {
              echo "<h3> NOT FOUND ! </h3>";
            }else{
              foreach($list as $item)
              {
                  echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
              }
            }
            unset($list);
            echo "<br><br>";
            echo "<h1>Demo 3.5 - Search Theo Supplier - searchProduct(3,'GoodSmi')";
            $list = searchProduct(3,'GoodSmi');
            if(empty($list))
            {
              echo "<h3> NOT FOUND ! </h3>";
            }else{
              foreach($list as $item)
              {
                  echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
              }
            }
            unset($list);
            echo "<br><br>";
            echo "<h1>Demo 4 - Search Theo Tag - searchProduct(4,'Sword Art')";
            $list = searchProduct(4,'Sword Art');
            foreach($list as $item)
            {
                echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
            }

            unset($list);
            echo "<br><br>";
            echo "<h1>Demo 5 - Search Theo Description - searchProduct(5,'Kiroto và Asuna')";
            $list = searchProduct(5,'Kiroto và Asuna');
            foreach($list as $item)
            {
                echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
            }

            unset($list);
            echo "<br><br>";
            echo "<h1>Demo 6 - Search All - searchProduct(0,'SAO')";
            $list = searchProduct(0,'SAO');
            foreach($list as $item)
            {
                echo "<h3>".$item['product_id']."</h3><br><h2>".$item['product_name']."</h2>";
            }
          ?>
        </div>
    </body>
</html>
