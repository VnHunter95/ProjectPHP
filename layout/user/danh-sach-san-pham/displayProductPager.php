<nav class="in">
      <ul class="pagination">
      <?php
        $redirect = strtok($_SERVER['REQUEST_URI'],"?");
        if(isset($_GET['groupid']))
        {
          $groupId=$_GET['groupid'];
          $redirect = $redirect."?groupid=".$groupId."&";
        }else if(isset($_GET['supplierid'])) {
          $suppilerId = $_GET['supplierid'];
          $redirect =$redirect."?supplierid=".$suppilerId."&";
        }else if(isset($_GET['tagid']))
        {
          $suppilerId = $_GET['tagid'];
          $redirect =$redirect."?tagid=".$suppilerId."&";
        }
        if(isset($_GET['page']))
        {
            $currentPage = $_GET['page'];
            if($currentPage==1)
            {
                  echo "<li class='disabled'><a aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
            }else {
                  $nextLink = $redirect."page=".($currentPage-1);
                  echo "\n<li> <a href='".$nextLink."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
            }
            for($i = 1 ; $i<=$pageCount; $i++)
            {
              $pageRedirect = $redirect."page=".$i;
              $class="";
              if($i+1==$currentPage)
              {
                $class="class='active'";
              }
              echo "<li><a ".$class." href='".$pageRedirect."' style='cursor: pointer;'>".$i."<span class='sr-only'></span></a></li>";
            }
            if($currentPage==$pageCount)
            {
              echo "\n<li class='disabled'> <a aria-label='Next'><span aria-hidden='true'>»</span> </a> </li>";
            }else {
              $nextLink = $redirect."page=".($currentPage+1);
              echo "\n<li> <a href='".$nextLink."' aria-label='Next'><span aria-hidden='true'>»</span> </a></li>";
            }
        }
      ?>
      </ul>
</nav>
    <!---->
