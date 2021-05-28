<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <!--meta name="csrf-token" content="{{ csrf_token() }}"-->
  <title>Pet's Web</title>
  <link href="/Admin_desing/vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/Admin_desing/vendor2/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="/Admin_desing/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


  <div id="wrapper">

    <!-- COLORES -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">


      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('Sesion')}}">
        <div class="sidebar-brand-icon">
          <i class="">
                <img class="img-profile rounded-circle" src="/Public_design/Img/Icons/perro.png" width="50px">
          </i>
        </div>
        <div class="sidebar-brand-text mx-3">Bienvenido</div>
      </a>


      <hr class="sidebar-divider my-0">

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Pagina principal
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pagina Principal</span></a>
      </li> 

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!---------------------------------------------- Usuarios -------------------------------------------------->
      <div class="sidebar-heading">
        Mascotas
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="{{route('Frm_AddMascota')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Agregar Mascota</span></a>
      </li> 

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Servicios
      </div>

      <li class="nav-item active">
          <a class="nav-link" href="{{route('Servicios')}}">
              <i class="fas fa-fw fa-folder"></i>
              <span>Solicitar Servicio</span></a>
      </li>

      <hr class="sidebar-divider">

      <!------------------------------------------------------ Servicios --------------------------------------------->
      <div class="sidebar-heading">
        Citas
      </div>

      <li class="nav-item active">
          <a class="nav-link" href="">
              <i class="fas fa-fw fa-folder"></i>
              <span>Nuevo Huesped</span></a>
      </li>
 

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

      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">  

    
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
            <img class="img-profile rounded-circle"
                src="/Public_design/Img/Icons/perro.png">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
@yield('content')
  </div>
  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TATAKAE EREN</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Se cerrara la sesion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Cerrar Sesion') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/Admin_desing/vendor2/jquery/jquery.min.js"></script>
  <script src="/Admin_desing/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/Admin_desing/vendor2/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/Admin_desing/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/Admin_desing/vendor2/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/Admin_desing/js/demo/chart-area-demo.js"></script>
  <script src="/Admin_desing/js/demo/chart-pie-demo.js"></script>
     <!-- Page level plugins -->
  <script src="/Admin_desing/vendor2/datatables/jquery.dataTables.min.js"></script>
  <script src="/Admin_desing/vendor2/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/Admin_desing/js/demo/datatables-demo.js"></script>
</body>

</html>
