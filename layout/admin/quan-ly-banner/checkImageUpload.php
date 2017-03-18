<?php
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
?>
