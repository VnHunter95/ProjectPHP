<?php
	if (session_status() == PHP_SESSION_NONE) {
			session_start();
	}
	if(!isset($_SESSION['staff']))
	{
		header("Location: login.php");
		exit;
	}
	if(isset($_POST['logout']))
	{
		echo '<script>alert("Logging out");</script>';
		unset($_SESSION['staff']);
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - Website Bán Hàng</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/bootstrap-table.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link href="assets/css/adminstyles.css" rel="stylesheet">
	<link href="assets/css/select2.min.css" rel="stylesheet">
	<link href="assets/css/todo.css" rel="stylesheet">

	<!--Icons-->
	<script src="assets/js/lumino.glyphs.js"></script>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/bootstrap-table.min.js"></script>
	<script src="assets/js/bootstrap-toggle.min.js"></script>
	<script src="assets/js/bootstrap-table-export.js"></script>
	<script src="assets/js/tableExport.js"></script>
	<script src="assets/js/todo.js"></script>

	<!--select2-->
	<script src="assets/js/select2.min.js"></script>
	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<form id="logout" hidden method="post" action="index.php">
		<input type="text" hidden value="1" name="logout">
	</form>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/layout/admin/index.php'?>"><span>Admin</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use>
							</svg> <?php echo $_SESSION['staff']['staff_username'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">
									<span class="glyphicon glyphicon-user"></span> Profile
								</a>
							</li>
							<li>
								<a href="javascript:{}" onclick="document.getElementById('logout').submit();">
									<span class="glyphicon glyphicon-off"></span> Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
		<!-- /.container-fluid -->
	</nav>
<?php
		include('displaySideBar.php');

?>
