<?php
  $koneksi = mysqli_connect('localhost','root','','uprs')
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
  	<link rel="stylesheet" href="plugins/bootstrap/css/radiobutton.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>
                  <i class="right fa fa-registered"></i>
                  Pendaftaran
                </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Input Data</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">

                <form method="post" class="form-horizontal" action="index.php?halaman=daftar_sp">
                  <div class="card">
                    <div class="content-header">
                      <div class="container-fluid">
                      <h5>Data Warga</h5>
                          <section class="konten">
                              <div class="card-body">

                              <input type="hidden" class="form-control" name="id_sp" value="<?php echo($_GET['id_sp']) ?>" required>
                              <input type="hidden" class="form-control" name="id_rusun" value="<?php echo($_GET['id_rusun']) ?>" required>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tanggal Daftar :</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                      </span>
                                    </div>
                                    <input type="date" class="form-control float-right" name="date_register">
                                  </div>
                                </div>
                              </div>
                            </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tanggal Berakhir :</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                  </div>
                                  <input type="date" class="form-control float-right" name="date_expired">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label>Pilih Status Sewa :</label>
                                      <select name="status" id="change_status" class="form-control select2" style="width: 100%;">
                                          <?php
                                              $sql5 = "SELECT * FROM tb_status";
                                              $get = mysqli_query($koneksi,$sql5);
                                              while ($conn = mysqli_fetch_array($get)) {
                                          ?>
                                            <option value="<?php echo $conn['status']; ?>"><?php echo $conn['status']; ?></option>
                                          <?php } ?>
                                        </select>
                                       </div>
                                      </div>
                                    </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Lantai :</label>
                                            <select name="id_lantai" id="change_lantai" class="form-control select2" style="width: 100%;">
                                                <?php
                                                  $con = "SELECT * FROM tb_lantai";
                                                  $get3 = mysqli_query($koneksi, $con);
                                                  while ($con1 = mysqli_fetch_array($get3)) {
                                                ?>
                                                  <option value="<?php echo $con1['id_lantai']; ?>"><?php echo $con1['lantai']; ?></option>
                                                <?php } ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="control-label col-md-3">Blok :</label>
                                              <select name="id_blok" class="form-control select2" style="width: 100%;">
                                                  <?php
                                                    $con0 = "SELECT * FROM tb_blok";
                                                    $get4 = mysqli_query($koneksi, $con0);
                                                    while ($con2 = mysqli_fetch_array($get4)) {
                                                  ?>
                                                    <option value="<?php echo $con2['id_blok']; ?>"><?php echo $con2['blok'];  ?></option>
                                                <?php } ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>

                                     <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="control-label col-md-3">Nomor SP :</label>
                                                <input type="text" class="form-control select2" name="nomor_sp" style="width: 100%;" required>
                                            </div>
                                          </div>
                                        </div>

                                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nama SP :</label>
                                                    <input type="text" class="form-control select2" name="nama_sp" style="width: 100%;" required>
                                                </div>
                                              </div>
                                          </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nomor VA :</label>
                                                        <input type="text" class="form-control select2" name="nomor_va" style="width: 100%;" required>
                                                  </div>
                                              </div>
                                          </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label col-md-3">Nomor Kartu Keluarga :</label>
                                                        <input type="text" class="form-control select2" name="nomor_kk" style="width: 100%;" required>
                                              </div>
                                            </div>
                                          </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                      <label class="control-label col-md-3">Unit :</label>
                                                            <input type="text" class="form-control select2" name="unit" style="width: 100%;" required>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="row-no-print">
                                          <button class="btn btn-success float-right" name="next">Next <i class="fa fa-arrow-right"></i></button>
                                      </div>
          						             </form>
                          						<?php
                                      // $id_sp = $_GET['id_sp'];
                                      // $id_rusun = $_GET['id_rusun'];
                          						if (isset($_POST['next']))
                          							{
                                          $id_rusun = $_POST['id_rusun'];
                                          $id_sp = $_POST['id_sp'];
                          								$date_register = $_POST['date_register'];
                          								$date_expired = $_POST['date_expired'];
                          								$nomor_kk = $_POST['nomor_kk'];
                          								$nomor_sp = $_POST['nomor_sp'];
                          								$status = $_POST['status'];
                          								$id_lantai = $_POST['id_lantai'];
                          								$id_blok = $_POST['id_blok'];
                          								$unit = $_POST['unit'];
                          								$nomor_va = $_POST['nomor_va'];

                          								$sql2 = "INSERT INTO daftar_sp (id_rusun, id_sp, date_register, date_expired, nomor_kk, nomor_sp, status, id_lantai, id_blok, unit, nomor_va)
                          								VALUES  ('$id_rusun','$id_sp','$date_register','$date_expired','$nomor_kk','$nomor_sp','$status','$id_lantai','$id_blok','$unit','$nomor_va')" ;

                          								$run = mysqli_query($koneksi,$sql2);
                                          // $last_id = mysqli_insert_id($koneksi);

                                          echo "<script>location.href='index.php?halaman=datakeluarga&id_sp=".$id_sp."&id_rusun=".$id_rusun."'</script>";

                          							}
                          						?>
                                    </section>
                                  </div>
                                </div>
                              </div>
                      			</div>
                      		</div>
                      	</div>
                      </section>
                    </div>
                  </form>
                </body>
                </html>
