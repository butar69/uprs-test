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

	  	<link rel="stylesheet" href="plugins/bootstrap/css/radiobutton.css">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body>

<div class="container">	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="penl-title">Pendaftaran</h1>
						<h3>Data SP</h3>
					</div>
					
					<div class="panel-body">
						<form method="post" class="form-horizontal" action="index.php?halaman=daftar">

								<!-- <div class="form-group">
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
									</div> -->
						
							<div class="form-group">
								<div class="form-group">
									<label class="control-label col-md-3">ID Rusun</label>
										<div class="col-md-7">
											<select name="id_rusun">
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

							<!-- 	<div class="form-group">
									<label class="control-label col-md-3">Nomor Kartu Keluarga</label>
										<div class="col-md-7">
											<input type="number" class="form-control" name="nomor_kk" required value="<?php echo $nomor_kk ?>">
										</div>
								</div>
									<div class="form-group">
									<label class="control-label col-md-3">Nomor SP</label>
										<div class="col-md-7">
											<input type="text" class="form-control" name="nomor_sp" required>  <!-- value="<?php echo $nomor_sp ?>"
										</div>
								</div>
							<div class="form-group">
								<label class="control-label col-md-3">Nama SP</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="nama_sp" required >
									</div>
								</div>
							<div> --> 

						<label class="control-label col-md-3">Pilih Status Sewa :</label>
                                    <div class="col-md-7"> 
                                        <select name="status" id="change_status">
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
                                    
                            <div class="form-group">
                                    <label class="control-label col-md-3">Lantai :</label>
                                		<div class="col-md-7">
                                    		<select name="id_lantai" id="change_lantai">
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

                            <div class="form-group">
                                <label class="control-label col-md-3">Blok :</label>
                                	<div class="col-md-7">
                                    	<select name="id_blok">
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

                            <div class="form-group">
                                    <label class="control-label col-md-3">Unit :</label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="unit" required>
                             </div>
                             	</div>

                            <!--  	<div class="form-group">
									<label class="control-label col-md-3">Nomor VA</label>
										<div class="col-md-7">
											<input type="number" class="form-control" name="nomor_va" required value="<?php echo $nomor_va ?>">
										</div>
								</div> -->

							 <h5>Kategori Pembayaran Sewa :</h5>
									<select name="status">
										<?php 

										$sql3="SELECT * FROM tb_status";
										$get=mysqli_query($koneksi,$sql3);

										while ($conn = mysqli_fetch_array($get)) {
											
										 ?>
										<option value="<?php echo $conn['status']; ?>"><?php echo $conn['status']; ?></option>

  									<?php } ?>
									</select> 
							<button class="btn btn-primay" name="next">Next</button>
						</form>

						<?php
						if (isset($_POST['next']))
							{
								// $date_register = $_POST['date_register'];
								// $date_expired = $_POST['date_expired'];
								$id_rusun = $_POST['id_rusun'];
								// $nomor_kk = $_POST['nomor_kk'];
								// $nomor_sp = $_POST['nomor_sp'];
								// $nama_sp = $_POST['nama_sp'];								
								$status = $_POST['status'];
								$id_lantai = $_POST['id_lantai'];
								$id_blok = $_POST['id_blok'];
								$unit = $_POST['unit'];
								// $nomor_va = $_POST['nomor_va'];


								$sql2 = "INSERT INTO data_sp (id_rusun,status, id_lantai, id_blok, unit) 
								VALUES  ('$id_rusun','$status','$id_lantai','$id_blok','$unit')" ;

								$run = mysqli_query($koneksi,$sql2);
								$last_id = mysqli_insert_id($koneksi);
								// echo "<meta http-equiv='refresh' content=1;url=index.php?halaman=datakeluarga".$last_id.">";	
								
								echo "<script>location.href='index.php?halaman=datakeluarga&id_sp=".$last_id."&id_rusun=".$id_rusun."'</script>";
								
								// header("Location:index.php?halaman=datakeluargaa");
							}

						?>  
						</div>
					</div>
				</div>
			</div>
		</div>
	</form> 
</body>
</html>