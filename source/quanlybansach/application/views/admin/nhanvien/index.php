
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="row">
     <div class="col-md-10 col-sm-10 col-xs-7">
       <label>
         
       </label>
     </div>
     <div class="col-md-2 col-sm-2 col-xs-5">
       <button type="button" class="btn btn-success" id="btnThemSach"  data-toggle="modal" data-target="#modalThemSach">
        <span class="glyphicon glyphicon-plus-sign"></span> Thêm Nhân viên
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

              <th>Mã Nhân viên</th>
              <th>Tên Nhân viên</th>
               <th>email</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $stt =0;
            foreach ($data_info as $key => $value) {
              $stt++;
              $masach = $value['manhanvien'];
              ?>
              <tr>
               <td>
                 <div class='text-center'>
                  <?php echo $stt; ?>
                </div>
              </td>
              <td> <?php echo $value['manhanvien']; ?></td>
              <td><?php echo $value['tennhanvien']; ?></td>
               <td><?php echo $value['email']; ?></td>
              <td><a class='chitietsach' href='' data-id='<?php echo $masach ;?>' data-toggle='modal' data-target='#myModal'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
              <td><a class='xoasach' href='' data-id='<?php echo $masach ;?>' ><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
<!-- ..... MODAL - START............ -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Quản lý nhân viên</h4>
      </div>
      <form id="frmThongTinNV">
        <div class="modal-body">

          <div class="row">
            <div class="col-md-8 col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Mã nhân viên:</label> <input class="form-control" id="txtMaNV" name="txtMaNV" placeholder="Mã Nhân viên" type="text" value="01" readonly>  
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Tên nhân viên:</label> <input class="form-control" name="txtTenNV" id="txtTenNV" placeholder="Tên nhân viên" type="text" value="Âu Dương Phong" >  
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="sel1">Giới tính:</label>
                <select class="form-control" name="selGioiTinh" id="selGioiTinh">
                  <option>Nam</option>
                  <option>Nữ</option>
                </select>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Ngày sinh:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" data-date-format='yyyy-mm-dd' class="form-control pull-right" name="txtNgaySinh" id="txtNgaySinh" readonly> <!--datepicker -->
                </div>  
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12"><label>Địa chỉ:</label> <input class="form-control" name="txtDiaChi" id="txDiaChi" placeholder="Địa chỉ" type="text" value="" >  
              </div>
            </div>

            <div class="col-md-3 col-xs-12" style="min-height: 180px;">
              <br>
              <img class="img-thumbnail" src="../../dist/img/trong.jpg" alt="Chania">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Số điện thoại:</label> <input class="form-control" name="txtSDT" id="txtSDT" placeholder="Số điện thoại" type="text" value="" >  
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Email:</label> <input class="form-control" id="txEmail" name="txtEmail" placeholder="Email" type="text" value="" >  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Chức vụ:</label> 
                <select class="form-control" name="selChucVu" id="selChucVu">
                  <option>Nhân viên</option>
                  <option>Quản lý</option>
                </select>  
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12"><label>Tình trạng tài khoản:</label> 
                <select class="form-control" name="selTK" id="selTK">
                  <option>Bình thường</option>
                  <option>Khóa</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- ..... MODAL - END............ -->

<div class="row"></div>
<!-- MODAL THÊM SÁCH -->

<div class="clear-fix"></div>
<div class="modal fade col-md-12" id="modalThemSach" role="dialog">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">THÊM NHÂN VIÊN</h4>

        <div class="alert-success" id="message" ">

        </div>
      </div>

      <div class="modal-body">
        <form action="#" method="post" class="form-horizontal" id="frmThemNV" enctype="multipart/form-data"> 
          <div class="row"> 



            <div class="row">


              <br>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="sel1">Tên nhân viên:</label>
                  <input class="form-control" id="txtTenNV2" name="txtTenNV2" placeholder="Nhập tên nhân viên" type="text" >
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="sel1">Giới tính:</label>
                  <select class="form-control" name="selGioiTinh2" id="selGioiTinh2">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                  </select>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12"><label>Ngày sinh:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" data-date-format='yyyy-mm-dd' class="form-control pull-right" name="txtNgaySinh2" id="txtNgaySinh2" readonly> <!--datepicker -->
                  </div>  
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label for="sel1">Địa chỉ:</label>
                  <input class="form-control" id="txtDiaChi2" name="txtDiaChi2" placeholder="Nhập địa chỉ" type="text" >
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label for="sel1">Chọn hình ảnh:</label>
                  <input class="form-control" name="imgSach2" id="imgSach2" type="file" onChange="validate(this.value)">
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12" id="hinhanh">
                <br>
                <img class="img-thumbnail" id="hienthiImg" src="../../../public/dist/img/book-default.png" alt="Hinh-anh-sach">

              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="col-md-6 col-sm-6 col-xs-6">
                <label for="sel1">Số điện thoại:</label>
                <input class="form-control" id="txtSDT2" name="txtSDT2" placeholder="Nhập số điện thoại" type="text" >
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <label for="sel1">Email:</label>
                <input class="form-control" id="txtEmail2" name="txtEmail2" placeholder="Nhập email" type="text" >
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="sel1">Chức vụ:</label>
                <select class="form-control" name="selChucVu2" id="selChucVu2">
                  <option value="0">Nhân viên</option>
                  <option value="1">Quản lý</option>
                </select>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="sel1">Tình trạng tài khoản:</label>
                <select class="form-control" name="selTTTK2" id="selTTTK2">
                  <option value="1">Bình thường</option>
                  <option value="0">Khóa</option>
                </select>
              </div>
            </div>

          </div>



        </div>
        <div class="modal-footer">
         <div class="col-xs-6 col-md-6 text-right">
           <br><label><button type="button" id="btnHuy" class="btn btn-default" data-dismiss="modal">Hủy</button></label>
         </div>

         <div class="col-xs-6 col-md-6 text-left">
           <br><label><button name="btnThemNV2" id="btnThemNV2" type="submit" class="btn btn-primary">Thêm</button></label> 
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
    console.log($(this).data('id'));
    $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('sach/chitiet') ;?>",
      data : {
        id:$(this).data('id')
      },
      success: function(resp){
         // alert("vv");
        // console.log(resp);
        $('#txtMaSach').val(resp.data_info[0].masach);
        $('#txtTenSach').val(resp.data_info[0].tensach);
        $('#txtNgayNhap').val(resp.data_info[0].ngaynhap);
        $('#txtSoLuong').val(resp.data_info[0].soluong);
        $('#txtGiaBan').val(resp.data_info[0].giaban);
        $('#txtTacGia').val(resp.data_info[0].tacgia);
        $('#txtTheLoai').val(resp.data_info[0].theloai);
        $('#txtNXB').val(resp.data_info[0].nhaxuatban);
        $('#txtNCC').val(resp.data_info[0].mancc);
        var hinh="<?php echo base_url().'public/'; ?>dist/img/"+resp.data_info[0].hinhanh;
        $("#imgHinhSach").attr("src",hinh);
      },
      error: function(resp) { alert(JSON.stringify(resp)); }
    });
  });

  $("#btnCapNhat").click(function()
  {
    var dataform = $("#frmSach").serialize();
     // console.log(dataform);

     $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('sach/capnhat') ;?>",
      data : dataform,
      success: function(resp){
        console.log(resp.message);
       //alert(resp.status);
     //  alert("ccc");
     $("#message").text(resp.message);

     setTimeout(window.location.reload(), 2000);
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
      var ma = $(this).data('id');
      var answer = confirm('bạn có muốn xóa mã ' +ma +' không ?');
      if(answer == true)
      {
        $.ajax({
          type: "POST",
          dataType: 'json',
          url:"<?php echo site_url('nhanvien/xoanv') ;?>",
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



  $("#btnThemNV2").click(function(e)
  {
    /** conng thuc de truyen mang va du lieu cung file qua
        * ngan chan su kien submit mac dinh
        * khai bao mot bien formdata -> kieu object thuc hien qua trinh quyen du lieu
        * sirializeArray pass cac input trong form qua
        * day du lieu trong array sizize qua bang cach add no vao data form
    **/
     e.preventDefault();
    if(checkValiate() != false)
    {
   
       var fd = new FormData();    
      fd.append( 'file', $( '#imgSach2' )[0].files[0]  );

      var other_data = $('#frmThemNV').serializeArray();
        $.each(other_data,function(key,input){
            fd.append(input.name,input.value);
        });
        console.log( $( '#imgSach2' )[0].files[0] );
        $.ajax({
          type: "POST",
          processData: false,
          contentType: false,
          url:"<?php echo site_url('nhanvien/themnv') ;?>",
          data : fd,
          success: function(resp){
      if(resp.status == 1)
      {
        console.log(resp);
     $("#message").text(resp.message);
       setTimeout(window.location.reload(), 2000);
      }
        $("#message").text(resp.message);
          },
       error: function(resp) { //alert(JSON.stringify(resp));
          console.log(resp.message);}
      });
      

}
  });



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

$("#imgSach2").change(function(){
  readURL(this);
});

// ./REVIEW IMG

//  VALIDATE FORM NHẬP SÁCH
function checkValiate()
{

    // Get the Login Name value and trim it

    var checkTenNV = $.trim($('#txtTenNV2').val());
    var checNS = $.trim($('#txtNgaySinh2').val());
    // var checkImg=$('img')[3].src;
    // var checkImg2 = checkImg.indexOf("book-default");
   // var checkImg3=$('.hinhanh img').attr('src');

    // Check if empty of not
    if (checkTenNV==='' || checNS==='') 
    {
      alert('Thiếu thông tin vui lòng kiểm tra lại');


    // alert( $('img')[3].src );
    return false;
  }

  
  if($.isNumeric($('#txtSDT2').val()) === false)
  {
   alert('Số điện thoại phải có kiểu số. vui lòng kiểm tra lại');
    return false;
  }


}

// datepicker
$(function()
{
  $("#txtNgaySinh2").datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
    changeMonth: true,
    yearRange: "1950:2017"
  });


  
});

</script>
