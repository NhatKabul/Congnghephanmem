<?php
include_once("/../../layouts/header.php"); 
?>

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
    <!-- ...............................   main navigation ............................................ -->
    <?php
    include_once("/../../layouts/navigation.php"); 
    ?>

    <!-- ..................................   / main navigation ..........................................-->

    <!-- ...............................................Content Wrapper. Contains page content  Nội dung phần content................... -->

    <div class="content-wrapper">







      <!-- ............................................... Panel ................... -->


      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <div class="row">
           <div class="col-md-10 col-sm-10 col-xs-7">
             <label>
               THÔNG BÁO TRẠNG THÁI
      
             </label>

           </div>
           <div class="col-md-2 col-sm-2 col-xs-5">
            <a href="../qlsach/index"><button type="button" class="btn btn-success">
              <span class="glyphicon glyphicon-arrow-left"></span> Quay lại
            </button>
          </a>
        </div>

      </div>
    </div>
    <!-- updateSach-->
    <form id="frmSach" name="frmSach" action="updateSach" method="post" enctype="multipart/form-data">
      <div class="panel-body" style="max-height: 800;overflow-y: scroll;">
      <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class=" box box-info text-center">
            <?php
            if(isset($mess))
            {
              echo "<h3>". $mess."</h3>";
            }
            ?>
          </div>
        </div>
      </div>


      <!-- .................................  MODAL THÔNG TIN SÁCH -END ............................................-->
    </div>


  </form>
</div>

<!--....................   PANEL - END ..................................... -->
<!-- Trigger the modal with a button -->



<!-- ...................... PAGINATION PHÂN TRANG - START ................................-->




<!--........................ PAGINATION PHÂN TRANG - END ....................................-->

</div>
</div>
</div>
<!-- ............................................... /Content Wrapper. Contains page content................... -->

<!-- /.content-wrapper -->
<?php
include_once("/../../layouts/footer.php"); 
?>


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
  $('#chkMaGiamGia').change(function(){
   $("#txtMaGiamGia").prop("disabled", !$(this).is(':checked'));
 });</script>
  <script>
   function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#hienthiImg').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function(){
    readURL(this);
  });
</script>
<script>
  /*$('form').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#log').val());

    // Check if empty of not
    if (name  === '') {
      alert('Text-field is empty.');
      return false;
    }
  });
  */
  $('form').submit(function () {

    // Get the Login Name value and trim it
    var checkID = $.trim($('#txtMaSach').val());
    var checkPrice = $.trim($('#txtGiaBan').val());
    //var checkImg=$('img')[3].src;
    //var checkImg2 = checkImg.indexOf("book-default");
    var checkTenSach = $.trim($('#txtTenSach').val());
    var checkGiaNhap = $.trim($('#txtGiaNhap').val());
    var checkTacGia = $.trim($('#txtTacGia').val());
    var checkNCC = $.trim($('#txtNCC').val());
    var checkNXB = $.trim($('#txtNXB').val());
    var checkSL = $.trim($('#txtSoLuong').val());
    var checkTL = $.trim($('#txtTheLoai').val());
   // var checkImg3=$('.hinhanh img').attr('src');

    // Check if empty of not
    if (checkPrice===''  || checkTenSach==='' || checkGiaNhap==='' || checkTacGia==='' || checkNCC==='' ||checkNXB==='' || checkSL ==='' || checkTL==='') 
    {
      alert('Thiếu thông tin vui lòng kiểm tra lại');


    // alert( $('img')[3].src );
    return false;
  }

  if($.isNumeric($('#txtMaSach').val()) === false)
  {
    alert('Mã sách phải có kiểu số. vui lòng kiểm tra lại');
    return false;
  }
  if($.isNumeric($('#txtGiaBan').val()) === false)
  {
    alert('Giá bán phải có kiểu số. vui lòng kiểm tra lại');
    return false;
  }


});
</script>
<script >
  /*$("#imgInp").change(function () {
    var fileExtension = ['jpeg', 'jpg', 'png', 'bmp'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
   
     alert("Vui lòng chọn hình ảnh có định dạng: "+fileExtension.join(', '));
    
 }
});*/
</script>
<script >
  function validate(file) {
    var ext = file.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["jpg" , "jpeg", "png"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
     // alert("Wrong extension type.");
     alert("Vui lòng chọn hình ảnh có định dạng: "+arrayExtensions.join(', '));
     $("#imgInp").val("");
   }
 }
</script>
</body>
</html>
