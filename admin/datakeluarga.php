<?php
$koneksi = mysqli_connect('localhost','root','','uprs')
?>
<!DOCTYPE html>
<html lang="en">
	<head>
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
            <div class="callout callout-info">
              <h5><i class="fa fa-info"></i> Note:</h5>
              Tolong diperhatikan bahwa data anggota keluarga yang dapat di masukan hanya 4 orang termaksud pemegang Nomor SP.
            </div>

						<form method="post" class="form-horizontal" action="index.php?halaman=datakeluarga">
							<div class="card">
	              <div class="content-header">
	                <div class="container-fluid">
	                <h5>Data Anggota Keluarga</h5>
	                        <div class="card-body">
														<?php for ($i=1; $i <=4 ; $i++) { ?>
															<input type="hidden" class="form-control" name="id_sp<?php echo $i; ?>"value="<?php echo($_GET['id_sp']) ?>" required>

															<br>
															<h3>Anggota Keluarga <?php echo $i; ?> : </h3>

															<div class="row">
																<div class="col-md-6">
																	 <div class="form-group">
																		 <label class="control-label col-md-3">NIK :</label>
																				 <input type="text" class="form-control select2" name="nik<?php echo $i; ?>" style="width: 100%;" required>
																		 </div>
																	 </div>
																 </div>

																 <div class="row">
	 																<div class="col-md-6">
	 																	 <div class="form-group">
	 																		 <label class="control-label col-md-3">Nama :</label>
	 																				 <input type="text" class="form-control select2" name="nama<?php echo $i; ?>" style="width: 100%;" required>
	 																		 </div>
	 																	 </div>
	 																 </div>

																	 <div class="row">
																		 <div class="col-md-6">
																				 <div class="form-group">
																					 <label>Jenis Kelamin :</label>
																							 <select name="jenis_kelamin<?php echo $i; ?>" id="change_status" class="form-control select2" style="width: 100%;">
																								 <?php
																										 $sql = "SELECT * FROM jenis_kelamin";
																										 $result=mysqli_query($koneksi,$sql);
																										 while ($data = mysqli_fetch_array($result)) {
																								 	?>
																								 		 <option value="<?php echo $data['jenis_kelamin']; ?>"><?php echo $data['jenis_kelamin']; ?></option>
																									 <?php } ?>
																								 </select>
																								</div>
																							 </div>
																						 </div>

																		<div class="row">
							 													<div class="col-md-6">
							 															<div class="form-group">
							 																<label class="control-label col-md-3">Umur:</label>
							 																		<input type="text" class="form-control select2" name="umur<?php echo $i; ?>" style="width: 100%;" required>
							 																</div>
							 														</div>
							 												</div>

																		<div class="row">
		 	 																<div class="col-md-6">
		 	 																	 <div class="form-group">
		 	 																		 <label class="control-label col-md-3">Pekerjaan :</label>
		 	 																				 <input type="text" class="form-control select2" name="pekerjaan<?php echo $i; ?>" style="width: 100%;" required>
		 	 																		 </div>
		 	 																	 </div>
		 	 																 </div>
																		 </br>
																	 <?php } ?>

																	 <div class="row-no-print">
																			 <button class="btn btn-success float-right" name="register">Register <i class="fa fa-check-square-o"></i></button>
																	 </div>
																 </form>

																 <?php
																			if(isset($_POST['register']))
																			{
																				for ($i=1; $i <=4 ; $i++) {

																					$id_sp = $_POST['id_sp'.$i];
																					$nik = $_POST['nik'.$i];
																					$nama = $_POST['nama'.$i];
																					$jenis_kelamin = $_POST['jenis_kelamin'.$i];
																					$pekerjaan = $_POST['pekerjaan'.$i];
																					$umur = $_POST['umur'.$i];

																					$conn = "INSERT INTO data_keluarga (id_sp, nik, nama, jenis_kelamin, pekerjaan, umur) VALUES ('$id_sp','$nik','$nama','$jenis_kelamin','$pekerjaan','$umur')" ;
																					$run = mysqli_query($koneksi,$conn);
																				}

																				echo "<script>location.href='index.php?halaman=daftar'</script>";

																			}
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
							</form>
						</body>
						</html>
