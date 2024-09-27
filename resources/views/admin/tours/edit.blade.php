<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18')}}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
  #visitor-lists {
    width: calc(100% - 250px); /* Giảm chiều rộng của bảng để phù hợp với sidebar */
    max-width: 700px; /* Đặt chiều rộng tối đa cho bảng */
    border-collapse: collapse; /* Gộp các đường viền lại với nhau */
    margin-left: auto; /* Căn giữa bảng nếu cần */
    margin-right: auto; /* Căn giữa bảng nếu cần */
}

#visitor-lists th,
#visitor-lists td {
    padding: 8px; /* Giảm khoảng cách giữa nội dung và đường viền */
    border: 1px solid #dee2e6; /* Đường viền cho ô */
    text-align: center; /* Canh giữa nội dung */
    vertical-align: middle; /* Canh giữa theo chiều dọc */
    overflow: hidden; /* Ẩn phần nội dung tràn ra ngoài */
    text-overflow: ellipsis; /* Hiển thị dấu "..." khi nội dung quá dài */
    white-space: nowrap; /* Ngăn không cho văn bản xuống dòng */
}

#visitor-lists th:nth-child(1),
#visitor-lists td:nth-child(1) {
    max-width: 60px; /* Giới hạn chiều rộng cho cột STT */
}

#visitor-lists th:nth-child(2),
#visitor-lists td:nth-child(2) {
    max-width: 120px; /* Giới hạn chiều rộng cho cột Name */
}

#visitor-lists th:nth-child(3),
#visitor-lists td:nth-child(3) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Price */
}

#visitor-lists th:nth-child(4),
#visitor-lists td:nth-child(4) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Image */
}

#visitor-lists th:nth-child(5),
#visitor-lists td:nth-child(5) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Location */
}

#visitor-lists th:nth-child(6),
#visitor-lists td:nth-child(6) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Features */
}

#visitor-lists th:nth-child(7),
#visitor-lists td:nth-child(7) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Best Time */
}

#visitor-lists th:nth-child(8),
#visitor-lists td:nth-child(8) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Directions */
}

#visitor-lists th:nth-child(9),
#visitor-lists td:nth-child(9) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Checking Routes */
}

#visitor-lists th:nth-child(10),
#visitor-lists td:nth-child(10) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Items */
}

#visitor-lists th:nth-child(11),
#visitor-lists td:nth-child(11) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Cautions */
}

#visitor-lists th:nth-child(12),
#visitor-lists td:nth-child(12) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Requirements */
}

#visitor-lists th:nth-child(13),
#visitor-lists td:nth-child(13) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Edit */
}

#visitor-lists th:nth-child(14),
#visitor-lists td:nth-child(14) {
    max-width: 80px; /* Giới hạn chiều rộng cho cột Delete */
}

/* Responsive Style */
@media (max-width: 768px) {
    #visitor-lists th,
    #visitor-lists td {
        font-size: 12px; /* Giảm kích thước chữ trên màn hình nhỏ */
    }
}
}

</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('AdminLTE-2.4.18')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  {{-- <span class="hidden-xs">{{auth()->user()->name }}</span> --}}
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('AdminLTE-2.4.18')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p>
                       {{-- {{auth()->user()->name }}--}}
                      <small>Member since Aug. 2024</small>
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
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('AdminLTE-2.4.18') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    {{--<p>{{auth()->user()->name }}</p>--}}
                    {{--  <p>{{auth()->user()->name }}</p> --}}
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                  
                  <a href="/admin/UserManagement">
                    <i class="fa fa-th"></i> <span>User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                <li class="treeview">
                  <a href="/admin/tours">
                    <i class="fa fa-edit"></i> <span>Tour</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="/admin/order">
                    <i class="fa fa-table"></i> <span>Order</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="/admin/galleries">
                    <i class="fa fa-share"></i> <span>Galleries</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="/admin/branches">
                    <i class="fa fa-share"></i> <span>Branches</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
              </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="container">
        <h1>Edit Tour</h1>
        <form action="{{ route('admin.tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <!-- Tên tour -->
            <div class="form-group">
                <label for="name">Tour Name</label>
                <input type="text" name="name" class="form-control" value="{{ $tour->name }}" required>
            </div>
    
            <!-- Giá tour -->
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $tour->price }}" required>
            </div>
    
            <!-- Địa điểm -->
            <div class="form-group">
                <label for="location">Location</label>
                <textarea name="location" class="form-control" required>{{ $tour->location }}</textarea>
            </div>
    
            <!-- Tính năng -->
            <div class="form-group">
                <label for="features">Features</label>
                <textarea name="features" class="form-control" required>{{ $tour->features }}</textarea>
            </div>
    
            <!-- Thời điểm tốt nhất -->
            <div class="form-group">
                <label for="besttime">Best Time</label>
                <textarea name="besttime" class="form-control" required>{{ $tour->besttime }}</textarea>
            </div>
    
            <!-- Hướng dẫn đường đi -->
            <div class="form-group">
                <label for="directions">Directions</label>
                <textarea name="directions" class="form-control" required>{{ $tour->directions }}</textarea>
            </div>
    
            <!-- Tuyến đường trekking -->
            <div class="form-group">
                <label for="trekkingroutes">Trekking Routes</label>
                <textarea name="trekkingroutes" class="form-control" required>{{ $tour->trekkingroutes }}</textarea>
            </div>
    
            <!-- Vật dụng cần mang -->
            <div class="form-group">
                <label for="items">Items</label>
                <textarea name="items" class="form-control">{{ $tour->items }}</textarea>
            </div>
    
            <!-- Lưu ý -->
            <div class="form-group">
                <label for="cautions">Cautions</label>
                <textarea name="cautions" class="form-control">{{ $tour->cautions }}</textarea>
            </div>
    
            <!-- Yêu cầu -->
            <div class="form-group">
                <label for="requirements">Requirements</label>
                <textarea name="requirements" class="form-control" required>{{ $tour->requirements }}</textarea>
            </div>
    
            <!-- Hình ảnh -->
            <div class="form-group">
                <label for="image">Image</label>
                @if($tour->image)
                    <img src="{{ asset($tour->image) }}" alt="{{ $tour->name }}" style="width: 100px; height: 100px;">
                @endif
                <input type="file" name="image" class="form-control">
            </div>
    
            <button type="submit" class="btn btn-primary">Update Tour</button>
        </form>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
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

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
