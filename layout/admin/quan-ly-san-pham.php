
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductGroup.class.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/Supplier.Class.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/layout/user/method/getTag.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/ProductTag.Class.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/Product.Class.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/layout/admin/quan-ly-san-pham/getTagWithIDProduct.php');
    $tag = getTag();


  if(isset($_POST['editSubmit']))
  {
    $id               = $_POST['editSubmit'];
    $supplier_id      = $_POST['supplier_idedit'];
    $groupproduct_id  = $_POST['groupproduct_idedit'];
    $productname      = $_POST['productnameedit'];
    $description      = $_POST['descriptionedit'];
    $price            = $_POST['priceedit'];
    $number_remain    = $_POST['number_remainedit'];
    $date = date('Y/m/d  h:i:s');


    $newProduct = new Product($id,$supplier_id,$groupproduct_id,$productname,$description,$price,$number_remain,0,$date);
    $res = $newProduct->edit();
    if($res == -1)
    {
      echo '<script>alert("Sửa thông tin sản phẩm thất bại")</script>';
    }else {
      echo '<script>alert("Sửa sản phẩm thành công")</script>';
      //$res = $;
    }
  }
  if(isset($_POST['addSubmit']))
  {

    $supplier_id      = $_POST['supplier'];
    $groupproduct_id  = $_POST['group'];
    $productname      = $_POST['name'];
    $description      = $_POST['description'];
    $price            = $_POST['price'];
    $number_remain    = $_POST['remain'];
    $dates = date('Y-m-d  H:i:s');

    $newProduct = new Product($supplier_id,$groupproduct_id,$productname,$description,$price,$number_remain,0,var_dump($dates));
    $res = $newProduct->save();
    if($res == -1 || $res == 0)
    {
      echo '<script>alert("Thêm thông tin sản phẩm thất bại")</script>';
    }else {
      echo '<script>alert("Thêm sản phẩm thành công")</script>';
    }
  }
  if(isset($_POST['deleteSubmit']))
  {
    $id = $_POST['deleteSubmit'];
    $product = new Product($id,'','','','','','','','');
    $res = $product->delete();
    if($res == 0 || $res == -1)
    {
        echo '<script>alert("Xóa thất bại !")</script>';
    }else {
        echo '<script>alert("Xóa thành công !")</script>';
    }
  }

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
				<li class="active">Quản lý sản phẩm</li>
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
											<h4 class="modal-title">Thêm sản phẩm</h4>
										</div>
										<form action="quan-ly-san-pham.php" method="POST">
											<div class="modal-body">
												<div class="form-group">
													<label for="name">Tên sản phẩm:</label>
													<input type="text" class="form-control" id="name" name="name">
												</div>
												<div class="form-group">
													<label for="group">Loại:</label>
													<select class="form-control" id="group" name="group">
                            <?php
                                $proDList = ProductGroup::list_product_group();
                                foreach ($proDList as $item)
                                {
                                  echo "<option value=\"".$item["product_group_id"]."\">".$item["product_group_name"]."</option>";
                                }

                            ?>
													</select>

												</div>
												<div class="form-group">
													<label for="price">Giá:</label>
													<input type="number" min="1000" step="1000" class="form-control" id="price"  style="width:40%" name="price">
												</div>
												<div class="form-group">
													<label for="supplier">Nhà cung cấp:</label>
													<select class="form-control" id="supplier" name="supplier">
                            <?php
                                $suppierList = Supplier::list_supplier();
                                foreach ($suppierList as $item)
                                {
                                  echo "<option value=\"".$item["supplier_id"]."\">".$item["supplier_name"]."</option>";
                                }
                            ?>
													</select>
												</div>
												<div class="form-group">
													<label for="description">Mô tả:</label>
													<textarea class="form-control" rows="5" id="description" name="description"></textarea>
												</div>
												<div class="form-group">
													<label for="tags">Tag:</label>
													<select class="form-control" id="tags" style="width: 100% " name="tags"></select>
												</div>
												<div class="form-group">
													<label for="remain">Số lượng:</label>
													<input type="number" class="form-control" id="remain" style="width:20%" name="remain">
												</div>
												<div class="form-group">
													<label for="image">Hình:</label>
													<input class="form-control" type="file" id="image" accept="image/*" multiple>
												</div>
												<!-- <img src="C001.jpg" width="110px" height="110px">
												<img src="C002.jpg" width="110px" height="110px"> -->
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-info" id="addSubmit" name="addSubmit">Submit</button>
                        <button type="button" class="btn btn-default" onclick="check()">CHECK</button>

												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<button id="deleteSubmit" class="btn btn-danger" disabled name="deleteSubmit">
								<i class="glyphicon glyphicon-trash"></i> Xóa
							</button>
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
				<form action="quan-ly-san-pham.php" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label for="productnameedit">Tên sản phẩm:</label>
							<input type="text" class="form-control" id="productnameedit" name="productnameedit">
						</div>
						<div class="form-group">
              <label for="groupedname">Loại:</label>
              <select class="form-control" name="groupproduct_idedit">
                <?php
                    $proDList = ProductGroup::list_product_group();
                    foreach ($proDList as $item)
                    {
                      echo "<option value=\"".$item["product_group_id"]."\">".$item["product_group_name"]."</option>";
                    }
                ?>
              </select>


						</div>
						<div class="form-group">
							<label for="priceedit">Giá:</label>
							<input type="number" min="1000" step="1000" class="form-control" id="priceedit" style="width:40%" name="priceedit">
						</div>
						<div class="form-group">
							<label for="descriptionedit">Mô tả:</label>
							<textarea class="form-control" rows="5" id="descriptionedit" name="descriptionedit"></textarea>
						</div>
						<div class="form-group">
							<label for="tagsedit">Tag:</label>
							<select class="form-control" id="tagsedit" style="width: 100%" name="tagsedit"></select>

						</div>
						<div class="form-group">
							<label for="supplieredit">Nhà cung cấp:</label>
							<select class="form-control" id="supplieredit" name="supplier_idedit">
                <?php
                    $suppierList = Supplier::list_supplier();
                    foreach ($suppierList as $item)
                    {
                      echo "<option value=\"".$item["supplier_id"]."\">".$item["supplier_name"]."</option>";
                    }
                ?>
							</select>
						</div>
						<div class="form-group">
							<label for="number_remainedit">Số lượng:</label>
							<input type="number" class="form-control" id="number_remainedit" style="width:20%" name="number_remainedit">
						</div>
						<div class="form-group">
							<label for="imageedit">Hình:</label>
							<input class="form-control" type="file" id="imageedit" accept="image/*" multiple>
						</div>
						<!-- <img src="C001.jpg" width="110px" height="110px">
						<img src="C002.jpg" width="110px" height="110px"> -->
					</div>
					<div class="modal-footer">
            <button type="submit" class="btn btn-danger" id="deleteSubmit" name="deleteSubmit">Xoá</button>
						<button type="submit" class="btn btn-info" id="editSubmit" name="editSubmit">Sửa</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Sửa sp-->


	<script>
     var tag = <?php
         echo "[";
         foreach ($tag as $item){
           echo "{
             \n\"id\": ".$item['tag_id'].",
             \n\"text\": \"".$item['tag_name']."\"
           \n},";
         }
         echo "{}]\n";
      ?>

    $(document).ready(function () {
      var url = 'http://'+window.location.hostname+':80/ProjectPHP/layout/admin/quan-ly-san-pham/productData.php';
      $.getJSON(url, function (data) {
          var product = data;
          // http://bootstrap-table.wenzhixin.net.cn/documentation/
          $('#table1').bootstrapTable({
            buttonsClass: 'info',
            search: true,
            showColumns: true,
            showToggle: true,
            showRefresh: true,
            toolbar: "#toolbar",
            pagination: true,
            uniqueId: "product_id",
            pageList: [10, 20, 30, 40],
            columns: [
              {
                field: 'state',
                checkbox: true,
                rowspan:1,
                align: 'center',
                valign: 'middle'
              },
              {
                field: 'product_id',
                title: 'ID',
              }, {
                field: 'supplier_id',
                title: 'Mã Loại',
              }, {
                field: 'product_group_id',
                title: 'Mã nhóm'
              }, {
                field: 'product_name',
                title: 'Tên',
                formatter: "operateFormatter"
              },{
                field: 'description',
                title: 'Mô tả'
              },{
                field: 'price',
                title: 'Giá',
              },{
                field: 'number_remain',
                title: 'Số lượng còn lại',
              },{
                field: 'number_sold',
                title: 'Số lượng bán ra',
              }
            ],
            data: product
          });
          $("#table1").on('check.bs.table uncheck.bs.table ' +
            'check-all.bs.table uncheck-all.bs.table', function () {
              selections = getIdSelections();
            });

          $("#like").click(function () {
            var row = getRow();
            alert("ID muốn xóa là " + ids);
          });
       });

    });

		$("#tags").select2({
			data: tag,
			multiple: true,
			tokenSeparators: [","],
			allowClear: true
		})

		$("#tagsedit").select2({
			data: tag,
			multiple: true,
			tokenSeparators: [","],
			allowClear: true
		})

		$("#table1").on('check.bs.table uncheck.bs.table ' +
			'check-all.bs.table uncheck-all.bs.table', function () {
				$("#deleteSubmit").prop('disabled', !$("#table1").bootstrapTable('getSelections').length);
				// save your data, here just save the current page
				selections = getIdSelections();
				// push or splice the selections if you want to save all data selections
			});

		$("#deleteSubmit").click(function () {
			var ids = getIdSelections();
			alert("ID muốn xóa là " + ids)
		});

		$("#like").click(function () {
			var row = getRow();
			alert("ID muốn xóa là " + ids)
		});

    function check(){
      console.log($("#supplier").val())
      console.log($("#group").val())
      console.log($("#name").val())
      console.log($("#description").val())
      console.log($("#price").val())
      console.log($("#remain").val())
    }

		function operateFormatter(value, row, index) {
			return [
				'<a class="like" href="#" data-toggle="modal" data-target="#myModal2" onclick=getRow(' + row.product_id + ')>' + row.product_name,
				'</a>'
			].join('');
		};


		function getIdSelections() {
      return $.map($("#table1").bootstrapTable('getSelections'), function (row) {
				return row.product_id;
			});
		}

		function getRow(id) {


			var row = $("#table1").bootstrapTable('getRowByUniqueId', id);

      //document.write(row.product_id);
      var url = 'http://'+location.hostname+':'+location.port+'/ProjectPHP/layout/admin/quan-ly-san-pham/tagData.php';
      var showTag;
       //document.write(f);
       $.post(url,{id:row.product_id},function(result,status){
          showTag = JSON.parse(result);
          $('#tagsedit').val(showTag).trigger("change");
          // console.log(JSON.parse(showTag));

       });

			//Đổ dữ liệu vào modal2 ở đây
      $('#supplier_idedit').val(row.supplier_id);
      $('#groupproduct_idedit').val(row.product_group_id);
      $('#productnameedit').val(row.product_name);
      $('#descriptionedit').val(row.description);
      $('#priceedit').val(row.price);
      $('#number_remainedit').val(row.number_remain);
      $('#number_soldedit').val(row.number_sold);


      $('#deleteSubmit').prop( "value", row.product_id);
      $('#editSubmit').prop( "value", row.product_id );
      $('#deleteSubmit').click({name: row.product_name}, displayComfirm);
      //$('#deleteSubmit').click({checkbox: row.checkbox}, displayComfirm);
      // in your function, just grab the event object and go crazy...
      function displayComfirm(event){
          return confirm('Xác nhận xóa Sản phẩm '+event.data.name);
      }

			// return row
		}
	</script>


	<!--/.main-->
  <?php include('footer.php');
