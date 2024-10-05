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
  <style>
  #messageBox {
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      display: block; /* Hiển thị mặc định để kiểm tra */
  }
  .success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
  }
  .error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
  }
    #visitor-lists {
      width: calc(100% - 250px); /* Giảm chiều rộng của bảng để phù hợp với sidebar */
      max-width: 700px; /* Đặt chiều rộng tối đa cho bảng */
      border-collapse: collapse; /* Gộp các đường viền lại với nhau */
      /*margin-left: auto; /* Căn giữa bảng nếu cần */
      /*margin-right: auto; /* Căn giữa bảng nếu cần */
  }

  #visitor-lists th,
  #visitor-lists td {
      padding: 8px; /* Giảm khoảng cách giữa nội dung và đường viền */
      border: 1px solid #dee2e6; /* Đường viền cho ô */
      text-align: left; /* Canh giữa nội dung */
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
      max-width: 250px; /* Giới hạn chiều rộng cho cột Name */
  }

  #visitor-lists th:nth-child(3),
  #visitor-lists td:nth-child(3) {
      max-width: 80px; /* Giới hạn chiều rộng cho cột Price */
  }

  #visitor-lists th:nth-child(4),
  #visitor-lists td:nth-child(4) {
      max-width: 150px; /* Giới hạn chiều rộng cho cột Image */
  }

  #visitor-lists th:nth-child(5),
  #visitor-lists td:nth-child(5) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Location */
  }

  #visitor-lists th:nth-child(6),
  #visitor-lists td:nth-child(6) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Features */
  }

  #visitor-lists th:nth-child(7),
  #visitor-lists td:nth-child(7) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Best Time */
  }

  #visitor-lists th:nth-child(8),
  #visitor-lists td:nth-child(8) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Directions */
  }

  #visitor-lists th:nth-child(9),
  #visitor-lists td:nth-child(9) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Checking Routes */
  }

  #visitor-lists th:nth-child(10),
  #visitor-lists td:nth-child(10) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Items */
  }

  #visitor-lists th:nth-child(11),
  #visitor-lists td:nth-child(11) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Cautions */
  }

  #visitor-lists th:nth-child(12),
  #visitor-lists td:nth-child(12) {
      max-width: 120px; /* Giới hạn chiều rộng cho cột Requirements */
  }

  #visitor-lists th:nth-child(13),
  #visitor-lists td:nth-child(13) {
      max-width: 160px; /* Giới hạn chiều rộng cho cột Edit */
  }

  /* #visitor-lists th:nth-child(14),
  #visitor-lists td:nth-child(14) {
      max-width: 80px; /* Giới hạn chiều rộng cho cột Delete */
  } */

  /* Responsive Style */
  @media (max-width: 768px) {
      #visitor-lists th,
      #visitor-lists td {
          font-size: 12px; /* Giảm kích thước chữ trên màn hình nhỏ */
      }
  }
  </style>
  <style>
    .search_bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px; /* Khoảng cách giữa các phần tử */
    }

    .search_bar input {
        flex: 1; /* Để các input có kích thước linh hoạt */
        min-width: 150px; /* Đặt độ rộng tối thiểu để tránh bị quá nhỏ */
    }

    .search_bar button {
        flex-shrink: 0; /* Để nút không co lại */
        padding: 8px 16px; /* Khoảng cách bên trong nút */
        background-color: #007bff; /* Màu nền cho nút */
        color: white; /* Màu chữ cho nút */
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search_bar button:hover {
        background-color: #dd4b39; /* Màu nền khi hover */
    }
  </style>
  <style>
    /* Modal Styles */
    .modal {
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        text-align: left;
    }

    .close-btn {
        float: right;
        font-size: 24px;
        cursor: pointer;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-tour-btn'); // Chọn tất cả nút delete
    const modal = document.getElementById('deleteTourModal');
    const closeModal = document.querySelector('.close-btn');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');
    
    let tourIdToDelete = null;

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Lấy thông tin tour từ data-attribute
            const tourId = this.dataset.tourId;
            const tourName = this.dataset.tourName;

            // Hiển thị thông tin vào popup
            document.getElementById('tourName').innerText = tourName;

            // Lưu ID tour để xử lý xóa
            tourIdToDelete = tourId;

            // Hiển thị modal
            modal.style.display = 'flex';
        });
    });

    // Đóng popup khi click vào nút "No" hoặc "X"
    closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    cancelDelete.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Xác nhận xóa khi click vào nút "Yes"
    confirmDelete.addEventListener('click', function () {
        if (tourIdToDelete) {
            // Gửi yêu cầu xóa tới server bằng AJAX
            fetch(`/admin/tours/${tourIdToDelete}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Thêm CSRF token
                    'Content-Type': 'application/json',
                }
            }).then(response => {
                if (response.ok) {
                    // Xóa thành công, reload lại trang
                    window.location.href = '/admin/tours';
                } else {
                    alert('Failed to delete tour.');
                }
            }); 
            }
        });
    });
  </script>
</head>
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
                <a href="/logout" data-toggle="control-sidebar"><button class="btn btn-danger">Log Out</button></a>
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
      <div class="row">
        <div class="col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Tours</h3>
            </div>

            <div class="icon"></div>
            </div>
            <div class="box-body">
              <form action="{{ route('admin.tours.index') }}" method="GET" class="mb-4">
                <div class="search_bar">
                  <input type="text" name="name" class="form-control" placeholder="Search by name..." aria-label="Search">
                  <button class="btn btn-default" type="submit">Search</button>
                  <div class="input-group-btn">
                  
                  </div>
                </div>
              </form>

              <!-- Tours List Table -->
              <table id="visitor-lists" class="table table-sm dataTable table-bordered dataTable">
                <thead class="table-light">
                    <tr>
                        <th class="text-center text-nowrap align-middle">STT</th>
                        <th class="text-center text-nowrap align-middle">Name</th>
                        <th class="text-center text-nowrap align-middle">Price</th>
                        <th class="text-center text-nowrap align-middle">Image</th>
                        <th class="text-center text-nowrap align-middle">Location</th>
                        <th class="text-center text-nowrap align-middle">Features</th>
                        <th class="text-center text-nowrap align-middle">Best Time</th>
                        <th class="text-center text-nowrap align-middle">Directions</th>
                        <th class="text-center text-nowrap align-middle">Checking Routes</th>
                        <th class="text-center text-nowraexitp align-middle">Items</th>
                        <th class="text-center text-nowrap align-middle">Cautions</th>
                        <th class="text-center text-nowrap align-middle">Requirements</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $key => $tours)
                    <tr>
                        <td class="text-center text-nowrap align-middle">{{ $key + 1 }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->name }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->price }}</td>
                        <td class="text-center text-nowrap align-middle">
                          <img src="{{ asset($tours->image) }}" alt="{{ $tours->name }}" style="width: 100px;">
                        </td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->location }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->features }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->besttime }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->directions }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->trekkingroutes }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->items }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->cautions }}</td>
                        <td class="text-center text-nowrap align-middle">{{ $tours->requirements }}</td>
                        <td>
                          <a href="{{ route('admin.tours.edit', $tours->id) }}" class="btn btn-primary btn-sm" >Edit</a>
                          <button class="delete-tour-btn btn btn-danger btn-sm" 
                                  data-tour-id="{{ $tours->id }}" 
                                  data-tour-name="{{ $tours->name }}">
                              Delete
                          </button>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/admin/tours/create"><button>Add new</button></a>
    </div>
    </div>
        </div>
    </div>
    </div>
    </div>
    </section>

    <!-- Popup Modal -->
    <div id="deleteTourModal" class="modal" style="display:none;">
      <div class="modal-content">
          <span class="close-btn">&times;</span>
          <h2>Tour Name</h2>
          <p><strong></strong> <span id="tourName"></span></p>
          <p style="color: red; font-weight: bold;">Are you sure to delete this tour?</p>
          <button id="confirmDelete" class="btn btn-danger">YES</button>
          <button id="cancelDelete" class="btn btn-secondary">NO</button>
      </div>
    </div>
    <!-- right col -->
      </div>
      <!-- /.row (main row) -->

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
<script>
  function deleteTour(id) {
      if (confirm("Are you sure you want to delete this tour?")) {
          fetch(`/tours/${id}`, {
              method: 'DELETE',
              headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}',
                  'Accept': 'application/json',
              }
          })
          .then(response => {
              console.log(response); // Kiểm tra phản hồi từ server
              return response.json();
          })
          .then(data => {
              console.log(data); // Kiểm tra nội dung phản hồi
              if (data.error) {
                  showMessage(data.error, 'error'); // Hiển thị thông báo lỗi
              } else {
                  showMessage(data.success, 'success'); // Hiển thị thông báo thành công
                  // Có thể thêm code để xóa phần tử tour khỏi giao diện
              }
          })
          .catch(error => console.error('Error:', error));
      }
  }

  function showMessage(message, type) {
      const messageBox = document.getElementById('messageBox');
      messageBox.innerText = message;
      messageBox.className = type; // Thêm class để tùy chỉnh kiểu hiển thị
      messageBox.style.display = 'block'; // Hiển thị thông báo

      // Ẩn thông báo sau 3 giây
      setTimeout(() => {
          messageBox.style.display = 'none';
      }, 3000);
  }
</script>
</body>
</html>
