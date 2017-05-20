<?php
include_once("/../../layouts/header.php"); 
?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SKTN</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SKTN &nbsp</b>Bookstore</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

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
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../dist/img/trong.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Lường Văn Trọng</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../dist/img/trong.jpg" class="img-circle" alt="User Image">

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
    <!-- ...............................  Slidebar main ............................................ -->

    <?php
    include_once("/../../layouts/navigation.php"); 
    ?>
  <!-- ..................................   /slidebar main ..........................................-->

  <!-- ...............................................Content Wrapper. Contains page content  Nội dung phần content................... -->
  
  <div class="content-wrapper">







    <!-- ............................................... Panel ................... -->


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
          <a href="../themsach/index"><button type="button" class="btn btn-success">
            <span class="glyphicon glyphicon-plus-sign"></span> Thêm sách
          </button>
        </a>
      </div>
    </div>
  </div>
  <div class="panel-body" style="max-height: 800;overflow-y: scroll;">
    <!-- form-inline-->
    <!-- .................................TABLE LIST THÔNG TIN SÁCH - START ...............................................-->


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

                foreach ($data_info as $key => $value) {
                /*foreach ($key as $key1 => $value1)
                {
                 // echo "$key1 : $value1";
                  echo"<pre>";
               print_r($value1);
               echo"</pre>";
             }*/
               /*echo"<pre>";
               print_r($value);
               echo"</pre>";*/
               $masach = $value['masach'];
             //  $masach2=$_POST[$masach];
               echo"                 
               <tr>
                 <td>
                   <div class='text-center'>
                    <input id='chkCheckAll' type='checkbox' value=''>
                  </div>
                </td>

                <td>".$value['masach']."</td>
                <td>".$value['tensach']."</td>
                <td><a href='#' data-toggle='modal' data-target='#myModal'>Chi tiết</a></td>

                <td><a href='../../default/suasach/index?masach=$masach'>Sửa</a></td>
                <td><a href='../../default/xoasach/index?masach=$masach'>Xóa</a></td>
              </tr>";
             // echo$value['masach'].$value['tensach']."<br>";
            }
            ?>
          </tbody>
        </table>
            <!--<table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>
                  <div class="text-center">
                    <input id="chkCheckAll" type="checkbox" value="">
                  </div>
                </th>
                <th>STT</th>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Chi tiết</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="text-center">
                    <input id="chkCheckAll" type="checkbox" value="">
                  </div>
                </td>
                <td>1</td>
                <td>01</td>
                <td>You are the aple of my eye</td>
                    <td><a href='#' data-toggle='modal' data-target='#myModal'>Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>2</td>
                    <td>02</td>
                    <td>How i met your mother</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>3</td>
                    <td>03</td>
                    <td>Doreamon</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>4</td>
                    <td>04</td>
                    <td>Sói già phố wall</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>5</td>
                    <td>05</td>
                    <td>Tôi thấy hoa vàng trên cỏ xanh</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>1</td>
                    <td>01</td>
                    <td>You are the aple of my eye</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>1</td>
                    <td>01</td>
                    <td>You are the aple of my eye</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>1</td>
                    <td>01</td>
                    <td>You are the aple of my eye</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>1</td>
                    <td>01</td>
                    <td>You are the aple of my eye</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="text-center">
                        <input id="chkCheckAll" type="checkbox" value="">
                      </div>
                    </td>
                    <td>1</td>
                    <td>01</td>
                    <td>You are the aple of my eye</td>
                    <td><a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a></td>
                    <td><a href="#">Sửa</a></td>
                    <td>Xóa</td>
                  </tr>

                </tbody>
              </table>-->
              <?php
           ////////////////////////////////////////////////////////////////////////// echo $data;
              ?>
            </div>

          </div>
        </div> 
      </div>

      <!-- .................................  TABLE LIST THÔNG TIN SÁCH -END ............................................-->

      <!-- .................................  MODAL THÔNG TIN SÁCH -START ............................................-->
      <!-- Modal -->
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
    <!-- .................................  MODAL THÔNG TIN SÁCH -END ............................................-->
  </div>

</div>

<!--....................   PANEL - END ..................................... -->
<!-- Trigger the modal with a button -->



<!-- ...................... PAGINATION PHÂN TRANG - START ................................-->
<?php echo$this->pagination->create_links();?>
<?php
echo $xxx;
?>
<!--
<div class="row"> 
  <div class="col-md-11 text-right"> 
    <div style="height:auto;overflow:auto;">
      <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div>


  </div>
</div>
-->

<!--........................ PAGINATION PHÂN TRANG - END ....................................-->

</div>
</div>
</div>
<!-- ............................................... /Content Wrapper. Contains page content................... -->

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
<script src="../../../public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../public/bootstrap/js/bootstrap.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../../public/plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="../../../public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../public/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
      {
        label: "Electronics",
        fillColor: "rgba(210, 214, 222, 1)",
        strokeColor: "rgba(210, 214, 222, 1)",
        pointColor: "rgba(210, 214, 222, 1)",
        pointStrokeColor: "#c1c7d1",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: "Digital Goods",
        fillColor: "rgba(60,141,188,0.9)",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: [28, 48, 40, 19, 86, 27, 90]
      }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
    {
      value: 700,
      color: "#f56954",
      highlight: "#f56954",
      label: "Chrome"
    },
    {
      value: 500,
      color: "#00a65a",
      highlight: "#00a65a",
      label: "IE"
    },
    {
      value: 400,
      color: "#f39c12",
      highlight: "#f39c12",
      label: "FireFox"
    },
    {
      value: 600,
      color: "#00c0ef",
      highlight: "#00c0ef",
      label: "Safari"
    },
    {
      value: 300,
      color: "#3c8dbc",
      highlight: "#3c8dbc",
      label: "Opera"
    },
    {
      value: 100,
      color: "#d2d6de",
      highlight: "#d2d6de",
      label: "Navigator"
    }
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>

<script>
  $('#chkMaGiamGia').change(function(){
   $("#txtMaGiamGia").prop("disabled", !$(this).is(':checked'));
 });</script>
</body>
</html>
