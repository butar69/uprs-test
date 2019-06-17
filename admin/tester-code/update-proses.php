<?php
      $koneksi = mysqli_connect('localhost','root','','uprs');
      // $id_sp = $_GET['id_sp'];
      if(count($_POST)>0) {
      mysqli_query($koneksi, "UPDATE data_sp, daftar_sp SET id_rusun ='". $_POST['id_rusun'] ."' , date_expired = '". $_POST['date_expired'] ."' ,date_register = '". $_POST['date_register'] ."' ,
      nama_sp = '". $_POST['nama_sp'] ."', nomor_sp= '". $_POST['nomor_sp'] ."', WHERE data_sp=daftar_sp AND data_sp.id_sp = '" . $_POST['id_sp'] . "'");
      $message = "Perubahan Data Berhasil";
      echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=perpanjang_sewa'>";
      }
      $ambil = mysqli_query($koneksi, "SELECT * FROM data_sp
               join daftar_sp on data_sp.id_sp = daftar_sp.id_sp
               join rusun on (daftar_sp.id_rusun = rusun.id_rusun AND daftar_sp.id_lantai = rusun.lantai)
               join tb_blok on tb_blok.id_blok = daftar_sp.id_blok
               where data_sp.id_sp");

      $pecah = mysqli_fetch_assoc($ambil);

?>

<!-- // $data = mysqli_query($koneksi  , $ambil); -->
<!-- // echo "<pre>";
= '" . $_GET['id_sp'] . "'
// print_r($pecah);
// echo "</pre>";
// ?>
// $ambil= $koneksi->query("SELECT * FROM daftar_sp WHERE id_sp='$_GET[id_sp]'");
// $pecah= $ambil->fetch_assoc(); -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h2>UPDATE DATA SP</h2>
        <section class="konten">
          <div class="container">
          <body>
            <div class="container">
            		<div class="row">
            			<div class="col-md-8 col-md-offset-2">
            				<div class="panel panel-default">
            					<div class="panel-heading">
            					</div>
            					<div class="panel-body">
                        <form method="post" class="form-horizontal" action="index.php?halaman=update-proses">
                          <div><?php if(isset($message)) { echo $message; } ?>
                          </div>

                    <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
              									<label class="control-label col-md-3">ID Rusun</label>
              										<div class="col-md-7">
              											<select name="id_rusun">
              												<?php
              												$sql="SELECT * FROM tb_rusun";
              												$result=mysqli_query($koneksi,$sql);
              												while ($db = mysqli_fetch_array($result)) {
              										 		?>
              											<option value="<?php echo $db['id_rusun']; ?>"><?php echo $db['nama_rusun']; ?></option>
                									<?php } ?>
              									</select>
              								</div>
              							</div>

                            <div class="form-group">
              									<label class="control-label col-md-3">Tanggal Daftar :</label>
              										<div class="col-md-7">
              											<input type="date" class="form-control" name="date_register" required>
              										</div>
              									</div>

              								<div class="form-group">
              									<label class="control-label col-md-3">Tanggal Perpanjang :</label>
              										<div class="col-md-7">
              											<input type="date" class="form-control" name="date_expired" required>
              										</div>
              									</div>

                                <div class="form-group">
                                <label class="control-label col-md-3">Nomor SP</label>
                                  <div class="col-md-7">
                                    <input type="text" class="form-control" name="nomor_sp" value="<?php echo $pecah['nomor_sp']; ?>" required>
                                  </div>
                              </div>

                              <div class="form-group">
                              <label class="control-label col-md-3">Nama SP</label>
                                <div class="col-md-7">
                                  <input type="text" class="form-control" name="nama_sp" value="<?php echo $pecah['nama_sp']; ?>" required>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="id_sp" value="<?php echo($_GET['id_sp']) ?>" required>
                          </br>
            
                          <button class="btn btn-primary" name="ubah">SIMPAN</button>
                          </form>

                      <div>
                     <div>
                   <div>
                   </body>
                  <div>
                <div>
              </div>
          </section>
       </div>
    </div>
</div>
