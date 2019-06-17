<?php

$koneksi = mysqli_connect('localhost','root','','uprs');
if(isset($_POST['update'])) {

    $id_rusun = $_POST['id_rusun'];
    $date_register = $_POST['date_register'];
    $date_expired = $_POST['date_expired'];
    $nama_sp = $_POST['nama_sp'];
    $nomor_sp = $_POST['nomor_sp'];

}

  $id_sp = isset($_GET['id_sp']) ? $_GET['id_sp'] : '';
// $id_sp = $_GET['id_sp'];
  $query = "SELECT * FROM data_sp
           join daftar_sp on data_sp.id_sp = daftar_sp.id_sp
           join rusun on (daftar_sp.id_rusun = rusun.id_rusun AND daftar_sp.id_lantai = rusun.lantai)
           join tb_blok on tb_blok.id_blok = daftar_sp.id_blok
           where data_sp.id_sp = $id_sp";
  $data = mysqli_query($koneksi, $query);
// $data = mysqli_fetch_assoc($row);

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
  <div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
  				<div class="panel panel-default">
  					<div class="panel-heading">
  						<h1 class="penl-title">Masukan Data</h1>
              <br />
  					</div>
  					<div class="panel-body">
              <?php while ($row = mysqli_fetch_assoc ($data)) { ?>
  						<form method="post" class="form-horizontal" action="index.php?halaman=edit">

                <div class="form-group">
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
                        <input type="text" class="form-control" name="nomor_sp" value="<?php echo $row['nomor_sp']; ?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-md-3">Nama SP</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="nama_sp" value="<?php echo $row['nama_sp']; ?>" required>
                    </div>
                </div>

                <p>&nbsp;</p>
                <input type="hidden" class="form-control" name="id_sp" value="<?php echo($_GET['id_sp']) ?>" required>
                <button class="btn btn-primay" name="update">UPDATE</button>
              </form>
                <?php
                    } // end while

                    mysqli_close($koneksi); // menutup koneksi ke database
                ?>

                </div>
              </div>
           </div>
        </div>
    </body>
</html>
