
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="row">
     <div class="col-md-10 col-sm-10 col-xs-7">
       <label>
         QUẢN LÝ SÁCH
       </label>
     </div>
     <div class="col-md-2 col-sm-2 col-xs-5">
      <a href="sach/insert  "><button type="button" class="btn btn-success">
        <span class="glyphicon glyphicon-plus-sign"></span> Thêm sách
      </button>
    </a>
  </div>
</div>
</div>
<div class="panel-body" style="max-height: 800;overflow-y: scroll;">
  <div class=""> 
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

                <th>Mã Sách</th>
                <th>Tên Sách</th>

                <th>Sửa</th>
                <th>Xóa</th>
              </tr>

            </thead>
            <tbody>
              <?php 
              $stt =0;
              foreach ($data_info as $key => $value) {
                $stt++;
                $masach = $value['masach'];
                ?>
                
                <tr>
                 <td>
                   <div class='text-center'>
                    <?php echo $stt; ?>
                  </div>
                </td>

                <td> <?php echo $value['masach']; ?></td>
                <td><?php echo $value['tensach']; ?></td>


                <td><a class='chitietsach' href='' data-id='<?php echo $masach ;?>' data-toggle='modal' data-target='#myModal'>Sửa</a></td>
                <td><a href='#'>Xóa</a></td>
              </tr>
              <?php   } ?>

            </tbody>
          </table>
        </div>
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
             <!-- <div class="header"><label>Thông tin sách:</label></div> -->
             <div class="form-content"> 

              <div class="form-group">
                <div class="col-sm-6">
                  <div class="col-sm-12"><label>Tên sách:</label> <input class="form-control" name="txtTenSach" id="txtTenSach" placeholder="Tên Sách" type="text" value="" >  
                  </div>
                  <div class="col-sm-6"><label>Mã sách:</label> <input class="form-control" name="txtMaSach" id="txtMaSach" placeholder="Mã Sách" type="text" value=""  readonly>  
                  </div> 

                  <!--<div class="col-sm-6"> <label>Ngày nhập:</label><input class="form-control" id="txtNgayNhap" placeholder="Tên sách" type="text" value="" >
                </div> -->
                <div class="col-sm-6"> <label>Ngày nhập:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" name="txtNgayNhap" id="txtNgayNhap"> <!--datepicker -->
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

                 <!-- <div class="footer clearfix"> 
                    <button type="button" class="btn btn-default">Xác nhận</button> 
                  </div> -->

                </div> 
              </div> 



            </div>
            <div class="modal-footer">
             <div class="col-xs-6 col-md-6 text-right">
               <br><label><button id="btnHuy" type="submit" class="btn btn-default">Hủy</button></label> 
             </div>

             <div class="col-xs-6 col-md-6 text-left">
               <br><label><button id="btnCapNhat" type="submit" class="btn btn-primary">Cập nhật</button></label> 
             </div>
           </div>
         </div>
       </div>
     </div>
   </form> 
   <div class="row"></div>
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


 </script>

