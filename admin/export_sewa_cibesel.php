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
			        <th>ID Pelanggan</th>
			        <th>NAMA PENGHUNI</th>
			        <th>BULAN TUNGGAKAN</th>
			        <th>KETERANGAN</th>
			        <th>SEWA</th>
			        <th>AIR</th>
			        <th>DENDA</th>
			        <th>TOTAL</th>
			        <th>VAL</th>
			      </tr class="text-center">
			    </tr>
			    </tr>
			    </tr>
			  </thead>
  				<tbody>
					    <?php $nomor=1 ?>
						    <?php
						      $koneksi = new mysqli("localhost","root","","uprs");
						      $result = "SELECT * FROM sewa_cibesel";
						      $db = mysqli_query($koneksi,$result);
						    ?>
							    <?php while ($data = mysqli_fetch_array($db)) {  ?>
							      <tr>
							        <td><?php echo $nomor; ?></td>
							        <td><?php echo $data['nomor_va']; ?></td>
							        <td><?php echo $data['nama_penghuni']; ?></td>
							        <td><?php echo $data['bulan_tunggakan']; ?></td>
							        <td><?php echo $data['nomor_unit']; ?></td>
							        <td><?php echo $data['sewa']; ?></td>
							        <td><?php echo $data['air']; ?></td>
							        <td><?php echo $data['denda']; ?></td>
							        <td><?php echo $data['total']; ?></td>
							        <td><?php echo $data['val']; ?></td>
							      </tr>
							   <?php $nomor++; ?>
							 <?php } ?>
				  </tbody>
				</tbody>
			<script>
				    $(document).ready( function () {
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
