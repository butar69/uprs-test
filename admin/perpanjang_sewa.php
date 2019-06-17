<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perpanjang Sewa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Sewa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <div class="row">
    <div class="card">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h5>UPRS Cipinang</h5>
          <section class="konten">
             <div class="card-body">
                <table id="table_id" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr class="text-center">
                      <th>No.</th>
                      <th>Lokasi Rusun</th>
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
                      <th>Edit</th>
                      <th>Print</th>
                      </tr class="text-center">
                  	</thead>
	               <tbody>
      							<?php $nomor=1 ?>
      								<?php
                        $koneksi = mysqli_connect('localhost','root','','uprs');
                        $id_sp = isset($_GET['id_sp']) ? $_GET['id_sp'] : '';
      									$result = "SELECT * FROM data_sp
                          JOIN daftar_sp on data_sp.id_sp = daftar_sp.id_sp
                          JOIN rusun on (daftar_sp.id_rusun = rusun.id_rusun AND daftar_sp.id_lantai = rusun.lantai)
        									JOIN tb_blok on tb_blok.id_blok = daftar_sp.id_blok
                          where data_sp.id_sp";
      									$db = mysqli_query($koneksi,$result);
      								?>
      							<?php while ($data = mysqli_fetch_assoc($db)) {  ?>
      								<tr>
      									<td><?php echo $nomor; ?></td>
                        <td><?php echo $data['id_rusun']; ?></td>
                        <td><?php echo $data['date_register']; ?></td>
                        <td><?php echo $data['date_expired']; ?></td>
      									<td><?php echo $data['nomor_sp']; ?></td>
      									<td><?php echo $data['nama_sp']; ?></td>
      									<td><?php echo $data['nik']; ?></td>
                        <td><?php echo $data['lantai']; ?></td>
                        <td><?php echo $data['blok']; ?></td>
                        <td><?php echo $data['unit']; ?></td>
      									<td><?php echo $data['status']; ?></td>
      									<td><?php echo $data['nomor_va']; ?></td>

      									<?php if ($data['status'] == 'Umum'): ?>
      									<td><?php echo $data['tarif_umum']; ?></td>
      									<?php else: ?>
      									<td><?php echo $data['tarif_relokasi']; ?></td>
      									<?php endif ?>

      								<td>
      									<a href="index.php?halaman=test-update&id_sp=<?php echo $data['id_sp'];?>" class="icon ion-md-create"></a>
      								</td>

                      <td>
                        <a target="_blank" href="print.php?id_sp=<?php echo $data['id_sp'];?>" class="icon ion-md-print"></a>
                      </td>
      								</tr>
      							<?php $nomor++; ?>
      							<?php } ?>
      						</tbody>
                </tbody>
              </table>
            </table>
          </div>
        </section>
        <h1>
          <a href="index.php?halaman=daftar" class="btn btn-success"><i class="fa fa-plus"></i> Input</a>
          <a href="export_cibesel.php" target="__blank" class="btn btn-primary"><i class="fa fa-file"></i> Export</a>
        </h1>
      </div>
    </div>
</div>