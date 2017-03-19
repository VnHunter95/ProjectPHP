<?php
  include('header.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Supplier.Class.php');
  if(isset($_POST['editSubmit']))
  {
    $id       = $_POST['editSubmit'];
    $name     = $_POST['nameedit'];
    $phone    = $_POST['phoneedit'];
    $adr      = $_POST['addressedit'];
    if(isset($_POST['activeedit']))
    {
      $active = '1';
    }else {
      $active = '0';
    }
    $newSupplier = new Supplier($id,$name,$adr,$phone,$active);
    $res = $newSupplier->edit();
    if($res == -1)
    {
      echo '<script>alert("Sửa nhà sản xuất thất bại")</script>';
    }else {
      echo '<script>alert("Sửa nhà sản xuất thành công")</script>';
    }
  }
  if(isset($_POST['addSubmit']))
  {
    $id       = $_POST['addSubmit'];
    $name     = $_POST['name'];
    $phone    = $_POST['phone'];
    $adr      = $_POST['address'];
    if(isset($_POST['active']))
    {
      $active = '1';
    }else {
      $active = '0';
    }
    $newSupplier = new Supplier(null,$name,$adr,$phone,$active);
    $res = $newSupplier->save();
    if($res == -1 || $res == 0)
    {
      echo '<script>alert("Thêm nhà sản xuất thất bại")</script>';
    }else {
      echo '<script>alert("Thêm nhà sản xuất thành công")</script>';
    }
  }
  if(isset($_POST['deleteSubmit']))
  {
    $id = $_POST['deleteSubmit'];
    $cus = new Supplier($id,'','','','');
    $res = $cus->delete();
    if($res == 0 || $res == -1)
    {
        echo '<script>alert("Xóa thất bại !")</script>';
    }else {
        echo '<script>alert("Xóa thành công !")</script>';
    }
  }
?>
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
													<input type="checkbox" id='activeedit' >
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
    $(document).ready(function () {
      var url = 'http://'+window.location.hostname+':5454/layout/admin/quan-ly-nhan-su/staffData.php';
      $.getJSON(url, function (data) {
          var staff = data;
          // http://bootstrap-table.wenzhixin.net.cn/documentation/
      		$('#table1').bootstrapTable({
      			buttonsClass: 'info',
      			search: true,
      			showColumns: true,
      			showToggle: true,
      			showRefresh: true,
            sortName: 'staff_id',
            sortOrder: 'asc',
      			toolbar: "#toolbar",
      			pagination: true,
      			uniqueId: "staff_id",
      			pageList: [10, 20, 30, 40],
      			columns: [
      				{
      					field: 'staff_id',
      					title: 'ID',
      				}, {
      					field: 'staff_username',
      					title: 'Username',
      					formatter: "operateFormatter"
      				}, {
      					field: 'staff_password',
      					title: 'Password'
      				}, {
      					field: 'staff_name',
      					title: 'Tên'
      				},{
                field: 'staff_role',
                title: 'Vai Trò'
              },{
                field: 'is_active',
                title: 'Tình Trạng',
                formatter: "activeFormatter"
              }
            ],
      			data: staff
      		});
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
      			alert("ID muốn xóa là " + ids);
      		});
       });

    });

      ////YOLO FROM HERE
    function activeFormatter(value, row, index)
    {
      var text = '';
      if(value == 1)
      {
        text = 'Bình Thường'
      }else {
        text = 'Khóa'
      }
      return [
        text
			].join('');
    };
      ////YOLO FROM HERE
		function operateFormatter(value, row, index) {
			return [
				'<a class="like" href="#" data-toggle="modal" data-target="#myModal2" onclick=getRow(' + row.staff_id + ')>' + row.staff_username,
				'</a>'
			].join('');
		};


		function getIdSelections() {
			return $.map($("#table1").bootstrapTable('getSelections'), function (row) {
				return row.staff_id;
			});
		}

		function getRow(id) {
			var row = $("#table1").bootstrapTable('getRowByUniqueId', id)
      ////Coder code
      $('#nameedit').val(row.supplier_name);
      $('#addressedit').val(row.supplier_address);
      $('#phoneedit').val(row.supplier_phone_number);
      $('#deleteSubmit').prop( "value", row.supplier_id);
      $('#editSubmit').prop( "value", row.supplier_id );
      $('#deleteSubmit').click({name: row.supplier_name}, displayComfirm);
      // in your function, just grab the event object and go crazy...
      function displayComfirm(event){
          confirm('Xác nhận xóa nhà sản xuất '+event.data.name);
      }
      if(row.is_active == '1')
      {
        $('#activeedit').prop( "checked", true );
      }else{
        $('#activeedit').prop( "checked", false );
      }
      ////////YOLO FROM HERE
			//Đổ dữ liệu vào modal2 ở đây
			// return row
		}
	</script>
  <?php
    include('footer.php');
  ?>
