<!DOCTYPE html>
<html>
<head>
	<title></title>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">



<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

</head>
<body>


<table id="table_id" class="display">
			<thead>
		<tr>
			<th>No.</th>
			<th>Nomor Kartu Keluarga</th>
			<th>Nomor SP </th>
			<th>Nama SP</th>
			<th>NIK</th>
			<th>Nama Anggota Keluarga</th>
			<th>Umur</th>
			<th>Jenis Kelamin</th>
			<th>Pekerjaan</th>
			<th>Lantai</th>
			<th>Blok</th>
			<th>Unit</th>
			<th>Status Sewa</th>
			<th>Nomor VA</th>
			<th>Tarif</th>
		</tr>
		</tr>
		</tr>
	</thead>
	<tbody>
							<?php $nomor=1 ?>
								<?php
									$koneksi = new mysqli("localhost","root","","uprs");
									$sql = "SELECT * FROM `data_sp`
									JOIN daftar_sp on data_sp.id_sp = daftar_sp.id_sp
									JOIN data_keluarga on daftar_sp.id_sp = data_keluarga.id_sp
									JOIN tb_blok on tb_blok.id_blok = daftar_sp.id_blok
									JOIN rusun on (daftar_sp.id_rusun = rusun.id_rusun AND daftar_sp.id_lantai = rusun.lantai)
									WHERE data_sp.id_rusun=20";
									$get = mysqli_query($koneksi,$sql);
								?>
							<?php while ($pecah = mysqli_fetch_array($get)) {  ?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah['nomor_kk']; ?></td>
									<td><?php echo $pecah['nomor_sp']; ?></td>
									<td><?php echo $pecah['nama_sp']; ?></td>
									<td><?php echo $pecah['nik']; ?></td>
									<td><?php echo $pecah['nama']; ?></td>
									<td><?php echo $pecah['umur']; ?></td>
									<td><?php echo $pecah['jenis_kelamin']; ?></td>
									<td><?php echo $pecah['pekerjaan']; ?></td>
									<td><?php echo $pecah['status']; ?></td>
									<td><?php echo $pecah['id_lantai']; ?></td>
									<td><?php echo $pecah['blok']; ?></td>
									<td><?php echo $pecah['unit']; ?></td>
									<td><?php echo $pecah['nomor_va']; ?></td>

									<?php if ($pecah['status'] == 'Umum'): ?>
									<td><?php echo $pecah['tarif_umum']; ?></td>

									<?php else: ?>
									<td><?php echo $pecah['tarif_relokasi']; ?></td>


									<?php endif ?>

								<!-- <td>
									<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-danger">hapus</a>
									<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-primary">ubah</a>
								</td> -->
								</tr>
							<?php $nomor++; ?>
							<?php } ?>
	</tbody>

</tbody>


<script>

  $(document).ready( function () {


    // $('#table_id').DataTable( {
    //     dom: 'Bfrtip',
    //     buttons: [
    //         'copy', 'csv', 'excel', 'pdf', 'print'
    //     ]
    // });

    $('#table_id').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );


} );




</script>


</body>
</html>
