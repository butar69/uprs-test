<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
      <h1>Perpanjangan SP </h1>
      <h3> RUSUN CIPINANG MUARA </h3>
<section class="konten">
   <div class="container">
<table id="table_id" class="display">
			<thead>
      		<tr>
      			<th>No.</th>
            <th>ID Rusun</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Berakhir</th>
      			<th>Nomor SP </th>
      			<th>Nama SP</th>
      			<th>NIK</th>
      			<th>Lantai</th>
      			<th>Blok</th>
      			<th>Unit</th>
      			<th>Status Sewa</th>
      			<th>Nomor VA</th>
      			<th>Tarif</th>
      			<th>Perpanjang SP</th>
            <th>Print</th>
      		</tr>
	</thead>
	<tbody>
							<?php $nomor=1 ?>
								<?php
                  $koneksi = mysqli_connect('localhost','root','','uprs');
									$sql = "SELECT * FROM data_sp
                  JOIN daftar_sp on data_sp.id_sp = daftar_sp.id_sp
									JOIN tb_blok on tb_blok.id_blok = daftar_sp.id_blok
									JOIN rusun on (daftar_sp.id_rusun = rusun.id_rusun AND daftar_sp.id_lantai = rusun.lantai)
                  where data_sp.id_rusun=26";
									$get = mysqli_query($koneksi,$sql);
								?>
							<?php while ($pecah = mysqli_fetch_array($get)) {  ?>
								<tr>
									<td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['id_rusun']; ?></td>
                  <td><?php echo $pecah['date_register']; ?></td>
                  <td><?php echo $pecah['date_expired']; ?></td>
									<td><?php echo $pecah['nomor_sp']; ?></td>
									<td><?php echo $pecah['nama_sp']; ?></td>
									<td><?php echo $pecah['nik']; ?></td>
                  <td><?php echo $pecah['lantai']; ?></td>
                  <td><?php echo $pecah['blok']; ?></td>
                  <td><?php echo $pecah['unit']; ?></td>
									<td><?php echo $pecah['status']; ?></td>
									<td><?php echo $pecah['nomor_va']; ?></td>

									<?php if ($pecah['status'] == 'Umum'): ?>
									<td><?php echo $pecah['tarif_umum']; ?></td>

									<?php else: ?>
									<td><?php echo $pecah['tarif_relokasi']; ?></td>


									<?php endif ?>

								<td>
									<a target="__blank" href="sewa.php?id_sp=<?php echo $pecah['id_sp'];?>" class="btn btn-primary">UPDATE</a>
								</td>

                <td>
                  <a target="__blank" href="print.php?id_sp=<?php echo $pecah['id_sp'];?>" class="btn btn-primary">PRINT</a>
                </td>

								</tr>
							<?php $nomor++; ?>
							<?php } ?>
						</tbody>

</tbody>
</tabel>
</table>
</div>
</section>
<h1>
<a href="index.php?halaman=daftar" class="btn btn-primary">INPUT</a>
<!-- <a href="export_pb.php" target="__blank" class="btn btn-primary">Export</a> -->
</h1>
</div>
</div>
</div>
