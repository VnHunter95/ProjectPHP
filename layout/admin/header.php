<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard - Website Bán Hàng</title>
	<link href="/shared/css/bootstrap.min.css" rel="stylesheet">
	<link href="/shared/css/datepicker3.css" rel="stylesheet">
	<link href="/shared/css/bootstrap-table.min.css" rel="stylesheet">
	<link href="/shared/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link href="/shared/css/adminstyles.css" rel="stylesheet">
	<link href="/shared/css/select2.min.css" rel="stylesheet">

	<!--Icons-->
	<script src="/shared/js/lumino.glyphs.js"></script>
	<script src="/shared/js/jquery-1.11.1.min.js"></script>
	<script src="/shared/js/bootstrap.min.js"></script>
	<script src="/shared/js/bootstrap-datepicker.js"></script>
	<script src="/shared/js/bootstrap-table.min.js"></script>
	<script src="/shared/js/bootstrap-toggle.min.js"></script>
	<script src="/shared/js/bootstrap-table-export.js"></script>
	<script src="/shared/js/tableExport.js"></script>

	<!--select2-->
	<script src="/shared/js/select2.min.js"></script>

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use>
							</svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">
									<span class="glyphicon glyphicon-user"></span> Profile
								</a>
							</li>
							<li>
								<a href="#">
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
  <?php include('displaySideBar.php');
?>
