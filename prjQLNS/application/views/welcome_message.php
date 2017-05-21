<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<noscript><meta http-equiv="refresh" content="0;url=index.php/default/noscript"></noscript>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SKTN Bookstore1</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->

  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="public/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="public/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SKTN</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SKTN &nbsp</b>Bookstore</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#trong123">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/trong.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Lường Văn Trọng</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/trong.jpg" class="img-circle" alt="User Image">

                  <p>

                    Quản lý
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar" id="cc">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/trong.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Lường Văn Trọng</p>
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
          <li class="active treeview"> <!-- class active => menu con của bán hàng luôn dc sổ sẵn-->
            <a href="#">
              <i class="fa fa-tasks"></i> <span>Bán sách</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="pages/banhang/banhang2.html"><i class="fa fa-circle-o"></i> Bán lẻ</a></li>
              <li><a href="pages/banhang/banhang2.html"><i class="fa fa-circle-o"></i> Bán sỉ</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="pages/NhapSach/nhapsach.html">
              <i class="fa fa-cart-plus"></i>
              <span>Nhập sách</span>
              <span class="pull-right-container">


              </span>
            </a>
          <!--<ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Lập phiếu nhập</a></li>
          </ul>-->
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Quản lý</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>

            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/quanly/qlsach.html"><i class="fa fa-circle-o"></i> Quản lý sách</a></li>
            <li><a href="pages/quanly/qltheloai.html"><i class="fa fa-circle-o"></i> Quản lý Thể loại</a></li>
            <li><a href="pages/quanly/qlncc.html"><i class="fa fa-circle-o"></i> Quản lý NCC</a></li>
            <li><a href="pages/quanly/qlkhachhang.html"><i class="fa fa-circle-o"></i> Quản lý Khách hàng</a></li>
            <li><a href="pages/quanly/qlhoadon.html"><i class="fa fa-circle-o"></i> Quản lý Hóa đơn</a></li>
            <li><a href="pages/quanly/qlphieunhap.html"><i class="fa fa-circle-o"></i> Quản lý Phiếu nhập</a></li>
            <li><a href="pages/quanly/qlmagiamgia.html"><i class="fa fa-circle-o"></i> Quản lý Mã giảm giá</a></li>
            <li><a href="pages/quanly/qlnhanvien.html"><i class="fa fa-circle-o"></i> Quản lý Nhân viên</a></li>
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
            <li><a href="pages/ThongKe/thongkethang.html"><i class="fa fa-circle-o"></i> Thống kê tháng</a></li>
            <li><a href="pages/ThongKe/thongkenam.html"><i class="fa fa-circle-o"></i> Thống kê năm</a></li>

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
            <li><a href="pages/ThayDoiQuyDinh/qdNhap.html"><i class="fa fa-circle-o"></i> Quy định nhập</a></li>
            <li><a href="pages/ThayDoiQuyDinh/qdDuNoKH.html"><i class="fa fa-circle-o"></i> Quy định dư nợ khách hàng</a></li>

            


          </ul>
        </li>
        <li class="treeview">
          <a href="#">
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

  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thông báo:

      </h1>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            Có 1 con đường mang tên là tình yêu<br>
            Khi tôi bước 1 mình đếm những nỗi .....cô đơn<br>
            Đếm trong từng làn gió thoảng, đếm trong từng hạt mưa bay.<br>
            Đến đây từng tia nắng sớm mai, đến khi ngàn ánh sao rơi trong bóng đêm... Có 1 con đường, mang tên là tình yêu...<br>
            Một ngày khi em đến....., sánh bước đi cùng tôi...<br>
            Có nắng ấm giữa mùa đông, có tiếng hát trong con tim ---cô đơn bấy lâu<br>
            Náo ngờ đâu duyên số..... em đi với tôi 1 đoạn thôi..<br>
            Bóng em xa khuất dần.....<br>
            giấu nước mắt nghe cô đơn em quay về..<br>
            Và giờ đây thêm nỗi nhớ em, quấn quanh đêm đêm....<br>
            Và giờ tôi không muốn,... đi tiếp đoạn đường kia....<br>
            Ngày em xa tôi,.........giấc mơ kia đã tan rồi<br>
            Chỉ có thể yêu em thôi, tình này trao đên em rồi.............!! !!!<br>
            từng đêm tôi vẫn mơ về.....<br>
            Ở đoạn cuối con đường........có em.....<br>
            Lời 2
            Có 1 con đường, mang tên là tình yêu.<br>
            khi tôi bước 1 mình, đếm những nỗi ...cô đơn.<br>
            Đếm trong từng làn gió thoảng,đếm trong từng hạt mưa bay.<br>
            Đến đây từng tia nắng sớm mai, đến khi ngàn ánh sao rơi trong bóng đêm...<br>
            Có 1 con đường, mang tên là tình yêu...<br>
            Một ngày khi em đến....., sánh bước đi cùng tôi...<br>
            Có nắng ấm giữa mùa đông, có tiếng hát trong con tim ---cô đơn bấy lâu<br>
            Nào ngờ đâu duyên số em đi với tôi 1 đoạn thôi...<br>
            Bóng em xa khuất dần, giấu nước mắt nghe cô đơn em quay về<br>
            Và giờ đây thêm nỗi nhớ em, quấn quanh đêm đêm....<br>
            Và giờ tôi không muốn... đi tiếp đoạn đường kia<br>
            Ngày em xa tôi,.........giấc mơ kia đã tan rồi..<br>
            Chỉ có thể.....yêu em thôi, tình này trao đên em rồi.......<br>
            Và từng đêm tôi vẫn mơ về.....ở đoạn cuối con đường........có em...<br>
            Có 1 con đường, mang tên là tình yêu.<br>
            khi tôi bước 1 mình, đếm những nỗi ...cô đơn.<br>
            Đếm trong từng làn gió thoảng,đếm trong từng hạt mưa bay.<br>
            Đến đây từng tia nắng sớm mai, đến khi ngàn ánh sao rơi trong bóng đêm...trên bầu trời....<br>
          </div>
        </div>
      </div>




    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX content-->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>