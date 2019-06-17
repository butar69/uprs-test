<?php
  session_start();
  $koneksi = new mysqli ('localhost','root','','uprs')
?>
    <!DOCTYPE html>
    <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>UPRS CIPINANG</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
          <!-- Ionicons -->
          <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
          <!-- Theme style -->
          <link rel="stylesheet" href="dist/css/adminlte.min.css">
          <!-- iCheck -->
          <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
          <!-- Google Font: Source Sans Pro -->
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
          <body class="hold-transition login-page">
            <div class="login-box">
              <div class="login-logo">
                <b>Admin UPRS |</b>Cipinang</a>
              </div>
                <!-- /.login-logo -->
                <div class="card">
                  <div class="card-body login-card-body">
                    <p class="login-box-msg">Masukan ID & Password Admin</p>

                      <form role="form" method="post">
                        <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="Username" name="user">
                          <span class="fa fa-user-secret form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="password" class="form-control" placeholder="Password" name="pass">
                          <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                          <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-blok btn-primary" name="login">Sign In</button>
                          </div>
                            <!-- /.col -->
                          </div>
                        </form>
                          <?php
                          if (isset($_POST['login']))
                          {
                            $ambil = $koneksi->query("SELECT * FROM admin WHERE user = '$_POST[user]' AND pass = '$_POST[pass]'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok==1)
                            {
                              $_SESSION['admin'] = $ambil->fetch_assoc();
                              echo "<script>alert('Login Berhasil');</script>";
                              // echo "<div class='alert alert-info'>Login Berhasil</div>";
                              echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                            }
                            else
                            {
                              echo "<script>alert('Login Gagal! Periksa kembali ID & Password!');</script>";
                              // echo "<div class='alert alert-danger'>Login Gagal</div>";
                              echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                            }
                          }
                          ?>
                    </div>
                    <!-- /.login-card-body -->
                  </div>
                </div>
                <!-- /.login-box -->

              <!-- jQuery -->
              <script src="plugins/jquery/jquery.min.js"></script>
              <!-- Bootstrap 4 -->
              <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
              <!-- iCheck -->
              <script src=" plugins/iCheck/icheck.min.js"></script>
              <!-- <script>
                $(function () {
                  $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass   : 'iradio_square-blue',
                    increaseArea : '20%' // optional
                  })
                })
              </script> -->
            </body>
        </html>
