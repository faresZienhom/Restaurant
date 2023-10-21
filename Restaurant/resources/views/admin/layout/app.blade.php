@include('admin.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset("admin")}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('admin.layout.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layout.sidbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
  @include('admin.layout.breadcrumb')

    <!-- Main content -->
@yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admin.layout.footer')
