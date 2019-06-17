<?php
session_start();
//koneksi database
$koneksi = new mysqli("localhost","root","","databases");
if (!isset($_SESSION['pelanggan']))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPRS</title>
    <h1>Pembayaran</h1>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">UPRS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="keranjang.php">Keranjang</a>
                    </li>
                   <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">VELG
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="enkei.php">ENKEI</a></li>
                <li><a href="ssr.php">SSR</a></li>
                <li><a href="wedsport.php">Wed Sport</a></li> 
                <li><a href="rays.php">Rays</a></li> 
                <li><a href="workmeister.php">Work Meister</a></li> 
            </ul>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION["pelanggan"])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['pelanggan']['nama_pelanggan'] ?>
                         <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                    <li><a href="#">Ganti Profil</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="riwayat.php">Riwayat Belanja</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif ?> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="riwayat">
	<div class="container">
		<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			<p>
				<h3>Riwayat Belanja <?php echo $_SESSION["pelanggan"]["nama_pelanggan"] ?></h3>
				<strong>Harap Transfer Pembayaran Ke :</strong>
                <strong>Bank BRI 183-9924123-4234 AN. Japwheels Store.</strong><br>
                <strong>Bank BCA 174-9993384-6464 AN. Muhammad Fauzan.</strong>
			</p>
		</div>
	</div> 
</div>
		

		<br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Total</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor=1;
				// mendapatkan id_pelanggan yg login dari session
				$id_pelanggan = $_SESSION["pelanggan"]['id_pelanggan'];

				$ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pelanggan = '$id_pelanggan'");
				while($pecah = $ambil->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["tanggal_pemesanan"] ?></td>
					<td><?php echo $pecah["status"] ?></td>
					<td>Rp. <?php echo number_format($pecah["total_pemesanan"]) ?></td>
					<td>
						<a href="nota.php?id=<?php echo $pecah["id_pemesanan"] ?>" class="btn btn-success">Nota</a>
						<a href="cetakpembayaran.php?id=<?php echo $pecah["id_pemesanan"] ?>"" class="btn btn-success">Bukti Pembayaran</a>
						<a href="pembayaran.php?id=<?php echo $pecah["id_pemesanan"] ?>" class="btn btn-success">Upload Bukti</a>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>