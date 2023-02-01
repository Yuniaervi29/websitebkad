<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BKAD | Log in</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/favicon.png" href="<?php echo base_url('assets/admin/dist/') ?>img/favicon.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>/dist/sweetalert/sweetalert.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url('assets/img/') ?>logo-BKAD1.png" style="width:60%">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" id="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div id='err_msg' style='display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                <div id='msg'> </div></label>  
                </div></div></div>  

        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/') ?>/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url('assets/admin/') ?>/dist/sweetalert/sweetalert.min.js"></script>
</body>
</html>


</script>  
        <script type="text/javascript">  
  
        // Ajax post  
        $(document).ready(function(){  
        $("#submit").click(function(){  
        var user_name = $("#username").val();  
        var password = $("#password").val();  
        // Returns error message when submitted without req fields.  
        if(user_name==''||password=='')  
        {  
            swal("Gagal!", "Username dan Password tidak boleh kosong!", "error") 
        }  
        else  
        {  
        // AJAX Code To Submit Form.  
        $.ajax({  
        type: "POST",  
        url:  "<?php echo base_url(); ?>" + "admin/login/check_login",  
        data: {username: user_name, password: password},  
        cache: false,  
        success: function(data){  
            if(data!=0){  
                // On success redirect.  
                setTimeout(function() {
                swal({
                    title: "Login Berhasil!",
                    text: "Klik OK untuk melanjutkan!",
                    type: "success"
                }, function() {
                  window.location.href = "<?php echo base_url() ?>admin/welcome";
                });
            }, 1000);
                  
            }  
            else{  
                swal("Gagal Login!", "Masukkan Username dan Password dengan benar!", "error")
                $('#username').val('');
                $('#password').val('');
                }
             }  
            });  
            }  
            return false;  
          });  
        });  
    </script>  
