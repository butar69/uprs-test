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
    <head>
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

        						<form method="post" class="form-horizontal" action="index.php?halaman=daftar">

                      <div class="card">
                        <div class="content-header">
                          <div class="container-fluid">
                          <h5>Masukan Data Warga</h5>
                          <section class="konten">
                            <div class="card-body">

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label col-md-3">Pilih  Rumah Susun :</label>
                      								<select name="id_rusun" class="form-control select2" style="width: 100%;">
                      									<?php
                      										$sql="SELECT * FROM tb_rusun";
                      										$result=mysqli_query($koneksi,$sql);
                      									  while ($data = mysqli_fetch_array($result)) {
                      									?>
                      									<option value="<?php echo $data['id_rusun']; ?>"><?php echo $data['nama_rusun']; ?></option>
                        								<?php } ?>
                      								</select>
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
                                   <label class="control-label col-md-3">NIK :</label>
                                      <input type="text" class="form-control select2" name="nik" style="width: 100%;" required>
                                </div>
                              </div>
                            </div>

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label col-md-6">Tempat/Tanggal Lahir :</label>
                                          <input type="text" class="form-control select2" name="ttl" style="width: 100%;" required>
                                    </div>
                                  </div>
                                </div>

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label col-md-3">Pekerjaan :</label>
                                          <input type="text" class="form-control select2" name="job" style="width: 100%;" required>
                                      </div>
                                    </div>
                                  </div>

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label col-md-3">Alamat :</label>
                                            <input type="text" class="form-control select2" name="addres" style="width: 100%;" required>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                              <div class="row-no-print">
                                <button class="btn btn-success float-right" name="next">Next <i class="fa fa-arrow-right"></i></button>
                              </div>
                          </form>

                          				<?php
                          						if (isset($_POST['next']))
                          							{
                          								$id_rusun = $_POST['id_rusun'];
                          								$nama_sp = $_POST['nama_sp'];
                                          $nik = $_POST['nik'];
                                          $job = $_POST['job'];
                                          $ttl = $_POST['ttl'];
                                          $addres = $_POST['addres'];

                          								$sql2 = "INSERT INTO data_sp (id_rusun, nama_sp, nik, job, ttl, addres)
                          								VALUES  ('$id_rusun','$nama_sp','$nik','$job','$ttl','$addres')" ;

                          								$run = mysqli_query($koneksi,$sql2);
                          								$last_id = mysqli_insert_id($koneksi);

                                          echo "<script>location.href='index.php?halaman=daftar_sp&id_sp=".$last_id."&id_rusun=".$id_rusun."'</script>";

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
                  </body>
                  </html>
