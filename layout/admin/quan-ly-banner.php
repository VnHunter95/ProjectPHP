<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Banner.Class.php');
  $banners = Banner::list_banner();
  if(isset($_POST["uploadSubmit"]))
  {
    $target_dir = $_SERVER['DOCUMENT_ROOT'].'/banner/';
    $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    ///
    $picture = basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $uploadErrorCode;
    $iserror = false;
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadErrorCode=0;
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      //"Sorry, file already exists.";
        $uploadErrorCode=1;
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5 * 1024 * 1024) {
        // "Sorry, your file is too large.";
        $uploadErrorCode=2;
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        // "Sorry, only JPG, JPEG & PNG files are allowed.";
        $uploadErrorCode=3;
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
              header("Location: quan-ly-banner.php?uploadfail&e=".$uploadErrorCode);
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
            $newBanner = new Banner($picture);
            $result = $newBanner->save();
            if(!$result)
            {
              header("Location: quan-ly-banner.php?fail");
            }
            else {
              header("Location: quan-ly-banner.php?inserted");
            }
        } else {
                header("Location: quan-ly-banner.php?uploadfail&e=4");
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
  				<li class="active">Icons</li>
  			</ol>
  </div><!--/.row-->

  <div class="row">
  			<div class="col-lg-12">
  				<h1 class="page-header">Tables</h1>
  			</div>
  </div><!--/.row-->

  <div class="row">
  			<div class="col-lg-12">
  				<div class="panel panel-default">
  					<div class="panel-heading">Danh Sách Banner</div>
  					<div class="panel-body">
  						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
  						    <thead>
  						    <tr>
  						        <th data-field="name" data-sortable="true">Filename</th>
  						        <th data-field="img">Hình Ảnh</th>
                      <th>Thao Tác</th>
  						    </tr>
  						    </thead>
                <tbody>

                     <?php
                        if($banners!=false)
                        {
                          foreach($banners as $item)
                          {
                            echo '<tr>
                                    <td>'.$item['banner_image_filename'].'</td>
                                    <td><img src="/banner/'.$item['banner_image_filename'].'" class="img-responsive" style="width: 50%;"/></td>
                                    <td><button class="btn btn-primary" type="button">Xóa</button></td>
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
      <div class="row">
        <div class="col-lg-12 col-lg-offset-1">
          <h3 class="page-header">Upload Banner</h3>
          <form action="quan-ly-banner.php" method="post" style="margin-bottom: 20px" enctype="multipart/form-data">
            <label>Chọn File Hình: </label><input type="file" name="fileToUpload"  id="fileToUpload" required/>
            </br>
            <input type="submit" name="uploadSubmit" value="Tải Lên" accept=".jpg,.png,.jpeg">
            <?php
              echo isset($Error) ? $Error : "";
            ?>
          </form>
          </br></br>
        </div>
      </div>

</div>
    <style>
      .table > tbody > tr > td {
      vertical-align: middle;
    }
    </style>
<?php include('footer.php');
