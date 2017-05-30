
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-7">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-5">
				<button type="button" class="btn btn-success" id="btnThemSach"  data-toggle="modal" data-target="#themtheloai">
					<span class="glyphicon glyphicon-plus-sign"></span> thêm thể loại
				</button>

			</div>
		</div>
	</div>
	<div class="panel-body" style="max-height: 800;overflow-y: scroll;">
		<div class="row"> 
			<div class="col-md-12"> 
				<div style="min-height: 500px;overflow:auto;">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>
									<div class="text-center">
										<input id="chkCheckAll" type="checkbox" value="">
									</div>
								</th>

								<th>Mã Thể loại</th>
								<th>Tên Thể loại</th>

								<th>Sửa</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$stt =0;
							foreach ($data_info as $key => $value) {
								$stt++;
								$matl = $value['matheloai'];
								?>
								<tr>
									<td>
										<div class='text-center'>
											<?php echo $stt; ?>
										</div>
									</td>
									<td> <?php echo $value['matheloai']; ?></td>
									<td><?php echo $value['tentheloai']; ?></td>
									<td><a class='chitietsach' href='' data-id='<?php echo $matl ;?>' data-toggle='modal' data-target='#myModal'>Sửa</a></td>
									<td><a class='xoasach' href='' data-id='<?php echo $matl ;?>' >Xóa</a></td>
								</tr>
								<?php }?>
								<tr>
									<td style="text-align: center;" colspan="5"><?php echo $links; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear-fix"></div>
	<!-- begin model -->
	<div class="modal fade col-md-12" id="myModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">THÔNG TIN THỂ LOẠI</h4>

					<div class="alert-success" id="message" ">

					</div>
				</div>

				<div class="modal-body">
					<div class="row"> 
						<div class="col-md-12"> 
							<form action="#" method="post" class="form-horizontal" id="frmtheloaisach" enctype="multipart/form-data"> 
								<!-- <div class="header"><label>Thông tin sách:</label></div> -->
								<div class="form-content"> 

									<div class="form-group">

										<div class="col-sm-3"><label>Mã Thể loại:</label> <input class="form-control" name="txtMatl" id="txtMatl" placeholder="Mã Sách" type="text" value=""  readonly > 
										</div> 
										<div class="col-sm-9"><label>Tên Thể Loại:</label> <input class="form-control" name="txtTentl" id="txtTentl" placeholder="Tên Sách" type="text" value="">

										</div>
									</div> 

								</div> 
							</div> 


						</div>
						<div class="modal-footer">
							<div class="col-xs-6 col-md-6 text-right">
								<br><label><button id="btnHuy" type="submit" class="btn btn-default">Hủy</button></label> 
							</div>

							<div class="col-xs-6 col-md-6 text-left">
								<br><label><button name="btnCapNhat" id="btnCapNhat" type="submit" class="btn btn-success">Cập nhật</button></label> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</form> 
	</div>
	<!-- end modal -->
	<div class="modal fade col-md-12" id="themtheloai" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">THÊM MỚI THỂ LOẠI</h4>

					<div class="alert-success" id="message_insert" ">

					</div>
				</div>

				<div class="modal-body">
					<div class="row"> 
						<div class="col-md-12"> 
							<form action="#" method="post" class="form-horizontal" id="frmThemTheLoai" enctype="multipart/form-data"> 
								<!-- <div class="header"><label>Thông tin sách:</label></div> -->
								<div class="form-content"> 

									<div class="form-group">

										<div class="col-sm-3"><label>Mã Thể loại:</label> <input class="form-control" name="istxtMatl" id="istxtMatl" placeholder="Mã Sách" type="text" value=""  > 
										</div> 
										<div class="col-sm-9"><label>Tên Thể Loại:</label> <input class="form-control" name="istxtTentl" id="istxtTentl" placeholder="Tên Sách" type="text" value="">

										</div>
									</div> 

								</div> 
							</div> 


						</div>
						<div class="modal-footer">
							<div class="col-xs-6 col-md-6 text-right">
								<br><label><button id="btnHuy" type="submit" class="btn btn-default">Hủy</button></label> 
							</div>

							<div class="col-xs-6 col-md-6 text-left">
								<br><label><button name="btnThemTheLoai" id="btnThemTheLoai" type="button" class="btn btn-success">Thêm Thể Loại</button></label> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</form> 
	</div>
	<!-- end modal -->
	<div class="row"></div>
	<!-- ./MODAL THÊM SÁCH  -->

<!-- ham ve cap nhat sach -->
	<script>
		$(".chitietsach").click(function(){
			$.ajax({
				type: "POST",
				dataType: 'json',
				url:"<?php echo site_url('theloai/chitiet') ;?>",
				data : {
					id:$(this).data('id')
				},
				success: function(resp){
	     // alert("vv");
	    // console.log(resp);
	    $('#txtMatl').val(resp.data_info[0].matl);
	    $('#txtTentl').val(resp.data_info[0].tentl);
	},
	error: function(resp) { alert(JSON.stringify(resp)); }
});
		});

		$("#btnCapNhat").click(function()
		{
		var dataform = $("#frmtheloaisach").serialize();
	 // console.log(dataform);

	 $.ajax({
	 	type: "POST",
	 	dataType: 'json',
	 	url:"<?php echo site_url('theloai/capnhat') ;?>",
	 	data : dataform,
	 	success: function(resp){
	 		if(resp.status == 1)
	 		{
	 			$("#message").text(resp.message);
	 			setTimeout(window.location.reload(), 2000);
	 		}


	 	},
	 	error: function(resp) { alert(JSON.stringify(resp)); }
	 });
	 return false;    
	});

/* ham xao the loai */
		$(".xoasach").click(function()
		{
	 // alert($(this).data('id'));
	 // console.log($(this).data('id'));
	  //console.log($(this).data('id'));
	  var ma = $(this).data('id');
	  var answer = confirm('bán có muốn xóa mã ' +ma +' không ?');
	  if(answer == true)
	  {
	  	$.ajax({
	  		type: "POST",
	  		dataType: 'json',
	  		url:"<?php echo site_url('theloai/deleteTheLoai') ;?>",
	  		data : {
	  			id:$(this).data('id')
	  		},
	  		success: function(resp){
	  			alert("Xóa sách thành công");
		      //alert(resp.message);
		     // console.log(resp.message);
		     setTimeout(window.location.reload());
		 },
		 error: function(resp) { alert(JSON.stringify(resp)); }
		});
	  }
	  return false;    
	});
	/* mot mot the loai moi */
	$("#btnThemTheLoai").click(function(){
	 // alert($(this).data('id'));
	 // console.log($(this).data('id'));
	  //console.log($(this).data('id'));
	 	var dataform = $("#frmThemTheLoai").serialize();
	 	console.log(dataform);
	  	$.ajax({
	  		type: "POST",
	  		dataType: 'json',
	  		url:"<?php echo site_url('theloai/ThemTheLoai') ;?>",
	  		data : dataform,
	  		success: function(resp){
	  		if(resp.status == 1)
	 		{
	 			$("#message_insert").text(resp.message);
	 			setTimeout(window.location.reload(), 2000);
	 		}

		 },
		 error: function(resp) { alert(JSON.stringify(resp)); }
		});
		 return false;  
	  });
	  



	</script>


