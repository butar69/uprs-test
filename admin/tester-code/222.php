<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <head>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/simple-sidebar.css" rel="stylesheet">
      	<link rel="stylesheet" href="plugins/bootstrap/css/radiobutton.css">
    </head>

      <body>
        <div class="content-wrapper">
          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>
                      <i class="right fafa-pencil"></i>
                      Perpanjang Sewa
                    </h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Update Data</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>

            <section class="content">
              <?php
                $koneksi = mysqli_connect('localhost','root','','uprs');
                $id_sp = $_GET['id_sp'];
                $ambil = "SELECT * FROM daftar_sp where daftar_sp.id_sp =$id_sp";
                $data = mysqli_query($koneksi, $ambil);
              ?>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="callout callout-danger">
                      <h5><i class="fa fa-info"></i> Note:</h5>
                      <?php while ($pecah = mysqli_fetch_assoc($data)) {
                          echo "<pre>";
                          print_r($pecah);
                          echo "</pre>";
                        ?>
                    </div>

                    <form method="post" enctype="multipart/form-data">
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
                                              $result = mysqli_query($koneksi,$sql);
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
                                          <label>Tanggal Daftar :</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                              </span>
                                            </div>
                                            <input type="date" class="form-control float-right" name="date_register" required>
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
                                            <input type="date" class="form-control float-right" name="date_expired" required>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                         <div class="form-group">
                                           <label class="control-label col-md-3">Nomor SP :</label>
                                               <input type="text" class="form-control select2" name="nomor_sp" value="<?php echo $pecah['nomor_sp']; ?>" style="width: 100%;" required>
                                           </div>
                                         </div>
                                       </div>

                                       <div class="row-no-print">
    																			 <button class="btn btn-success float-right" name="ubah">Update <i class="fa fa-wrench"></i></button>
    																	 </div>
                                     </form>

                                     <?php
                                         } // end while
                                         mysqli_close($koneksi); // menutup koneksi ke database
                                     ?>

                                      <?php
                                        $koneksi = mysqli_connect('localhost','root','','uprs');
                                        $id_sp = $_GET['id_sp'];
                                        if (isset($_POST['ubah']))
                                        {
                                          $id_rusun = $_POST['id_rusun'];
                                          $date_register = $_POST['date_register'];
                                          $date_expired = $_POST['date_expired'];
                                          $nomor_sp = $_POST['nomor_sp'];

                                          $bg = "UPDATE daftar_sp SET id_rusun='$id_rusun', date_register='$date_register', date_expired ='$date_expired',
                                          nomor_sp='$nomor_sp',daftar_sp.id_sp=$id_sp";
                                          $bit =  mysqli_query ($koneksi, $bg);

                                          echo "<br /><em>Update Data Berhasil!</em><br />";
                                          echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=perpanjang_sewa'>";
                                        }
                                        $koneksi->close();
                                      ?>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </body>
            </html>
