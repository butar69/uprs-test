<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penetapan Sewa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Warga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <div class="card">
        <div class="content-header">
        <div class="container-fluid">
                <h5>Rumah Susun Cipinang Besar Selatan</h5>
              <section class="konten">
                 <div class="card-body">
                   <table id="table_id" class="table table-striped table-bordered text-center" style="width:100%">
                			<thead>
                      		<tr class="bg-dark text-white">
                      			<th>No.</th>
                            <th>ID Pelanggan</th>
                            <th>NAMA PENGHUNI</th>
                            <th>BULAN TUNGGAKAN</th>
                            <th>NOMOR UNIT</th>
                            <th>SEWA</th>
                            <th>AIR</th>
                            <th>DENDA</th>
                            <th>TOTAL TUNGGAKAN</th>
                            <th>VAL</th>
                      		</tr class="text-center">
                	</thead>
                  <tfoot>
                    <tr>
                      <th colspan="8" style="text-align:right">Total:</th>
                        <th></th>
                    </tr>
                  </tfoot>
                        <tbody class="text-center">
                							<?php $nomor=1 ?>
                								<?php
                                  $koneksi = mysqli_connect('localhost','root','','uprs');
                                  // $id_sp = isset($_GET['id_sp']) ? $_GET['id_sp'] : '';
                									$result = "SELECT * FROM sewa_pr";
                									$db = mysqli_query($koneksi,$result);
                								?>
                							<?php while ($data = mysqli_fetch_assoc($db)) {  ?>
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
                              <script>
                                    $(document).ready( function () {

                                    $('#table_id').DataTable( {
                                      data: 'price',
                                      render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp' )
                                        } );
                                    } );
                              </script>
                						</tbody>
                        </table>
                      </div>
                  </section>

                  <div class="row no-print">
                      <div class="col-12">
                    <h1>
                        <a href="" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        <a href="export_sewa_cibesel.php" target="__blank" class="btn btn-primary float-right"><i class="fa fa-file"></i> Export</a>
                        <a href="index.php?halaman=import_cibesel" class="btn btn-danger float-right" style="margin-right: 5px;"><i class="fa fa-upload"></i> Import</a>
                    </h1>
                  </div>
                </div>
                </div>
              </div>
            </div>
