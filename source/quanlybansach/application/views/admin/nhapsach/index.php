
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
                <th>Chi tiết</th>
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
                     <td><?php $value['tensach']; ?></td>
                     <td><a class='chitietsach' href='#?masach1=$masach' data-id="<?php echo $masach ?>" data-toggle='modal' data-target='#myModal'>Chi tiết</a></td>

                     <td><a href='#'>Sửa</a></td>
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
            </div>
            <div class="modal-body">



              <div class="row"> 
                <div class="col-md-offset-1 col-md-12"> 
                  <form action="#" method="post" class="form-horizontal" id="frm-hang-hoa"> 
                   <!-- <div class="header"><label>Thông tin sách:</label></div> -->
                   <div class="form-content"> 

                    <div class="form-group">
                      <div class="col-sm-6">
                        <div class="col-sm-12"><label>Tên sách:</label> <input class="form-control" id="txtTenSach" placeholder="Mã Sách" type="text" value="You are the aple of my eye" readonly>  
                        </div>
                        <div class="col-sm-6"><label>Mã sách:</label> <input class="form-control" id="txtMaSach" placeholder="Mã Sách" type="text" value="01" readonly>  
                        </div> 

                        <div class="col-sm-6"> <label>Ngày nhập:</label><input class="form-control" id="txtNgayNhap" placeholder="Tên sách" type="text" value="1/1/2017" readonly>
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
                        <div class="col-sm-5"> <label>Tác giả:</label><input class="form-control" id="txtTacGia" placeholder="Tác giả" type="text" value="Cửu Bả Đao" readonly> 
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

                 <!-- <div class="footer clearfix"> 
                    <button type="button" class="btn btn-default">Xác nhận</button> 
                  </div> -->
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