
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="row">
      <div class="col-md-10 col-sm-10 col-xs-7">
        <label>
         <?php 
         echo $this->session->userdata('userdata')['logged_in'];

         ?>   
       </label>
     </div>
     <div class="col-md-2 col-sm-2 col-xs-5">
      <a href="sach/insert  " data-toggle='modal' data-target='#addBook'><button type="button" class="btn btn-success">
        <span class="glyphicon glyphicon-plus-sign"></span> Thêm sách
      </button>
    </a>
  </div>
</div>
</div>
<div class="panel-body" style="max-height: 800;">
  <form action="#" method="post" class="form-horizontal" id="frm-hang-hoa">
    <div class="header"></div>
    <div class="form-content">
      <div class="form-group">
        <div class="col-sm-5">
          <div class="panel panel-info">
            <div class="panel-heading">Bước 1: chọn nhà cung cấp</div>
            <div class="panel-body">
              <select class="form-control" id="txtMaNCC" placeholder="Mã nhà cung cấp" >
               <option>chọn mã nhà cung cấp</option>
               <?php foreach ($data_nhacc as $key => $value) { ?>
               <option value="<?php echo $value['manhacungcap']; ?>"><?php echo $value['tennhacungcap'];?>   </option>

               <?php  } ?>
             </select>
             <label>thông tin nhân viên</label>
             <p>Mã: <?php echo  $this->session->userdata('userdata')['id'];?> </p>
             <p>Tên: <?php echo  $this->session->userdata('userdata')['username'];?> </p>
           </div>
         </div>
       </div>

       <div class="col-sm-5">
         <div class="panel panel-info">
          <div class="panel-heading">bước 2:  bỏ chọn hoặc thay đổi quy định nhập</div>
          <div class="panel-body">
           <div class="form-group">


            <div class="col-sm-6">
              <label class="control-label" for="">số lượng nhập ít ít nhất</label>
              <input class="form-control" id="txtsoluongnhapitnhat" placeholder="" type="text" name="txtsoluongnhapitnhat" value="<?php echo $data_thamso[0]['giatri']; ?>" readonly/>
              <label class="control-label" for=""></label>
            </div>
            <div class="col-sm-6">
              <label>số lượng tồn ít nhất</label>
              <input class="form-control" id="txtsoluongnhaptonitnhat" placeholder="" type="text" name="txtsoluongnhapitnhat" value="<?php echo $data_thamso[0]['giatri']; ?>" readonly/>
              <label class="control-label" for=""></label>
            </div>
            <div class="col-md-12">
             <input id="checkquydinh" type="checkbox"/>
             <label class="control-label" for="">không áp dụng</label>
             <div class="col-md-6">
              <button type="button" id="btn1" class="btn btn-success">Xác nhận</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
   <button type="button" id="btn1" class="btn btn-success">Xác nhận xong bước 1 và 2</button>
   <div style="margin-top: 20px" class="panel panel-success">
    <div class="panel-heading">bước 3: thêm chi tiết phiếu nhập</div>
    <div class="panel-body">
     <div class="col-md-12">
      <div class="form-group">
        <div class="col-sm-3"> 

          <label class="control-label" for="exampleInputName2">chọn sách</label>
          <select class="form-control" id="txtMaSach" placeholder="Mã Sách" type="text">

           <option value="">chọn mã sách</option>
           <?php foreach ($data_sach as $key => $value) { ?>
           <option value="<?php echo $value['masach']; ?>"><?php echo $value['tensach'];?>   </option>

           <?php  } ?>
         </select>
       </div>
       <div class="col-sm-4"> 
        <label class="control-label" for="exampleInputName2">tên sách</label>
        <input class="form-control" id="txtTenSach" placeholder="Tên Sách" type="text" readonly=""> 
      </div>
      <div class="col-sm-3">
       <label class="control-label" for="exampleInputName2">số lượng tồn hiện tại</label>
       <input class="form-control" id="txtluongton" placeholder="Số lượng" type="text" readonly=""> <label class="control-label" for="exampleInputName2" ></label>
     </div>

     <div class="col-sm-3">
       <label class="control-label" for="exampleInputName2">giá nhập</label>
       <input class="form-control" name="txtgiaban" id="txtgiaban" placeholder="giá nhập"  readonly="" type="text"> <label class="control-label" for="exampleInputName2"></label>
     </div>


   </div>
   <div class="form-group">
     <div class="callout callout-info">
      <h4>thông báo</h4>

      <p>bạn nhân nhập đúng với cấu hình hệ thống </p>
    </div>
    <div class="col-sm-3"> <label>chọn số lượng nhập</label><input class="form-control" id="txtsoluonnhap" placeholder="số lượng nhập" type="text">
    </div>
    <div style="margin-top: 25px;" class="col-sm-3">
      <button type="button" id="btnthemchitiet" class="btn btn-success">Thêm Chi tiết phiếu nhập</button>
    </div>
  </div>

</div>  

</div>
</div>
</div>

</form>

<form id="frm-danh-sach-hang-hoa" action="nhapsach/lapphieunhap" method="post">
  <div class="col-md-12">
    <div style="height:150px;overflow:auto;">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>

            <th>Mã sách</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
    <div class="form-group">
      <div class="col-sm-8 text-right">
        <label>Tổng tiền:</label>
      </div>
      <div class="col-sm-3">
        <input class="form-control" id="exampleInputName2" placeholder="0" type="text" readonly>
      </div>
    </div>
    <div class="col-xs-6 col-md-6 text-right">
      <br><label><button id="btnHuyDon" type="submit" class="btn btn-default">Hủy đơn</button></label>
    </div>

    <div class="col-xs-6 col-md-6 text-left">
      <br><label><button id="btnLapPhieuNhap" type="submit" class="btn btn-primary">Lập phiếu nhập</button></label>
    </div>
  </div>

</form>
</div>
<div class="modal fade col-md-12" id="addBook" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">THÊM SÁCH</h4>
      </div>
      <div class="modal-body">



        <div class="row">
          <div class="col-md-offset-1 col-md-12">
            <form action="#" method="post" class="form-horizontal" id="frm-hang-hoa">
              <!-- <div class="header"><label>Thông tin sách:</label></div> -->
              <div class="form-content">

                <div class="form-group">
                  <div class="col-sm-6">
                    <div class="col-sm-12"><label>Tên sách:</label> <input class="form-control" id="txtTenSach" placeholder="Mã Sách" type="text">
                    </div>
                    <div class="col-sm-6"><label>Mã sách:</label> <input class="form-control" id="txtMaSach" placeholder="Mã Sách" type="text">
                    </div>

                    <div class="col-sm-6"> <label>Ngày nhập:</label><input class="form-control" id="txtNgayNhap" placeholder="Tên sách" type="text" value="<?php echo date("d/m/Y")
                      ?>" readonly>
                    </div>
                    <div class="col-sm-6"><label>Số lượng:</label> <input class="form-control" id="txtMaSach" placeholder="Số lượng" type="text" value="100" readonly>
                    </div>

                    <div class="col-sm-6"> <label>Giá bán:</label> <input class="form-control" id="txtSoLuong" placeholder="Giá bán" type="text" value="100000" readonly>
                    </div>
                  </div>
                  <div class="col-sm-3" style="min-height: 180px;">
                    <br>
                    <img class="img-thumbnail" src="../../dist/img/you-are-the-aple-of-my-eye.jpg" alt="Chania">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <div class="col-sm-5"> <label>Thể loại:</label><input class="form-control" id="txtTheLoai" placeholder="Thể loại" type="text" value="Truyện tình" readonly>
                    </div>
                    <div class="col-sm-5"> <label>Tác giả:</label><input class="form-control" id="txtTacGia" placeholder="Tác giả" type="text">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <div class="col-sm-5"> <label>Nhà xuất bản:</label><input class="form-control" id="txtNXB" placeholder="Nhà xuất bản" type="text" value="Tuổi trẻ" readonly>
                    </div>
                    <div class="col-sm-5"> <label>Nhà cung cấp:</label><input class="form-control" id="txtNCC" placeholder="Nhà cung cấp" type="text" value="ATM Education" readonly>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $('#txtMaSach').on('change', function() {
    alert( this.value );
    $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('sach/chitiet') ;?>",
      data : {
        id: this.value,
      },
      success: function(resp){
        $('#txtluongton').val(resp.data_info[0].soluongton);
        $('#txtgiaban').val(resp.data_info[0].giaban);
      },
      error: function(resp) { alert(JSON.stringify(resp)); }
    });
  });
  /*ham add value vao table */
  var rowCount = 0;
  var sumAll = 0;
  $(document).ready(function(){
    $("#btnthemchitiet").click(function(){
      var MaSach = document.forms["frm-hang-hoa"]["txtMaSach"].value;
      var DonGia = document.forms["frm-hang-hoa"]["txtgiaban"].value;
      var soluong = document.forms["frm-hang-hoa"]["txtsoluonnhap"].value;
      rowCount ++;
      $("tbody").prepend("<tr id='rowCount"+rowCount+"'><td>"+MaSach+"<input type='hidden' name='id[]' value='"+MaSach+"'/></td><td>"+soluong+"<input type='hidden' name='soluong[]' value='"+soluong+"'/></td><td>"+DonGia+"<input type='hidden' name='dongia[]' value='"+DonGia+"'/></td><td class='thanhtien'>"+DonGia*soluong+"<input type='hidden' name='thanhtien[]' value='"+soluong*DonGia+"'/></td><td><a href='javascript:void(0);' onclick='removeRow("+rowCount+");'>Delete</a></td></tr>");
      sumAll+=(DonGia*soluong);
      $("#exampleInputName2").val(sumAll);
    });
  });
  function removeRow(removeNum) {
    jQuery('#rowCount'+removeNum).remove();

  }
  /*lap phieu nhap */
  $('#btnLapPhieuNhap').click(function(e){
    e.preventDefault();
     var dataform = $("#frm-danh-sach-hang-hoa").serialize();
   // console.log(dataform);
  //  var dataSelect: $('#selSachBan').val();
    // console.log(dataSelect);
    var mancc = $('#txtMaNCC').val();
    console.log(mancc);
    console.log(dataform);
    $.ajax({
      type: "POST",
      dataType: 'json',
      url:"<?php echo site_url('nhapsach/lapphieunhap') ;?>",
      data : dataform+ '&mancc=' + mancc,
      success: function(resp){
        alert(resp.message);


        setTimeout(window.location.reload());
      },
   error: function(resp) { //alert(JSON.stringify(resp));
    alert(resp.message);}
  });
    return false;    

  })
</script>