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
  <!-- croppie -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/css/croppie.css">
  <!-- jQuery -->
  <script src="<?php echo base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
  <!--select2-->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 
  <!-- date-range-picker -->
  <script src="<?php echo base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>dist/js/croppie.min.js"></script>
 

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
        <a href="#" class="nav-link"> <form name="Tick" style="">
                <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                </script>
                <input readonly="true" type="text" size="10" name="Clock" style="border-style:none; background-color:transparent; color:#000; text-align:center">
            </form>
            <script type='text/javascript'>
                function show(){
                    var Digital=new Date()
                    var hours=Digital.getHours()
                    var minutes=Digital.getMinutes()
                    var seconds=Digital.getSeconds()
                    var dn="AM"
                    if (hours>12){
                        dn="PM"
                        hours=hours-12
                    }
                    if (hours==0)
                        hours=12
                    if (minutes<=9)
                        minutes="0"+minutes
                    if (seconds<=9)
                        seconds="0"+seconds
                    document.Tick.Clock.value=hours+":"+minutes+":"
                    +seconds+" "+dn
                    setTimeout("show()",1000)
                }
                show()
            </script></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    
    <ul class="navbar-nav ml-auto">
  
      <!-- Messages Dropdown Menu -->
      <li class="nav-item" >
        <a style="margin: auto;width: 100%;" class="nav-link btn btn-block btn-outline-warning" href="<?php echo base_url('admin/login/logout'); ?>" id="logoutButton" role="button">
          <i class="fas fa-power-off"></i> Logout
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->
