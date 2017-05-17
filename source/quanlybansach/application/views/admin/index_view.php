<div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><label>BÁN HÀNG</label></div>
        <div class="panel-body">
          <!-- form-inline-->
          <!-- .................................FORM THÔNG TIN HÀNG HÓA - START ...............................................-->


          <div class=""> 
            <div class="row"> 
              <div class="col-md-offset-1 col-md-12"> 
                <form action="#" method="post" class="form-horizontal" id="frm-hang-hoa"> 
                  <div class="header"><label>Thông tin đơn hàng:</label></div> 
                  <div class="form-content"> 

                    <div class="form-group"> 
                      <div class="col-sm-5"> <input class="form-control" id="txtMaKhachHang" placeholder="Mã khách hàng" type="text"> <label class="control-label" for="exampleInputName2"></label> 
                      </div> 
                      <div class="col-sm-5"> <input class="form-control" id="txtTenKhachHang" placeholder="Tên khách hàng" type="text"> <label class="control-label" for="exampleInputName2"></label> 
                      </div> 
                    </div> 
                    <div class="form-group"> 
                      <div class="col-sm-3"> <input class="form-control" id="txtMaHangHoa" placeholder="Mã hàng hóa" type="text"> <label class="control-label" for="exampleInputName2"></label> 
                      </div> 
                      <div class="col-sm-4"> <input class="form-control" id="txtTenHangHoa" placeholder="Tên hàng hóa" type="text"> <label class="control-label" for="exampleInputName2"></label> 
                      </div> 
                      <div class="col-sm-3"> <input class="form-control" id="txtSoLuong" placeholder="Số lượng" type="text"> <label class="control-label" for="exampleInputName2"></label> 
                      </div> 


                    </div> 

                    <div class="form-group"> 
                     <!-- <div class="col-sm-10"> 
                        <select class="form-control"> 
                          <option value="none" selected="">Chọn giới tính...</option> 
                          <option value="male">Nam</option> 
                          <option value="female">Nữ</option>
                          <option value="other">Khác</option> 
                        </select> 
                      </div> -->
                      <div class="col-sm-5 text-right">
                        <div class="checkbox">
                          <label><input id="chkMaGiamGia" type="checkbox" value="">Áp mã giảm giá</label>
                        </div> 
                      </div>

                      <div class="col-sm-3">
                        <input class="form-control" id="txtMaGiamGia" type="text" disabled="">
                      </div>
                    </div>
                  </div> 

                  <div class="footer clearfix"> 
                    <button type="button" class="btn btn-default">Xác nhận</button> 
                  </div> 
                </form> 
              </div> 
            </div> 
          </div>

          <!-- .................................  FORM THÔNG TIN HÀNG HÓA -END ............................................-->

        </div>

      </div>
      <form id="frm-danh-sach-hang-hoa" action="#" method="post">
        <div class="row"> 
          <div class="col-md-12"> 
            <div style="height:150px;overflow:auto;">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên hàng hóa</th>
                    <th>Số lượng</th>
                    <th>Đươn giá</th>
                    <th>%Giảm giá</th>
                    <th>Thành tiền</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Ba con sâu</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Bốn con sói</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Bảy con sóc</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Ba cá sấu</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Ba  con sâu</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Ba  con sâu</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Ba  con sâu</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Ba  con sâu</td>
                    <td>1</td>
                    <td>100</td>
                    <td>5</td>
                    <td>95000</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="form-group">
              <div class="col-sm-8 text-right">
                <label>Tổng tiền:</label>
              </div>
              <div class="col-sm-3">
                <input class="form-control" id="exampleInputName2" placeholder="0" type="text" readonly="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-6 text-right"> 
                <button id="btnHuyDon" type="submit" class="btn btn-default">Hủy đơn</button> 
              </div> 
              <div class="col-sm-6"> 
                <button id="btnTinhTien" type="submit" class="btn btn-primary">Tính tiền</button> 
                </div> 
            </div>
          </div>
        </div>
      </form>