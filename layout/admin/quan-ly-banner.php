<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Banner.Class.php');
  include('quan-ly-banner/checkImageUpload.php');
  if(isset($_POST['subRemove']))
  {
    $filename = $_POST['subRemove'];
    $banner   = new Banner($filename);
    $file     = $_SERVER['DOCUMENT_ROOT'].'/banner/'.$filename;
    if($banner->del() == 0)
    {
      echo '<script>alert("Không thể xóa dử liệu '.$filename.' trong cơ sở dữ liệu");</script>';
    }else {
      if(is_writable($file))
      {
        unlink($file);
        echo '<script>alert("Xóa Banner Thành Công !");</script>';
      }else {
        echo '<script>alert("Không tìm thấy file '.$filename.' trong thư mục banner");</script>';
      }
    }
  }
      echo isset($_GET["inserted"]) ? "<script>alert('Thêm Banner Thành Công')</script>" : "";
      echo isset($_GET["failure"]) ? "<script>alert('Thêm Banner Thất Bại')</script>" : "";
      function getErrorCode ()
      {
        if(isset($_GET["uploadfail"])&&isset($_GET["e"]))
        {
            $errorMsg;
            switch($_GET["e"])
            {
              case 0: $errorMsg= "Error code 0";
                    break;
              case 1: $errorMsg= "Sorry, file already exists.";
                    break;
              case 2: $errorMsg= "Sorry, only JPG, JPEG & PNG files are allowed.";
                    break;
              case 3: $errorMsg= "Sorry, only JPG, JPEG & PNG files are allowed.";
                    break;
              default: $errorMsg= "Unknow error code ";
              break;
            }
            return $errorMsg;
        }
        return null;
    }
    $Error = getErrorCode();

?>
<?php include('header.php'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
  			<ol class="breadcrumb">
  				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  				<li class="active">Banner</li>
  			</ol>
  </div><!--/.row-->

  <div class="row">
  			<div class="col-lg-12">
  				<h1 class="page-header">Banner</h1>
  			</div>
  </div><!--/.row-->

  <div class="row">
  			<div class="col-lg-12">
  				<div class="panel panel-default">
  					<div class="panel-heading">Upload Banner</div>
            
  					<div class="panel-body">
          <form action="quan-ly-banner.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="imageUpload">Chọn File Hình: </label>
              <input class="form-control" type="file" id="imageUpload" name="fileToUpload" accept="image/*" id="fileToUpload" required/>
            </div>
            <input type="submit" class="btn btn-info" name="uploadSubmit" value="Tải Lên" accept="image/*">
            <?php
              echo isset($Error) ? $Error : "";
            ?>
          </form>
          </br></br>
        </div>
      </div>
    </div>
  </div>  
  <div class="row">
  			<div class="col-lg-12">
  				<div class="panel panel-default">
  					<div class="panel-heading">Danh Sách Banner</div>
  					<div class="panel-body">
  						<table data-toggle="table" data-buttons-class="info" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
  						    <thead>
  						    <tr>
  						        <th data-field="name" data-sortable="true">Filename</th>
  						        <th data-field="img">Hình Ảnh</th>
                      <th>Thao Tác</th>
  						    </tr>
  						    </thead>
                <tbody>
                     <?php
                       $banners = Banner::list_banner();
                        if($banners!=false)
                        {
                          foreach($banners as $item)
                          {
                            echo '<tr>
                                    <td>'.$item['banner_image_filename'].'</td>
                                    <td><img src="/banner/'.$item['banner_image_filename'].'" class="img-responsive" style="width: 50%;"/></td>
                                    <td><form action="quan-ly-banner.php" method="POST"><button class="btn btn-danger" name="subRemove" type="submit" value="'.$item['banner_image_filename'].'">Xóa</button></form></td>
                                  </tr>';
                          }
                        }
                     ?>
                </tbody>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div><!--/.row-->


</div>
    <style>
      .table > tbody > tr > td {
      vertical-align: middle;
    }
    </style>
</body>
</html>
