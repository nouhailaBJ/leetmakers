<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin panel robotics | @yield('title')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('/') }}/site/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/site/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/site/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">visit site</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/adminpanel') }}" class="brand-link">
      <span class="brand-text font-weight-light">ROBOTIC  Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('uploads/users/'.Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/adminpanel') }}" class="nav-link">
                  <i class="nav-icon fa fa-home"></i>
                  <p>
                    Home
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{ url('/adminpanel/users') }}" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Users
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{ url('/adminpanel/projects') }}" class="nav-link">
                  <i class="nav-icon fa  fa-th-large"></i>
                  <p>
                    Projects
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{ url('/adminpanel/sponsors') }}" class="nav-link">
                  <i class="nav-icon fa  fa-circle"></i>
                  <p>
                    Sponsors
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{ url('/adminpanel/all_joiners') }}" class="nav-link">
                  <i class="nav-icon fa  fa-circle"></i>
                  <p>
                    Order Joinus
                  </p>
                </a>
             </li>             
            <li class="nav-item">
                <a href="{{ url('/adminpanel/contact') }}" class="nav-link">
                  <i class="nav-icon fa  fa-circle"></i>
                  <p>
                    Messages
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{ url('/adminpanel/setting') }}" class="nav-link">
                  <i class="nav-icon fa  fa-circle"></i>
                  <p>
                    Settings
                  </p>
                </a>
             </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    </div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019-2020 All rights reserved. Team TreizeDev
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('/') }}/site/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/') }}/site/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/') }}/site/dist/js/adminlte.min.js"></script>

@yield('footer')
</body>
</html>
