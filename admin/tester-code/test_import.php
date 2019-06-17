<?php
  $koneksi = mysqli_connect('localhost','root','','uprs');
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
      <h2>IMPORT EXCEL KE MYSQL DENGAN PHP</h2>
  	<h3>www.malasngoding.com</h3>

  	<?php
  	if(isset($_GET['berhasil'])){
  		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
  	}
  	?>

  	<a href="upload.php">IMPORT DATA</a>
  	<table border="1">
  		<tr>
  			<th>No</th>
  			<th>Nama</th>
  			<th>ALamat</th>
  			<th>Telepon</th>
  		</tr>
  		<?php
  		include 'koneksi.php';
  		$no=1;
  		$data = mysqli_query($koneksi,"select * from data_pegawai");
  		while($d = mysqli_fetch_array($data)){
  			?>
  			<tr>
  				<th><?php echo $no++; ?></th>
  				<th><?php echo $d['nama']; ?></th>
  				<th><?php echo $d['alamat']; ?></th>
  				<th><?php echo $d['telepon']; ?></th>
  			</tr>
  			<?php
  		}
  		?>

  	</table>

  	<a href="https://www.malasngoding.com/import-excel-ke-mysql-dengan-php">www.malasngoding.com</a>

  </body>
  </html>
