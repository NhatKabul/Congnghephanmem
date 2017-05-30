
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-7">
                <label>
                   
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

                  <select class="form-control" id="txtMaNCC" placeholder="Mã nhà cung cấp" >
                   <option>chọn mã nhà cung cấp</option>
                   <?php foreach ($data_nhacc as $key => $value) { ?>
                   <option value="<?php echo $value['mancc']; ?>"><?php echo $value['tenncc'];?>   </option>

                 <?php  } ?>
                </select>
                  

                    </div>
                    <div class="col-sm-5"><input class="form-control" id="txtTenNCC" placeholder="Tên nhà cung cấp" type="text" readonly=""> <label class="control-label" for="exampleInputName2"  ></label>
                    </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-3"> <select class="form-control" id="txtMaSach" placeholder="Mã Sách" type="text" disabled="true">
                     <label class="control-label" for="exampleInputName2"  >
                        
                    </label>
                    <option value="">chọn mã sách</option>
                    </select>
                    </div>
                    <div class="col-sm-4"> <input class="form-control" id="txtTenSach" placeholder="Tên Sách" type="text"> <label class="control-label" for="exampleInputName2"></label>
                    </div>
                    <div class="col-sm-3"> <input class="form-control" id="txtSoLuong" placeholder="Số lượng" type="text"> <label class="control-label" for="exampleInputName2"></label>
                    </div>


                </div>
                <div class="form-group">
                    <div class="col-sm-3"> <input class="form-control" id="txtMaNXB" placeholder="Mã Nhà xuất bản" type="text"> <label class="control-label" for="exampleInputName2"></label>
                    </div>
                    <div class="col-sm-4"> <input class="form-control" id="txtTenNXB" placeholder="Tên Nhà xuất bản" type="text"> <label class="control-label" for="exampleInputName2"></label>
                    </div>
                    <div class="col-sm-3"> <input class="form-control" id="txDonGiatSoLuong" placeholder="Đơn giá" type="text"> <label class="control-label" for="exampleInputName2"></label>
                    </div>
                </div>
            </div>
            <div class="footer clearfix">
                <button type="button" id="btn1" class="btn btn-success">Xác nhận</button>
            </div>
        </form>

        <form id="frm-danh-sach-hang-hoa" action="#" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div style="height:150px;overflow:auto;">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Mã sách</th>
                                <th>Tên sách</th>
                                <th>Mã nhà xuất bản</th>
                                <th>Tên nhà xuất bản</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th colspan="2">Thành tiền</th>
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
            </div>
        </form>
    </div>
    <div class="clear-fix"></div>
    <script>
        var rowCount = 0;
        var sumAll = 0;
        $(document).ready(function(){
            $("#btn1").click(function(){
                var MaNCC = document.forms["frm-hang-hoa"]["txtMaNCC"].value;
                var TenNCC = document.forms["frm-hang-hoa"]["txtTenNCC"].value;
                var MaSach = document.forms["frm-hang-hoa"]["txtMaSach"].value;
                var TenSach = document.forms["frm-hang-hoa"]["txtTenSach"].value;
                var SoLuong = document.forms["frm-hang-hoa"]["txtSoLuong"].value;
                var MaNXB = document.forms["frm-hang-hoa"]["txtMaNXB"].value;
                var TenNXB = document.forms["frm-hang-hoa"]["txtTenNXB"].value;
                var DonGia = document.forms["frm-hang-hoa"]["txDonGiatSoLuong"].value;
                rowCount ++;
                $("tbody").prepend("<tr id='rowCount"+rowCount+"'><td>"+MaSach+"</td><td>"+TenSach+"</td><td>"+MaNXB+"</td><td>"+TenNXB+"</td><td>"+SoLuong+"</td><td>"+DonGia+"</td><td>"+SoLuong*DonGia+"</td><td><a href='javascript:void(0);' onclick='removeRow("+rowCount+");'>Delete</a></td></tr>");
                sumAll+=(SoLuong*DonGia);
                $("#exampleInputName2").val(sumAll);
            });
        });
        function removeRow(removeNum) {
            jQuery('#rowCount'+removeNum).remove();

        }
    </script>
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
    <script type="text/javascript">
     $('#txtMaNCC').on('change', function() {   
        alert(this.value);
    var tennc = $("#txtMaNCC").find("option:selected").text();
        if(tennc !='')
        {
            $('#txtTenNCC').val(tennc);
            $('#txtMaSach').prop("disabled", false); 
            /*tien hanh get tat  cac ma sach do vao select box; */;
              $.ajax({
                  type: "POST",
                  dataType: 'json',
                  url:"<?php echo site_url('sach/chitietbynhacc') ;?>",
                  data : {
                    id:this.value
                  },
                  success: function(resp){
                     // alert("vv");
                    // console.log(resp);
                    $("#txtMaSach option[value!='']").remove();
                      $.each(resp.data_info, function(i, item) {
                           
                        $('#txtMaSach').append($('<option>', { 
                                value: item.masach,
                                text : item.tensach 
                        }));
                     });
                    console.log(resp);
                  },
                  error: function(resp) { alert(JSON.stringify(resp)); }
                });

        }
     });
    </script>