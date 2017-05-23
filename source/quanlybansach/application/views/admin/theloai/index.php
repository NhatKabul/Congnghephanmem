
<div class="panel panel-default">
<!-- Default panel contents -->
<div class="panel-heading">
	<div class="row">
		<div class="col-md-10 col-sm-10 col-xs-7">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-5">
			<button type="button" class="btn btn-success" id="btnThemSach"  data-toggle="modal" data-target="#modalThemSach">
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
							$matl = $value['matl'];
							?>
							<tr>
								<td>
									<div class='text-center'>
										<?php echo $stt; ?>
									</div>
								</td>
								<td> <?php echo $value['matl']; ?></td>
								<td><?php echo $value['tentl']; ?></td>
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
	
										<div class="col-sm-3"><label>Mã Thể loại:</label> <input class="form-control" name="txtMaSach" id="txtMatl" placeholder="Mã Sách" type="text" value=""  readonly > 
										</div> 
										<div class="col-sm-9"><label>Tên Thể Loại:</label> <input class="form-control" name="txtTenSach" id="txtTentl" placeholder="Tên Sách" type="text" value="">
									
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
<div class="row"></div>

<?php
	// $str = "tâm-lan-huyền";
	// $cc=(explode("-",$str));
	// echo $cc[0];
	//giới hạn chỉ 2 phần tử
	//  print_r(explode("-",$str,2));
?>
<!-- MODAL THÊM SÁCH -->

<div class="clear-fix"></div>
<div class="modal fade col-md-12" id="modalThemSach" role="dialog">

<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">THÊM SÁCH BÁN</h4>

			<div class="alert-success" id="message" ">

			</div>
		</div>

		<div class="modal-body">
			<form action="#" method="post" class="form-horizontal" id="frmThemSach" enctype="multipart/form-data"> 
				<div class="row"> 



					<div class="row">
						<div class="col-md-1 col-sm-1"></div>
						<div class="col-md-10 col-sm-10 col-xs-12" style="outline: 1px solid orange;">
							<br>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<label for="sel1">Mã sách:</label>
									<select class="form-control" name="selSachBan" id="selSachBan">
										<option selected disabled>Mã Sách - Tên Sách - Giá nhập</option>
										<?php

										{
											foreach ($data_info_status_0 as $key => $value)
											{
												echo "<option>".$value['matl']."-".$value['tensach']."-".$value['gianhap']." VNĐ"."</option>";
											}
										}
										?>
									</select>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<label for="sel1">Giá bán:</label>
									<input class="form-control" id="txtGiaBanSach" name="txtGiaBanSach" placeholder="Nhập giá bán" type="text" >
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<label for="sel1">Chọn hình ảnh:</label>
									<input class="form-control" name="imgSach" id="imgSach" name="imgInp" type="file" onChange="validate(this.value)">
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12" id="hinhanh">
								<br>
								<img class="img-thumbnail" id="hienthiImg" src="../../../public/dist/img/book-default.png" alt="Hinh-anh-sach">
							</div>
						</div>
					</div>



				</div>
				<div class="modal-footer">
					<div class="col-xs-6 col-md-6 text-right">
						<br><label><button type="button" id="btnHuy" class="btn btn-default" data-dismiss="modal">Hủy</button></label>

					</div>

					<div class="col-xs-6 col-md-6 text-left">
						<br><label><button id="btnThemSach2" type="submit" class="btn btn-primary">Cập nhật</button></label> 
					</div>
				</div>
			</from>
		</div>
	</div>
</div>
</form> 
<div class="row">
</div>
</div>
<!-- ./MODAL THÊM SÁCH  -->





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
	 		console.log(resp.message);
	   //alert(resp.status);
	 //  alert("ccc");
	 $("#message").text(resp.message);

	 //setTimeout(window.location.reload(), 2000);
	},
	error: function(resp) { alert(JSON.stringify(resp)); }
});
	 return false;    
	});



$(".xoasach").click(function()
{
	 // alert($(this).data('id'));
	 // console.log($(this).data('id'));
	  //console.log($(this).data('id'));
	  $.ajax({
	  	type: "POST",
	  	dataType: 'json',
	  	url:"<?php echo site_url('sach/xoasach') ;?>",
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
	  return false;    
	});



$("#btnThemSach2").click(function()
{
	var dataform = $("#frmThemSach").serialize();
	// console.log(dataform);
	//  var dataSelect: $('#selSachBan').val();
	// console.log(dataSelect);

	$.ajax({
		type: "POST",
		dataType: 'json',
		url:"<?php echo site_url('sach/themsach') ;?>",
		data : dataform,
		success: function(resp){
			alert(resp.message);


			setTimeout(window.location.reload());
		},
	error: function(resp) { //alert(JSON.stringify(resp));
		alert(resp.message);}
	});
	return false;    


});



	 //  $.ajax({
	 //    type: "POST",
	 //    dataType: 'json',
	 //    url:"<?php //echo site_url('sach/themsach') ;?>",
	 //    // data : {
	 //    //   id:$(this).data('id')
	 //    // },
	 //    success: function(resp){
	 //      alert("Xóa sách thành công");
	 //      //alert(resp.message);
	 //     // console.log(resp.message);
	 //     setTimeout(window.location.reload());
	 //   },
	 //   error: function(resp) { alert(JSON.stringify(resp)); }
	 // });
	// return false;



	//REVIEW IMG
	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#hienthiImg').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgSach").change(function(){
		readURL(this);
	});

	// ./REVIEW IMG

	//  VALIDATE FORM NHẬP SÁCH
	$('#btnThemSach2').click(function () {

	// Get the Login Name value and trim it

	var checkPrice = $.trim($('#txtGiaBanSach').val());
	var checkImg=$('img')[3].src;
	var checkImg2 = checkImg.indexOf("book-default");
	// var checkImg3=$('.hinhanh img').attr('src');

	// Check if empty of not
	if (checkPrice==='') 
	{
		alert('Thiếu thông tin vui lòng kiểm tra lại');


	// alert( $('img')[3].src );
	return false;
}


if($.isNumeric($('#txtGiaBanSach').val()) === false)
{
	alert('Giá bán phải có kiểu số. vui lòng kiểm tra lại');
	return false;
}


});

	// datepicker
	$(function()
	{
		$("#txtNgayNhap").datepicker({
			dateFormat: "dd/mm/yy",
			changeYear: true,
			changeMonth: true,
			yearRange: "1950:2017"
		});



	});

</script>
