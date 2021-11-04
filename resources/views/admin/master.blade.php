<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('admin/')}}/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../asset/css/bootstrap.min.css" rel="stylesheet">


  <style>


.button {
  padding:  3px  15px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}

.buttonred {
  padding:   3px  15px;
  margin-left: 10px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:  red ;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}


.buttoninfo {
  padding:   3px  15px;
  margin-left: 10px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:  rgb(92, 177, 247) ;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}



.button:hover {background-color: #3e8e41}
.buttonred:hover {background-color:  red}
.buttoninfo:hover {background-color:  rgb(130, 184, 247)}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.buttonred:active {
  background-color: #ff0707;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.buttoninfo:active {
  background-color: #839cf0;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


  </style>


{{-- Text editor  --}}
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
     <script>tinymce.init({selector:'textarea'});</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{  url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->

      @include('admin.includes.nav_leftmenubar')
      <!-- Nav Item - Dashboard -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       @include('admin.includes.top-headerbar')    <!--Top Bar  -->
        <!-- End of Topbar -->

        <!-- Begin Dashboard Page Content -->
       <div style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px; margin-top: 25px; ">
      @yield('dashboard')
       </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('admin/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/')}}/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('admin/')}}/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/')}}/js/demo/chart-area-demo.js"></script>
  <script src="{{asset('admin/')}}/js/demo/chart-pie-demo.js"></script>

</body>

</html>
