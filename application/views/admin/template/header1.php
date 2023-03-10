<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BKAD | Sul-Sel</title>

  <!-- Favicon -->
  <link rel="icon" type="image/favicon.png" href="<?php echo base_url('assets/admin/dist/') ?>img/favicon.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/css/adminlte.min.css">
  <!-- Jquery style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/css/jquery-ui.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- swal -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/sweetalert/sweetalert.css">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- note -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/toastr/toastr.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/css/bootstrap-select.min.css">
  <!-- jQuery -->
  <script src="<?php echo base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
 
  <!-- date-range-picker -->
  <script src="<?php echo base_url('assets/admin/') ?>/plugins/daterangepicker/daterangepicker.js"></script>
 

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item" >
        <a style="margin: auto;width: 100%;" class="nav-link btn btn-block btn-outline-warning" href="<?php echo base_url('admin/login/logout'); ?>" id="logoutButton" role="button">
          <i class="fas fa-sign-out-alt"></i> KELUAR
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
