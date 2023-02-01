<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; BKAD 2020 <a href="#">Provinsi Sulawesi Selatan</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/') ?>dist/js/adminlte.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- swal -->
<script src="<?php echo base_url('assets/admin/') ?>dist/sweetalert/sweetalert.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.js"></script>
 <!-- select-picker -->
 <script src="<?php echo base_url('assets/admin/') ?>/dist/js/bootstrap-select.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin/') ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/admin/') ?>dist/js/pages/dashboard.js"></script>

</body>
</html>

<script type="text/javascript">    
    
  $(document).ready(function(){
    $('#post_content').summernote();

      $('ul.nav-sidebar li').find('a').each(function () {
            var link = new RegExp($(this).attr('href')); 
            if (link.test(document.location.href)) {
                if(!$(this).parents().hasClass('active')){
                    $(this).parents('li').addClass('menu-open');
                    $(this).parents('li').find('a').first().addClass('active');
                    $(this).parents().addClass("active");
                    $(this).addClass("active"); 
                }
            }
        });

    $('#logoutButton').on('click', function (event) {
            event.preventDefault();
            var that = this;
            swal({
                title: 'Yakin ingin keluar ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d9534f',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Keluar',
                cancelButtonText: 'Batal',
            }, function () {
                window.location = $(that).attr('href');
            });
        });
      
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    
  });
    </script>