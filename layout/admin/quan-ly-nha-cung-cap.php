<?php
  include('header.php');
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
										<form>
											<div class="modal-body">
												<div class="form-group">
													<label for="name">Tên nhà cung cấp:</label>
													<input type="text" class="form-control" id="name">
												</div>
												<div class="form-group">
													<label for="address">Địa chỉ:</label>
													<textarea rows="6" id="address" class="form-control"></textarea>
												</div>
												<div class="form-group">
													<label for="phone">Số điện thoại:</label>
													<input type="number" min="1000" step="1000" class="form-control" id="phone" style="width:40%">
												</div>
												<div class="form-group">
													<label for="active">Active</label>
													<input type="checkbox" id='active' data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
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
					<h4 class="modal-title">Sửa thông tin nhà cung cấp</h4>
				</div>
				<form>
					<div class="modal-body">
						<div class="form-group">
							<label for="nameedit">Tên nhà cung cấp:</label>
							<input type="text" class="form-control" id="nameedit">
						</div>
						<div class="form-group">
							<label for="addressedit">Địa chỉ:</label>
							<textarea rows="6" id="addressedit" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="phoneedit">Số điện thoại:</label>
							<input type="number" min="1000" step="1000" class="form-control" id="phoneedit" style="width:40%">
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
                tittle: 'Còn Hoạt Động'
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
      			alert("ID muốn xóa là " + ids)
      		});
       });

    });


		function operateFormatter(value, row, index) {
			return [
				'<a class="like" href="#" data-toggle="modal" data-target="#myModal2" onclick=getRow(' + row.supplier_id + ')>' + row.supplier_name,
				'</a>'
			].join('');
		};


		function getIdSelections() {
			return $.map($("#table1").bootstrapTable('getSelections'), function (row) {
				return row.supplier_id
			});
		}

		function getRow(id) {
			var row = $("#table1").bootstrapTable('getRowByUniqueId', id)
			//Đổ dữ liệu vào modal2 ở đây
			// return row
		}
	</script>
  <?php
    include('header.php');
  ?>
