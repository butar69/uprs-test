<?php
$conn = mysqli_connect('localhost','root','','uprs');
// mysql_select_db(,$conn);

if(isset($_POST['update'])) {

// if($_POST){// jika tombol update ditekan
  //update data di tabel product
  $sql = "UPDATE data_sp set nama='{$_POST['nama_sp']}' where id_sp='{$_POST['id_sp']}'";
  mysql_query($sql);

  //update data di tabel buku
  $sql = "UPDATE daftar_sp set date_expired='{$_POST['date_expired']}', date_register='{$_POST['date_register']}',
  nomor_sp='{$_POST['nomor_sp']}' where id_sp='{$_POST['id_sp']}'";
  mysql_query($sql);
  echo "Data telah di edit";
}
$id_sp = (int) $_GET['id_sp'];
$sql = "SELECT * from data_sp join daftar_sp on data_sp.id_sp = daftar_sp.id_sp where data_sp.id_sp='$id_sp'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

?>
<form name="form1" action="" method="post">
  <dl>
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
      						<form method="post" class="form-horizontal" action="index.php?halaman=edit">

                    <div class="form-group">
      								<div class="form-group">
      									<label class="control-label col-md-3">ID Rusun</label>
      										<div class="col-md-7">
                                <select name="id_rusun" disabled="disabled">
                                    <option value="ID_RUSUN" <?php echo $row['jenis'] == "ID_RUSUN" ? 'selected="selected"' : '';?>>ID RUSUN</option>
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
                    <dd><input type="submit" value="Update"/></dd>
                </dl>
                <input type="hidden" name="id_sp" value="<?php echo $product['id_sp'];?>"/>
              </form>
  </div>
      </div>
                         </div>
                      </div>
                  </body>
              </html>


                    <!-- <p>&nbsp;</p>
                    <input type="hidden" class="form-control" name="id_sp" value="<?php echo($_GET['id_sp']) ?>" required>
                    <button class="btn btn-primay" name="update">UPDATE</button> -->

      <!-- <dt>Jenis</dt>
      <dd>
          <select name="jenis" disabled="disabled">
              <option value="BUKU" <?php echo $product['jenis'] == "BUKU" ? 'selected="selected"' : '';?>>Buku</option>
          </select> -->
