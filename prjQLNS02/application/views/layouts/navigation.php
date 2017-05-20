    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar" id="cc">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/trong.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Lường Văn Trọng1</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class=""> <!-- class active => menu con của bán hàng luôn dc sổ sẵn-->
            <a href="#">
              <i class="fa fa-tasks"></i> <span>Bán sách</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../banhang/banhang2.html"><i class="fa fa-circle-o"></i> Bán lẻ</a></li>
              <li><a href="../banhang/banhang2.html"><i class="fa fa-circle-o"></i> Bán sỉ</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="../NhapSach/nhapsach.html">
              <i class="fa fa-cart-plus"></i>
              <span>Nhập sách</span>
              <span class="pull-right-container">


              </span>
            </a>
          <!--<ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Lập phiếu nhập</a></li>
          </ul>-->
        </li>
        <li <?php if($title=="Thêm Sách" || $title=="Quản lý Sách")echo "class='active treeview'"; ?> >
          <a href="#">
            <i class="fa fa-th"></i> <span>Quản lý</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>

            </span>
          </a>
          <ul class="treeview-menu">
          <li <?php if($title=="Thêm Sách" || $title=="Quản lý Sách")echo "class='active'"; ?>  ><a href="qlsach.html"><i class="fa fa-circle-o"></i> Quản lý sách</a></li>
            <li><a href="qltheloai.html"><i class="fa fa-circle-o"></i> Quản lý Thể loại</a></li>
            <li><a href="qlncc.html"><i class="fa fa-circle-o"></i> Quản lý NCC</a></li>
            <li><a href="qlkhachhang.html"><i class="fa fa-circle-o"></i> Quản lý Khách hàng</a></li>
            <li><a href="qlhoadon.html"><i class="fa fa-circle-o"></i> Quản lý Hóa đơn</a></li>
            <li><a href="qlphieunhap.html"><i class="fa fa-circle-o"></i> Quản lý Phiếu nhập</a></li>
            <li><a href="qlmagiamgia.html"><i class="fa fa-circle-o"></i> Quản lý Mã giảm giá</a></li>
            <li><a href="qlnhanvien.html"><i class="fa fa-circle-o"></i> Quản lý Nhân viên</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Thống kê - Báo cáo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../ThongKe/thongkethang.html"><i class="fa fa-circle-o"></i> Thống kê tháng</a></li>
            <li><a href="../ThongKe/thongkenam.html"><i class="fa fa-circle-o"></i> Thống kê năm</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Thay đổi qui định</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../ThayDoiQuyDinh/qdNhap.html"><i class="fa fa-circle-o"></i> Quy định nhập</a></li>
            <li><a href="../ThayDoiQuyDinh/qdDuNoKH.html"><i class="fa fa-circle-o"></i> Quy định dư nợ khách hàng</a></li>

            


          </ul>
        </li>
        <li class="treeview">
          <a href="../VietThongBao/viethongbao.html">
            <i class="fa fa-edit"></i> <span>Viết thông báo</span>

            <span class="pull-right-container">

            </span>
          </a>

        </li>

        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Lịch - Sự kiện</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              
            </span>
          </a>
        </li>

        

      </ul> 
      <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    </section>
    <!-- /.sidebar -->
  </aside>