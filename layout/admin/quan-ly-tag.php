
	<?php include('header.php');
		require_once($_SERVER['DOCUMENT_ROOT'].'/class/Tag.Class.php');
		if(isset($_POST['addSubmit']))
		{
			$name = $_POST['name'];
			$newTag = new Tag(null,$name);
			if($newTag->save() == 1 )
			{
				echo '<script>alert("Thêm Tag Thành Công")</script>';
			}else {
				echo '<script>alert("Thêm Tag Thất Bại")</script>';
			}
		}else if(isset($_POST['subDelete']))
		{
			$id = $_POST['subDelete'];
			$newTag = new Tag($id,null);
			if($newTag->delete() == 1 )
			{
				echo '<script>alert("Xóa Tag Thành Công")</script>';
			}else {
				echo '<script>alert("Xóa Tag Thất Bại")</script>';
			}
		}
	?>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    			<ol class="breadcrumb">
    				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    				<li class="active">Tag</li>
    			</ol>
    </div><!--/.row-->
    <div class="row">
    			<div class="col-lg-12">
    				<h1 class="page-header">Tag</h1>
    			</div>
    </div><!--/.row-->
    <div class="row">
    			<div class="col-lg-12">
    				<div class="panel panel-default">
    					<div class="panel-heading">Danh Sách Tag</div>
    					<div class="panel-body">
                <div id="toolbar">
                    <form action="quan-ly-tag.php" method="POST">
                      <label for="#addname">Thêm Mới</label>
                      <input type="text" required maxlength="50" name="name" id="addname"/>
                      <button class="btn btn-primary" name="addSubmit" type="submit" >
                        <i class="glyphicon glyphicon-plus"></i>Thêm
                      </button>
                   </form>
              </div>
              </div>
              <table id="table1" data-show-export="true">
  						</table>
    						<!-- <table data-toggle="table" data-toolbar="#toolbar" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                    <thead>
    						    <tr>
    						        <th data-field="id" data-sortable="true">Filename</th>
    						        <th data-field="name"  data-sortable="true">Hình Ảnh</th>
                        <th>Thao Tác</th>
    						    </tr>
    						    </thead>
                  <tbody>
                       <?php
                        //  require_once($_SERVER['DOCUMENT_ROOT'].'/class/Tag.Class.php');
                        //  $banners = Tag::getTagList();
                        //   if($banners!=false)
                        //   {
                        //     foreach($banners as $item)
                        //     {
                        //       echo '<tr>
                        //               <td>'.$item['tag_id'].'</td>
                        //               <td id="nameField'.$item['tag_id'].'">'.$item['tag_name'].'</td>
                        //               <td>
                        //                 <form action="quan-ly-tag.php" method="POST">
                        //                   <button class="btn btn-danger" name="subDelete" type="button" value="'.$item['tag_id'].'" id="btnDelete'.$item['tag_id'].'">Xóa</button>
                        //                   <button class="btn btn-primary" type="button" value="'.$item['tag_id'].'" id="btnEdit'.$item['tag_id'].'" onclick="showButton(\'1\',\''.$item['tag_id'].'\')">Sửa</button>
                        //                   <button class="btn btn-primary" name="subEdit" type="button" value="'.$item['tag_id'].'" id="btnSave'.$item['tag_id'].'" style="display: none;">Lưu</button>
                        //                   <button class="btn btn-secondary" type="button" value="'.$item['tag_id'].'" id="btnCancle'.$item['tag_id'].'" style="display: none;" onclick="showButton(\'0\',\''.$item['tag_id'].'\')">Hủy</button>
                        //                 </form>
                        //               </td>
                        //             </tr>';
                        //     }
                        //   }
                       ?>
                  </tbody>
    						</table> -->
    					</div>
    				</div>
    			</div>
    		</div><!--/.row-->


  </div>
      <style>
        .table > tbody > tr > td {
        vertical-align: middle;
      }
      </style>
      <script>
      $(document).ready(function () {
        var url = 'http://'+window.location.hostname+':'+location.port+'/layout/admin/quan-ly-tag/tagData.php';
				var request;
        $.getJSON(url, function (data) {
            var tags = data;
            // http://bootstrap-table.wenzhixin.net.cn/documentation/
            $('#table1').bootstrapTable({
              buttonsClass: 'info',
              search: true,
              showColumns: true,
              showToggle: true,
              showRefresh: true,
              sortName: 'tag_id',
              sortOrder: 'asc',
              toolbar: "#toolbar",
              pagination: true,
              uniqueId: "tag_id",
              pageList: [10, 20, 30, 40],
              columns: [
                {
                  field: 'tag_id',
                  title: 'ID',
                }, {
                  field: 'tag_name',
                  title: 'Tên Tag',
                  width: '40%',
                  formatter: 'operateFormatter',
                },{
                  field: 'tag_id',
                  title: 'Thao Tác',
                  formatter: 'actionFormatter',
                }
              ],
              data: tags
            });
            $("#table1").on('check.bs.table uncheck.bs.table ' +
              'check-all.bs.table uncheck-all.bs.table', function () {
                // save your data, here just save the current page
                selections = getIdSelections();
                // push or splice the selections if you want to save all data selections
              });


      });
    });

      function getIdSelections() {
  			return $.map($("#table1").bootstrapTable('getSelections'), function (row) {
  				return row.supplier_id;
  			});
  		}
      function operateFormatter(value, row, index) {
        return [
          '<div id="nameField'+row.tag_id+'">'+row.tag_name+'</div>'
        ].join('');
      };

      function actionFormatter(value, row, index)
      {
      return['<form action="quan-ly-tag.php" method="POST">'
            +'<button style="margin-left: 5px; margin-right: 5px;" class="btn btn-danger" name="subDelete" type="submit" value="'+value+'" id="btnDelete'+value+'" onclick="return confirmDelete(\''+row.tag_name+'\')">Xóa</button>'
            +'<button style="margin-left: 5px; margin-right: 5px;" class="btn btn-primary" type="button" value="'+value+'" id="btnEdit'+value+'" onclick="showButton(\'1\',\''+value+'\',\''+row.tag_name+'\')">Sửa</button>'
            +'<button style="margin-left: 5px; margin-right: 5px; display: none;" class="btn btn-primary" name="subEdit" type="button" value="'+value+'" id="btnSave'+value+'" onclick="edit('+value+')">Lưu</button>'
            +'<button style="margin-left: 5px; margin-right: 5px; display: none;" class="btn btn-secondary" type="button" value="'+value+'" id="btnCancle'+value+'" onclick="showButton(\'0\',\''+value+'\',\''+row.tag_name+'\')">Hủy</button>'
        +'</form>'].join('');
      }

			function edit(id)
			{
				var newName = $('#nameField'+id).find('#addname').first().val();
				var urlx = 'http://'+location.hostname+':'+location.port+'/layout/admin/quan-ly-tag/edit.php';
				//ajax here bois
				request = $.ajax({
				url: urlx,
				data: { "id" : id , "name" : newName},
				type: "get"
				});

				// Callback handler that will be called on success
				request.done(function (response, textStatus, jqXHR){
						var xmlDoc = response.documentElement;
						var code = xmlDoc.getElementsByTagName('code')[0].textContent;
						switch(code)
						{
								case '-1':
													alert("Không thểm chỉnh sửa Tag");
													break;
								case '0':
													alert("Có lỗi xảy ra !");
													break;
								case '1':
													var id =  xmlDoc.getElementsByTagName('id')[0].textContent;
													var name =  xmlDoc.getElementsByTagName('name')[0].textContent;
													updateUI(id,name);
													alert("Chỉnh sửa Tag Thành Công !!!");
													break;
								default:
									alert("Something went wrong");
								break;
						}
				});

				// Callback handler that will be called on failure
				request.fail(function (jqXHR, textStatus, errorThrown){
						alert("The following error occurred: "+textStatus);
				});
			}
				function updateUI( tagid , name)
				{
					$('#btnEdit'+tagid).click({bool: '1', id: tagid, name: name}, showButton2);
					$('#btnCancle'+tagid).click({bool: '0', id: tagid, name: name}, showButton2);
					$('#btnDelete'+tagid).prop("onclick", null);
					$('#btnDelete'+tagid).click({name: name}, confirmDelete2);
					showButton('0',tagid,name);
				}
				function confirmDelete2(event)
				{
						return confirm('Xác nhận xóa Tag '+event.data.name);
				}
				function showButton2(event)
				{
					var bool = event.data.bool;
					var id   = event.data.id;
					var name = event.data.name;
					if(bool == '1')
					{
						$('#btnSave'+id).show();
						$('#btnCancle'+id).show();
						$('#btnDelete'+id).hide();
						$('#btnEdit'+id).hide();
						$('#nameField'+id).html('<input type="text" required maxlength="50" name="name" id="addname" value="'+name+'"/>')
					}else{
						$('#btnSave'+id).hide();
						$('#btnCancle'+id).hide();
						$('#btnDelete'+id).show();
						$('#btnEdit'+id).show();
						$('#nameField'+id).html(name);
					}
				}
        function showButton(bool, id, name)
        {
          //var row = $('#table1').bootstrapTable('getRowByUniqueId', id);
          if(bool == '1')
          {
            $('#btnSave'+id).show();
            $('#btnCancle'+id).show();
            $('#btnDelete'+id).hide();
            $('#btnEdit'+id).hide();
            $('#nameField'+id).html('<input type="text" required maxlength="50" name="name" id="addname" value="'+name+'"/>')
          }else{
            $('#btnSave'+id).hide();
            $('#btnCancle'+id).hide();
            $('#btnDelete'+id).show();
            $('#btnEdit'+id).show();
            $('#nameField'+id).html(name);
          }
        }

				function confirmDelete(name)
				{
					return confirm('Xác nhận xóa Tag '+name);
				}
      </script>
	<?php include('footer.php');?>
