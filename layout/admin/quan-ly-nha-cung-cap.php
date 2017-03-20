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
				<li class="active">Quản lý nhà cung cấp</li>
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
											<h4 class="modal-title">Thêm nhà cung cấp</h4>
										</div>
										<form action="quan-ly-nha-cung-cap.php" method="POST">
											<div class="modal-body">
												<div class="form-group">
													<label for="name">Tên nhà cung cấp:</label>
													<input type="text" class="form-control" id="name" name="name" maxlength="50" required>
												</div>
												<div class="form-group">
													<label for="address">Địa chỉ:</label>
													<textarea rows="6" id="address" class="form-control" name="address" maxlength="150" required></textarea>
												</div>
												<div class="form-group">
													<label for="phone">Số điện thoại:</label>
													<input type="text" class="form-control" id="phone" style="width:40%" name="phone" required pattern="^0\d{9,10}">
												</div>
												<div class="form-group">
													<label for="active">Active</label>
                          <input type="checkbox" id='active' name="active" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
												</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-info" name='addSubmit'>Submit</button>
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
					<h4 class="modal-title">Sửa thông tin nhà cung cấp</h4>
				</div>
				<form action="quan-ly-nha-cung-cap.php" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label for="nameedit">Tên nhà cung cấp:</label>
							<input type="text" class="form-control" id="nameedit" name="nameedit" required maxlength="50">
						</div>
						<div class="form-group">
							<label for="addressedit">Địa chỉ:</label>
							<textarea rows="6" id="addressedit" name="addressedit" class="form-control" required maxlength="150"></textarea>
						</div>
						<div class="form-group">
							<label for="phoneedit">Số điện thoại:</label>
							<input type="text" class="form-control" id="phoneedit" name="phoneedit" style="width:40%" required pattern="^0\d{9,10}">
						</div>
						<div class="form-group">
							<label for="activeedit">Active</label>
              <input type="checkbox" id='activeedit' name="activeedit" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">

						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger" name="deleteSubmit" id="deleteSubmit" >Xóa</button>
						<button type="submit" class="btn btn-info" name="editSubmit" id="editSubmit">Sửa</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Sửa sp-->

	<script>
    $(document).ready(function () {
      var url = 'http://'+window.location.hostname+':5454/layout/admin/quan-ly-nha-cung-cap/supplierData.php';
      $.getJSON(url, function (data) {
          var suppliers = data;
          // http://bootstrap-table.wenzhixin.net.cn/documentation/
      		$('#table1').bootstrapTable({
      			buttonsClass: 'info',
      			search: true,
      			showColumns: true,
      			showToggle: true,
      			showRefresh: true,
            sortName: 'supplier_id',
            sortOrder: 'asc',
      			toolbar: "#toolbar",
      			pagination: true,
      			uniqueId: "supplier_id",
      			pageList: [10, 20, 30, 40],
      			columns: [
      				{
      					field: 'supplier_id',
      					title: 'ID',
      				}, {
      					field: 'supplier_name',
      					title: 'Tên Nhà Cung Cấp',
      					formatter: "operateFormatter"
      				}, {
      					field: 'supplier_address',
      					title: 'Địa Chỉ'
      				},{
                field: 'is_active',
                title: 'Tình Trạng',
                formatter: "activeFormatter"
              },{
                field: 'supplier_phone_number',
                title: 'Điện Thoại'
              }
            ],
      			data: suppliers
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
        text = 'Hoạt Động'
      }else {
        text = 'Ngưng Hoạt Động'
      }
      return [
        text
			].join('');
    };
      ////YOLO FROM HERE
		function operateFormatter(value, row, index) {
			return [
				'<a class="like" href="#" data-toggle="modal" data-target="#myModal2" onclick=getRow(' + row.supplier_id + ')>' + row.supplier_name,
				'</a>'
			].join('');
		};


		function getIdSelections() {
			return $.map($("#table1").bootstrapTable('getSelections'), function (row) {
				return row.supplier_id;
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
          return confirm('Xác nhận xóa nhà sản xuất '+event.data.name);
      }
      if(row.is_active == '1')
      {
        $('#activeedit').bootstrapToggle('on')
      }else{
        $('#activeedit').bootstrapToggle('off')
      }
      ////////YOLO FROM HERE
			//Đổ dữ liệu vào modal2 ở đây
			// return row
		}
	</script>
  <?php
    include('footer.php');
  ?>
