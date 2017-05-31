
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="row">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissable fade in hidden">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
    </div>
     <div class="col-md-8 col-sm-6 col-xs-7">
     <form action="sach/timkiem" method="get">
         <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button"  class="btn btn-default dropdown-toggle btnfilter" data-toggle="dropdown">Tìm kiếm theo</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#ma">Mã </a></li>
                      <li><a href="#ten">Tên</a></li>
                      
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="query" placeholder="Tìm kiếm theo...">
                <span class="input-group-btn">
                    <button class="btn btn-default" name="search" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
           </form>
     </div>
     <div class="col-md-4 col-sm-6 col-xs-5">
     <div class="btn-group">
       <button type="button" class="btn btn-success" id="btnThemSach"  data-toggle="modal" data-target="#modalThemSach">
        <span class="glyphicon glyphicon-plus-sign"></span> THÊM
      </button>
      <button type="button" class="btn btn-danger" id="btnxoasach">
        <span class="glyphicon glyphicon-trash"></span> XÓA
      </button>
      <button type="button" class="btn btn-info" id="btnThemSach">
        <span class="glyphicon glyphicon-save-file"></span> <a href="<?php echo base_url('nhanvien/export'); ?>"> EXPORT EXCEL</a>
      </button>
      </div>
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
                  <input id="chkCheckAll" type="checkbox" value=""/>
                </div>
              </th>
              <th>STT</th>
              <th>Mã Sách</th>
              <th>ngày phát sinh</th>
              <th>lý do</th>
              <th>tồn đầu</th>
              <th>tồn cuối</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $stt =0;
            foreach ($data_info as $key => $value) {
              $stt++;
              $masach = $value['id'];
              ?>
              <tr>
              <td class="text-center">
               <input class="checkitem" type="checkbox" name="checkitem[]" value="<?php echo $masach; ?>">
              </td>
               <td>
                 
                  <?php echo $stt; ?>
                
              </td>
              <td> <?php echo $value['masach']; ?></td>
              <td><?php echo $value['ngayphatsinh']; ?></td>
              <td><?php echo $value['phatsinh']; ?></td>
              <td><?php echo $value['tondau']; ?></td>
              <td><?php echo $value['toncuoi']; ?></td>
              <td><?php
               if($value['status']==1){ 
                echo '<span class="label label-success">còn bán</span>';
                }
                 else echo '<span class="label label-warning">hết bán</span>';
                  ?>
                   
                 </td>
              <td><a class='xoasach' href='' data-id='<?php echo $masach ;?>' ><i class="glyphicon glyphicon-trash" style="color: red"></i></a><span style="padding: 10px">|</span><a class='chitietsach' href='' data-id='<?php echo $masach ;?>' data-toggle='modal' data-target='#myModal'><i class="glyphicon glyphicon-edit" style="color: green"></i></a></td>
            </tr>
            <?php }?>
                     </tbody>

        </table>
        <div class="col-md-offset-6 col-md-6"><?php echo $links; ?></div>
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
        <h4 class="modal-title">THÔNG TIN SÁCH</h4>

        <div class="alert-success" id="message" ">

        </div>
      </div>

      <div class="modal-body">
        <div class="row"> 
          <div class="col-md-offset-1 col-md-12"> 
            <form action="#" method="post" class="form-horizontal" id="frmSach" enctype="multipart/form-data"> 
             <div class="form-content"> 

              <div class="form-group">
                <div class="col-sm-6">
                  <div class="col-sm-12"><label>Tên sách:</label> <input class="form-control" name="txtTenSach" id="txtTenSach" placeholder="Tên Sách" type="text" value="" >  
                  </div>
                  <div class="col-sm-6"><label>Mã sách:</label> <input class="form-control" name="txtMaSach" id="txtMaSach" placeholder="Mã Sách" type="text" value=""  readonly>  
                  </div> 

                <div class="col-sm-6"> <label>Ngày nhập:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" data-date-format='yyyy-mm-dd' class="form-control pull-right" name="txtNgayNhap" id="txtNgayNhap" readonly> <!--datepicker -->
                  </div>
                </div>

                <div class="col-sm-6"><label>Số lượng:</label> <input class="form-control" name="txtSoLuong" id="txtSoLuong" placeholder="Số lượng" type="text" value="" >  
                </div> 

                <div class="col-sm-6"> <label>Giá bán:</label> <input class="form-control" name="txtGiaBan" id="txtGiaBan" placeholder="Giá bán" type="text" value="" >
                </div> 
              </div>
              <div class="col-sm-3" style="min-height: 180px;">
                <br>
                <img class="img-thumbnail" name="imgHinhSach" id="imgHinhSach" src="" alt="Chania"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <div class="col-sm-5"> <label>Thể loại:</label><input class="form-control" name="txtTheLoai" id="txtTheLoai" placeholder="Thể loại" type="text" value="" > 
                </div> 
                <div class="col-sm-5"> <label>Tác giả:</label><input class="form-control" name="txtTacGia" id="txtTacGia" placeholder="Tác giả" type="text" value="" > 
                </div> 
              </div> 
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <div class="col-sm-5"> <label>Nhà xuất bản:</label><input class="form-control" name="txtNXB" id="txtNXB" placeholder="Nhà xuất bản" type="text" value="" > 
                </div> 
                <div class="col-sm-5"> <label>Nhà cung cấp:</label><input class="form-control" name="txtNCC" id="txtNCC" placeholder="Nhà cung cấp" type="text" value="" > 
                </div> 
              </div> 
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
               <br><label><button name="btnCapNhat" id="btnCapNhat" type="submit" class="btn btn-primary">Cập nhật</button></label> 
             </div>
           </div>
         </div>
       </div>
     </div>
   </form> 
   <div class="row"></div>

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
                            echo "<option>".$value['masach']."-".$value['tensach']."-".$value['gianhap']." VNĐ"."</option>";
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
    console.log($(this).data('id'));
    $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('sach/chitiet') ;?>",
      data : {
        id:$(this).data('id')
      },
      success: function(resp){
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
     $("#message").text(resp.message);

     setTimeout(window.location.reload(), 2000);
   },
   error: function(resp) { alert(JSON.stringify(resp)); }
 });
     return false;    
   });



  $(".xoasach").click(function()
  {
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
/* xoa nhieu sach */
 $('#btnxoasach').click(function(){
    var arr = [];
    $('input.checkitem:checkbox:checked').each(function () {
    arr.push($(this).val());  
    
  });
    var qa = confirm("bán muốn xóa không ??");
    if(qa== true)
    {
      $.ajax({
        type: "POST",
        dataType: 'json',
        url:"<?php echo site_url('sach/xoanhieusach') ;?>",
        data : {
          id:arr
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
});
</script>
