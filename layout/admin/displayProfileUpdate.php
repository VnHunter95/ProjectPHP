<?php
include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/login.php');
include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/logoutAdmin.php');
// include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/Profile/getProfile.php');
// include($_SERVER['DOCUMENT_ROOT'].'/layout/admin/Profile/getUpdateProfile.php');
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/class/Staff.Class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/layout/admin/method/login.php');
 ?>
  <?php include('header.php'); ?>



    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a>
                </li>
                <li class="active">Profile </li>
            </ol>
        </div>

<?php



  $getProfile=Staff::getprofile($user,$pass,$name,$role);
  if(isset(($_SESSION['staff'])=$getProfile){
    if(isset(($_SESSION['btn btn-Submit'])))
    $password =$_POST['password'];
    $staff_name=$_POST['staff_name'];
}
   $updateProfile=Staff::savestaff($getProfile['staff_name'],$password,$staff_name,$getProfile['staff_role']);
   $result=$updateProfile->save();
  }
?>

            <!--thêm sp-->
      <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-default">
           <div class="panel-body">
                 <form>
                 <div class="form-group">
                <label for="staff_username"> UserName :</label>
                   <input type="text" class="form-control id="staff_username" disabled="staff_username">"
                       </div>
                         <div class="form-group">
                           <label for="password"> Password :</label      >
                          <input rows="8" class="form-control" id="password">
                            </div>
                           <div class="form-group">
                             <label for="staff_name">Staff Name:</label>
                              <input type="text" class="form-control" id="staff_name">
                          </div>
                           <div class="form-group">
                             <label for="staff_role">Staff Role:</label>
                             <input type="text" class="form-control" id="staffRole" disabled="staff_ro">
                             </div>
                              <button type="submit" class="btn btn-Submit" style="float: right">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
    </div>
</body>

</html>
