<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/config/DB.class.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/class/Product.Class.php");
    /**Search products, search type depend on $type
    @params $type  - Search Type:
                            1 - by Product Name
                            2 - by Group Name
                            3 - by Suppiler Name
                            4 - by Tag Name
                            5 - by Product description
                            0 - All of the above
    @params $input -  input text, return products will contain this text
    @return Array if found products
    @return false if notthing is found
    */
    function searchProduct($type,$input)
    {
      $products;
      switch($type)
      {
          case 0:
                $products=Product::search($input);
            break;
          case 1:
                $products=Product::searchByName($input);
            break;
          case 2:
                $products=Product::searchByGroup($input);
            break;
          case 3:
                $products=Product::searchBySupplier($input);
            break;
          case 4:
                $products=Product::searchByTag($input);
            break;
          case 5: $products=Product::searchByDescription($input);
          break;
          default:
            break;
      }
      if(!empty($products))
      {
          return $products;
      }else {
        return false;
      }
    }
?>
