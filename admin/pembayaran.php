  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
<center><h2>Pembayaran</h2><br></center>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama SP</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM pemesanan JOIN pelanggan ON pemesanan. id_pelanggan=pelanggan. id_pelanggan WHERE pemesanan. status='pending' "); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pemesanan']; ?></td>
			<td><?php echo $pecah['total_pemesanan']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-info">detail</a>
				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<br><br>

<center><h2>Pembayaran Masuk</h2><br></center>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pemesanan JOIN pelanggan ON pemesanan.id_pelanggan=pelanggan.id_pelanggan WHERE pemesanan.status = 'telah dikonfirmasi' "); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pemesanan']; ?></td>
			<td><?php echo $pecah['total_pemesanan']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-info">detail</a>
				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<br><br>

<center><h2>Pembayaran Terkonfirmasi</h2><br></center>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pemesanan JOIN pelanggan ON pemesanan.id_pelanggan=pelanggan.id_pelanggan WHERE pemesanan. status = 'pembayaran dikonfirmasi' "); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pemesanan']; ?></td>
			<td><?php echo $pecah['total_pemesanan']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-info">detail</a>
				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<br><br>

<center><h2>Sedang Dikirim</h2><br></center>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pemesanan JOIN pelanggan ON pemesanan.id_pelanggan=pelanggan.id_pelanggan WHERE pemesanan. status = 'dikirim' "); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pemesanan']; ?></td>
			<td><?php echo $pecah['total_pemesanan']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-info">detail</a>
				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<br><br>

<center><h2>Pesanan telah Sampai Ditujuan</h2><br></center>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pemesanan JOIN pelanggan ON pemesanan.id_pelanggan=pelanggan.id_pelanggan WHERE pemesanan. status = 'selesai' "); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pemesanan']; ?></td>
			<td><?php echo $pecah['total_pemesanan']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-info">detail</a>
				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
</div>
</div>
</div>
