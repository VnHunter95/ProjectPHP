<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Tables</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.min.css" rel="stylesheet">
	<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
	<link href="css/adminstyles.css" rel="stylesheet">
	<link href="css/select2.min.css" rel="stylesheet">

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.min.js"></script>
	<script src="js/bootstrap-toggle.min.js"></script>
	<script src="js/bootstrap-table-export.js"></script>
	<script src="js/tableExport.js"></script>

	<!--select2-->
	<script src="js/select2.min.js"></script>


	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<!--navbar-->

	<!--/navbar-->


	<!--sidebar-->

	<!--/.sidebar-->

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
				<li class="active">Quản lý nhân sự</li>
			</ol>
		</div>


		<!--thêm sp-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div id="toolbar">
							<button id="add" class="btn btn-success" data-toggle="modal" data-target="#myModal">
								<i class="glyphicon glyphicon-plus"></i> Thêm
							</button>
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Thêm nhân sự</h4>
										</div>
										<form>
											<div class="modal-body">
												<div class="form-group">
													<label for="name">Tên:</label>
													<input type="text" class="form-control" id="name">
												</div>
												<div class="form-group">
													<label for="username">Tên đăng nhập:</label>
													<input type="text" class="form-control" id="username">
												</div>
												<div class="form-group">
													<label for="password">Mật khẩu:</label>
													<input type="password" class="form-control" id="password">
												</div>
												<div class="form-group">
													<label for="group">Chức vụ:</label>
													<select class="form-control" id="group">
														<option value="1">Admin</option>
														<option value="2">Staff</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</div>
												<div class="form-group">
													<label for="activeedit">Active</label>
													<input type="checkbox" id='activeedit' data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
												</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-info">Submit</button>
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<table id="table1" data-show-export="true">
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->
	</div>
	<!--/.main-->
	<!--thêm sp-->

	<!--Sửa sp-->
	<div id="myModal2" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Sửa sản phẩm</h4>
				</div>
				<form>
					<div class="modal-body">
						<div class="form-group">
							<label for="name">Tên:</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
							<label for="username">Tên đăng nhập:</label>
							<input type="text" class="form-control" id="username">
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu:</label>
							<input type="password" class="form-control" id="password">
						</div>
						<div class="form-group">
							<label for="group">Chức vụ:</label>
							<select class="form-control" id="group">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
						<div class="form-group">
							<label for="activeedit">Active</label>
							<input type="checkbox" id='activeedit' data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-info">Submit</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Sửa sp-->

	<script>
		var data = [
			{
				"id": 0,
				"name": "Item 0",
				"price": "$0"
			},
			{
				"id": 1,
				"name": "Item 1",
				"price": "$1"
			},
			{
				"id": 2,
				"name": "Item 2",
				"price": "$2"
			},
			{
				"id": 3,
				"name": "Item 3",
				"price": "$3"
			},
			{
				"id": 4,
				"name": "Item 4",
				"price": "$4"
			},
			{
				"id": 5,
				"name": "Item 5",
				"price": "$5"
			},
			{
				"id": 7,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 8,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 9,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 10,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 11,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 12,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 13,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 14,
				"name": "Item 6",
				"price": "$6"
			},
			{
				"id": 15,
				"name": "Item 6",
				"price": "$6"
			}
		]


		// http://bootstrap-table.wenzhixin.net.cn/documentation/
		$('#table1').bootstrapTable({
			buttonsClass: 'info',
			search: true,
			showColumns: true,
			showToggle: true,
			showRefresh: true,
			toolbar: "#toolbar",
			pagination: true,
			uniqueId: "id",
			pageList: [10, 20, 30, 40],
			columns: [
				{
					field: 'id',
					title: 'Item ID',
				}, {
					field: 'name',
					title: 'Item Name',
					formatter: "operateFormatter"
				}, {
					field: 'price',
					title: 'Item Price'
				}],
			data: data
		});

		$("#tags").select2({
			data: tag,
			multiple: true,
			tokenSeparators: [","],
			allowClear: true
		})

		$("#table1").on('check.bs.table uncheck.bs.table ' +
			'check-all.bs.table uncheck-all.bs.table', function () {
				// save your data, here just save the current page
				selections = getIdSelections();
				// push or splice the selections if you want to save all data selections
			});

		$("#like").click(function () {
			var row = getRow();
			// $("#table1").bootstrapTable('remove', {
			// 	field: 'id',
			// 	values: ids
			// });
			// $("#remove").prop('disabled', true);
			alert("ID muốn xóa là " + ids)
		});

		function operateFormatter(value, row, index) {
			return [
				'<a class="like" href="#" data-toggle="modal" data-target="#myModal2" onclick=getRow(' + row.id + ')>' + row.name,
				'</a>'
			].join('');
		};


		function getIdSelections() {
			return $.map($("#table1").bootstrapTable('getSelections'), function (row) {
				return row.id
			});
		}

		function getRow(id) {
			var row = $("#table1").bootstrapTable('getRowByUniqueId', id)
			//Đổ dữ liệu vào modal2 ở đây
			// return row
		}
	</script>
</body>

</html>
