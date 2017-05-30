
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="row">
     <div class="col-md-10 col-sm-10 col-xs-7">

     </div>
     <div class="col-md-2 col-sm-2 col-xs-5">
       <button type="button" class="btn btn-success" id="btnThemNCC"  data-toggle="modal" data-target="#modalThemSach">
        <span class="glyphicon glyphicon-plus-sign"></span> Thêm nhà cung cấp
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
                  STT
                </div>
              </th>

              <th>Mã NCC</th>
              <th>Tên NCC</th>
              <th>SDT</th>
              <th>Địa chỉ</th>
              <th>Email</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $stt =0;
            foreach ($data_info as $key => $value) {
              $stt++;
              $mancc = $value['manhacungcap'];
              ?>
              <tr>
               <td>
                 <div class='text-center'>
                  <?php echo $stt; ?>
                </div>
              </td>
              <td> <?php echo $value['manhacungcap']; ?></td>
              <td><?php echo $value['tennhacungcap']; ?></td>
              <td><?php echo $value['sdt']; ?></td>
              <td><?php echo $value['diachi']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><a class='chitietncc' href='' data-id='<?php echo $mancc ;?>' data-toggle='modal' data-target='#modalThemSach'>Sửa</a></td>
              <td><a class='xoancc' href='' data-id='<?php echo $mancc ;?>' >Xóa</a></td>
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
        <h4 class="modal-title">THÊM NHÀ CUNG CẤP</h4>

        <div class="alert-success" id="message" ">

        </div>
      </div>

      <div class="modal-body">
        <form action="#" method="post" class="form-horizontal" id="frmThemNCC" enctype="multipart/form-data"> 
          <div class="row"> 



            <div class="row">
              <div class="col-md-1 col-sm-1 col-xs-12"></div>
              <div class="col-md-10 col-sm-10 col-xs-12" style="outline: 1px solid orange;">
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                      <label for="sel1">Mã nhà cung cấp:</label>
                      <input class="form-control" id="txtMaNCC" name="txtMaNCC" placeholder="Nhập mã nhà cung cấp" type="text" >
                    </div> -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <label for="sel1">Tên nhà cung cấp:</label>
                      <input class="form-control" id="txtTenNCC" name="txtTenNCC" placeholder="Nhập tên nhà cung cấp" type="text" >
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <label for="sel1">Địa chỉ:</label>
                      <input class="form-control" id="txtDiaChi" name="txtDiaChi" placeholder="Nhập địa chỉ" type="text" >
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <label for="sel1">Số điện thoại:</label>
                      <input class="form-control" id="txtSDT" name="txtSDT" placeholder="Nhập tên số điện thoại" type="text" >
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <label for="sel1">Email:</label>
                      <input class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập tên email" type="text" >
                    </div>
                    <div class="col-md-12 col-sm-21 col-xs-12">
                     &nbsp;
                   </div>
                 </div>

               </div>
             </div>



           </div>
           <div class="modal-footer">
             <div class="col-xs-6 col-md-6 text-right">
               <br><label><button type="button" id="btnHuy" class="btn btn-default" data-dismiss="modal">Hủy</button></label>



             </div>

             <div class="col-xs-6 col-md-6 text-left">
               <br><label><button id="btnThemNCC2" type="submit" class="btn btn-primary">Thêm</button></label> 
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
  $(".chitietncc").click(function(){
    console.log($(this).data('id'));
    $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('nhacungcap/chitiet') ;?>",
      data : {
        id:$(this).data('id')
      },
    // alert($(this).data('id')),
    success: function(resp){
         // alert("vv");
        // console.log(resp);
        // $('#txtMaSach').val(resp.data_info[0].masach);
        // $('#txtTenSach').val(resp.data_info[0].tensach);
        // $('#txtNgayNhap').val(resp.data_info[0].ngaynhap);
        // $('#txtSoLuong').val(resp.data_info[0].soluong);
        // $('#txtGiaBan').val(resp.data_info[0].giaban);
        // $('#txtTacGia').val(resp.data_info[0].tacgia);
        // $('#txtTheLoai').val(resp.data_info[0].theloai);
        // $('#txtNXB').val(resp.data_info[0].nhaxuatban);
        $('#txtTenNCC').val(resp.data_info[0].tenncc);
        $('#txtSDT').val(resp.data_info[0].sdt);
        $('#txtDiaChi').val(resp.data_info[0].diachi);
        $('#txtEmail').val(resp.data_info[0].email);

       
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



  $(".xoancc").click(function()
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
        url:"<?php echo site_url('nhacungcap/xoancc') ;?>",
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



  $("#btnThemNCC2").click(function()
  {
    var dataform = $("#frmThemNCC").serialize();
   // console.log(dataform);
  //  var dataSelect: $('#selSachBan').val();
    // console.log(dataSelect);

    $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('nhacungcap/themncc') ;?>",
      data : dataform,
      success: function(resp){
        alert(resp.message);
      // console.log(resp);


      setTimeout(window.location.reload());
    },
   error: function(resp) { //alert(JSON.stringify(resp));
    alert(resp.message);}
  });
    return false;    


  });








//  VALIDATE FORM thêm NCC
$('#btnThemNCC2').click(function () {

    // Get the Login Name value and trim it

    var checkNameNCC = $.trim($('#txtTenNCC').val());
    // var checkNCCID = $.trim($('#txtM').val());
    var checkAddNCC = $.trim($('#txtDiaChi').val());
    var checkPhoneNCC = $.trim($('#txtSDT').val());
    var checkEmailNCC = $.trim($('#txtEmail').val());


    // Check if empty of not
    if (checkNameNCC==='' || checkAddNCC==='' || checkPhoneNCC==='' || checkEmailNCC==='') 
    {
      alert('Thiếu thông tin vui lòng kiểm tra lại');


    // alert( $('img')[3].src );
    return false;
  }

  
  if($.isNumeric($('#txtSDT').val()) === false)
  {
    alert('Số điện thoại phải có kiểu số. vui lòng kiểm tra lại');
    return false;
  }

  //test email
  var email =checkEmailNCC = $.trim($('#txtEmail').val());
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  
  if(!emailReg.test(email)) {  
    alert("Vui lòng nhập đúng định dạng email. Ví dụ Example@gmail.com");
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
