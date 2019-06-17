<<?php 
$koneksi = mysqli_connect("localhost","root","","uprs");
 
						if (isset($_POST['register'])) {
							$idrusun = mysql_real_escape_string($_POST['idrusun']);
							$nomorkk = mysql_real_escape_string($_POST['nomorkk']);
							$nomorsp = mysql_real_escape_string($_POST['nomorsp']);
							$namasp = mysql_real_escape_string($_POST['namasp']);
							$nik = mysql_real_escape_string($_POST['nik']);
							$nama = mysql_real_escape_string($_POST['nama']);
							$umur = mysql_real_escape_string($_POST['umur']);
							$jeniskelamin = mysql_real_escape_string($_POST['jeniskelamin']);
							$pekerjaan = mysql_real_escape_string($_POST['pekerjaan']);

							if(empty($idrusun)) {
								array_push($errors, "ID Rusun is required");
							}
							if(empty($nomorkk)) {
								array_push($errors, "Nomor Kartu Keluarga is required");
							}
							if(empty($nomorsp)) {
								array_push($errors, "Nomor SP is required");
							}
							if(empty($namasp)) {
								array_push($errors, "Nama SP is required");
							}
							if(empty($nik)) {
								array_push($errors, "NIK is required");
							}
							if(empty($nama)) {
								array_push($errors, "Nama is required");
							}
							if(empty($umur)) {
								array_push($errors, "Umur is required");
							}
							if(empty($pekerjaan)) {
								array_push($errors, "Pekerjaan is required");
							}

						if (count($errors) == 0) {
							$sql = "INSERT INTO cibesel (nomorkk, nomorsp, namasp, nik, nama, umur, jeniskelamin, pekerjaan) VALUES ('$nomorkk, $nomorsp, $namasp, $nik, $nama, $umur, $jeniskelamin, $pekerjaan')";
							mysqli_query($koneksi, $sql);
						}

						
					}

 ?>