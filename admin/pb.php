<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Warga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Warga Pondok Bambu</li>
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
        <h5>Rumah Susun Pondok Bambu</h5>
          <section class="konten">
             <div class="card-body">
                <table id="table_id" class="table table-striped table-bordered" style="width:100%">
                			<thead>
                    <tr class="bg-dark text-white text-center">
                  			<th>No.</th>
                        <th>Tanggal Daftar</th>
                        <th>Tanggal Berakhir</th>
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
                  			<th>Print</th>
                		</tr class="text-center">
                	</thead>
          	         <tbody>
          							<?php $nomor=1 ?>
          								<?php
                              $koneksi = mysqli_connect('localhost','root','','uprs');
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
                            <td><?php echo $pecah['date_register']; ?></td>
                            <td><?php echo $pecah['date_expired']; ?></td>
          									<td><?php echo $pecah['nomor_kk']; ?></td>
          									<td><?php echo $pecah['nomor_sp']; ?></td>
          									<td><?php echo $pecah['nama_sp']; ?></td>
          									<td><?php echo $pecah['nik']; ?></td>
          									<td><?php echo $pecah['nama']; ?></td>
          									<td><?php echo $pecah['umur']; ?></td>
          									<td><?php echo $pecah['jenis_kelamin']; ?></td>
          									<td><?php echo $pecah['pekerjaan']; ?></td>
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
                            <ion-icon name="print"></ion-icon>
          									<a target="__blank" href="print.php?id_sp=<?php echo $pecah['id_sp'];?>" class="icon ion-md-print" ion-icon size="large"></a>
          								</td>

          								</tr>
          							<?php $nomor++; ?>
          							<?php } ?>
          						</tbody>
                    </tabel>
                  </table>
                </div>
              </section>
              <h1>
                <a href="index.php?halaman=daftar" class="btn btn-success"><i class="fa fa-plus"></i> Daftar</a>
                <a href="export_cibesel.php" target="__blank" class="btn btn-primary"><i class="fa fa-file"></i> Export</a>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
