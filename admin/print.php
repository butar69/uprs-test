<p>&nbsp;</p>
<!--?php
	$koneksi = mysqli_connect('localhost','root','','uprs');
		$id_sp = $_GET['id_sp'];
	         $con1 = "SELECT * FROM data_sp
					 						join daftar_sp on data_sp.id_sp = daftar_sp.id_sp
											join rusun on (daftar_sp.id_rusun = rusun.id_rusun AND daftar_sp.id_lantai = rusun.lantai)
											join tb_blok on tb_blok.id_blok = daftar_sp.id_blok
					 						where data_sp.id_sp = $id_sp";
	         $get4 = mysqli_query($koneksi, $con1);
			 $data = mysqli_fetch_assoc($get4);
?-->
<p><button>Print this page</button></p>
<h2 style="text-align: center;"><strong><span style="font-family: 'Arial','sans-serif'; color: windowtext;">SURAT PERJANJIAN</span></strong></h2>
<p style="margin-top: 6.0pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">NOMOR&nbsp; : </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> <!--?php echo $data['nomor_sp']; ?-->. </span><em><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">/-076.43</span></em></p>
<p style="margin-top: 6.0pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">TENTANG</span></p>
<p style="margin-top: 6.0pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PERJANJIAN SEWA MENYEWA BAGI PENGHUNI<br /></span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">SATUAN </span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">RUMAH SUSUN SEDERHANA SEWA (PERPANJANGAN)</span></strong></p>
<p style="margin-left: 1.0cm;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pada hari ini </span><strong><em><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&hellip;&hellip;&hellip;&hellip;&hellip; </span></em></strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tanggal</span> <strong><em><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></em></strong><strong><em><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> <!--?php echo $data['date_register']; ?-->. </span></em></strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">yang bertanda tangan dibawah ini&nbsp; :</span></p>
<table style="width: 596px; margin-left: 26.7pt; border-collapse: collapse; height: 85px;" width="597">
<tbody>
<tr style="height: 14.95pt;">
<td style="width: 22.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">1.</span></p>
</td>
<td style="width: 96.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Nama</span></p>
</td>
<td style="width: 16.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; text-indent: -3.55pt; tab-stops: 42.55pt;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Drs. NUGRAHARYADI</span></strong></p>
</td>
</tr>
<tr style="height: 14.95pt;">
<td style="width: 22.625px; padding: 0cm 5.4pt; height: 37px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.625px; padding: 0cm 5.4pt; height: 37px;">Jabatan</td>
<td style="width: 16.625px; padding: 0cm 5.4pt; height: 37px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.625px; padding: 0cm 5.4pt; height: 37px;">
<p><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Kepala Unit Pengelola</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Rumah</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Susun </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Cipinang<br /></span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Dinas Perumahan Rakyat dan Kawasan Permukiman Provinsi DKI Jakarta</span></p>
</td>
</tr>
<tr style="height: 14.95pt;">
<td style="width: 22.625px; padding: 0cm 5.4pt; height: 10px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.625px; padding: 0cm 5.4pt; height: 10px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">NIP</span></p>
</td>
<td style="width: 16.625px; padding: 0cm 5.4pt; height: 10px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.625px; padding: 0cm 5.4pt; height: 10px;">
<p style="margin-left: -5.4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">197305021992031003</span></p>
</td>
</tr>
<tr style="height: 14.0pt;">
<td style="width: 22.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Alamat</span></p>
</td>
<td style="width: 16.625px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.625px; padding: 0cm 5.4pt; height: 14px;">
<p>Jl. <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Griya Wartawan Kel. Cipinang Besar Selatan Kec. Jatinegara Kota Administrasi Jakarta Timur</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Provinsi DKI Jakarta</span></p>
</td>
</tr>
</tbody>
</table>
<p style="margin-left: 1.0cm; tab-stops: 1.0cm;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Bertindak </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagai </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Kepala Unit Pengelola</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Rumah</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Susun </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Cipinang </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan oleh karena jabatannya yang dalam hal ini adalah sebagai Pemilik/Pihak Yang Menyewakan/Pengelola selanjutnya disebut sebagai <strong>PIHAK PERTAMA</strong>.</span></p>
<table style="width: 596px; margin-left: 26.7pt; border-collapse: collapse; height: 112px;" width="597">
<tbody>
<tr style="height: 14.95pt;">
<td style="width: 22.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">2.</span></p>
</td>
<td style="width: 96.6167px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Nama</span></p>
</td>
<td style="width: 16.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.517px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; text-indent: -3.55pt; tab-stops: 42.55pt;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> <!--?php echo $data['nama_sp']; ?-->.</span></strong></p>
</td>
</tr>
<tr style="height: 14.95pt;">
<td style="width: 22.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.6167px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">NIK</span></p>
</td>
<td style="width: 16.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.517px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: -5.4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"><!--?php echo $data['nik']; ?-->.</span></p>
</td>
</tr>
<tr style="height: 14.95pt;">
<td style="width: 22.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.6167px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Tempat / Tgl. Lahir</span></p>
</td>
<td style="width: 16.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.517px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: -5.4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"><!--?php echo $data['ttl']; ?-->.</span></p>
</td>
</tr>
<tr style="height: 14.0pt;">
<td style="width: 22.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.6167px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Pekerjaan</span></p>
</td>
<td style="width: 16.6333px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.517px; padding: 0cm 5.4pt; height: 14px;">
<p style="margin-left: -5.4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"><!--?php echo $data['job']; ?-->.</span></p>
</td>
</tr>
<tr style="height: 43.85pt;">
<td style="width: 22.6333px; padding: 0cm 5.4pt; height: 56px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></p>
</td>
<td style="width: 96.6167px; padding: 0cm 5.4pt; height: 56px;">
<p style="margin-left: .4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Alamat</span></p>
</td>
<td style="width: 16.6333px; padding: 0cm 5.4pt; height: 56px;">
<p style="margin-left: 0cm; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">:</span></p>
</td>
<td style="width: 397.517px; padding: 0cm 5.4pt; height: 56px;">
<p style="margin-left: -5.4pt; tab-stops: 42.55pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"><!--?php echo $data['addres']; ?-->.</span></p>
</td>
</tr>
</tbody>
</table>
<p style="margin-left: 148.55pt; text-align: justify; tab-stops: 135.0pt;"><span style="font-size: 6.0pt; font-family: 'Arial','sans-serif';">&nbsp;</span></p>
<p style="margin-left: 1.0cm;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Bertindak untuk dan atas nama </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pribadi</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">, yang dalam hal ini adalah sebagai Penyewa/Pemakai </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">satuan rumah susun sederhana sewa </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">selanjutnya disebut sebagai <strong>PIHAK KEDUA</strong>.</span></p>
<p style="margin-left: 1.0cm;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Untuk seterusnya PIHAK PERTAMA dan PIHAK KEDUA secara bersama-sama disebut <strong>"PARA PIHAK"</strong>.</span></p>
<p style="margin-left: 1.0cm;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Bahwa </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PARA PIHAK </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sepakat membuat perjanjian sewa</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> menyewa </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pemakaian</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> satuan</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> Rumah Susun Sederhana Sewa </span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Cipinang</span></strong> <strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Besar Selatan </span></strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">yang terletak di </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">J</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">alan </span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Griya Wartawan</span></strong> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Kelurahan<strong> Cipinang Besar Selatan</strong> Kecamatan <strong>Jatinegara </strong>Kota Administrasi</span> <strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Jakarta Timur</span></strong> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dengan ketentuan sebagai&nbsp; berikut :</span></p>
<h1 style="margin-left: 42.55pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">1<br /></span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">OBJE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">K SEWA</span></h1>
<p style="text-align: justify; tab-stops: 63.8pt; margin: 0cm 0cm 6.0pt 1.0cm;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">PIHAK PERTAMA menyewakan kepada PIHAK KEDUA satuan Rumah Susun Sederhana Sewa </span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Cipinang</span></strong> <strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Besar Selatan </span></strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">yang terletak di :</span></p>
<table style="margin-left: 26.7pt; border-collapse: collapse;">
<tbody>
<tr>
<td style="width: 94.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="126">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Cluster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
</td>
<td style="width: 14.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">:</span></p>
</td>
<td style="width: 317.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="423">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">-</span></p>
</td>
</tr>
<tr>
<td style="width: 94.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="126">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Blok/Lantai</span></p>
</td>
<td style="width: 14.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">:</span></p>
</td>
<td style="width: 317.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="423">
<p style="text-align: justify; tab-stops: 63.8pt;"><!--?php echo $data['blok']; ?--> <strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">/ </span></strong><!--?php echo $data['lantai']; ?--></p>
</td>
</tr>
<tr>
<td style="width: 94.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="126">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Nomor</span></p>
</td>
<td style="width: 14.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">:</span></p>
</td>
<td style="width: 317.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="423">
<p style="text-align: justify; tab-stops: 63.8pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 94.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="126">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Peruntukkan</span></p>
</td>
<td style="width: 14.15pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="19">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">:</span></p>
</td>
<td style="width: 317.25pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="423">
<p style="text-align: justify; tab-stops: 63.8pt;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Hunian</span></strong></p>
</td>
</tr>
</tbody>
</table>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center; padding-left: 40px;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal&nbsp; </span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">2</span></strong></p>
<p style="margin-left: 42.55pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">J</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">ANGKA WAKTU</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Jangka waktu Perjanjian ini adalah selama 2 (dua) tahun, terhitung sejak tanggal ditanda</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">tangani</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">nya</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> Perjanjian ini sampai dengan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">tanggal</span> <strong><em><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">6 Februari 2021</span></em></strong> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dapat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">diperpanjang</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">berdasarkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">pertimbangan PIHAK PERTAMA;</span></li>
<li>Apabila di setujui oleh PIHAK PERTAMA maka Perjanjian ini dapat diperpanjang untuk jangka waktu yang sama dengan mengajukan permohonan perpanjangan Perjanjian kepada PIHAK PERTAMA paling lambat 30 (tiga puluh) hari sebelum jangka waktu perjanjian ini berakhir.</li>
</ol>
</li>
</ol>
<h1 style="margin-left: 42.55pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal&nbsp; 3</span></h1>
<p style="margin-left: 42.55pt; text-align: center; tab-stops: 63.8pt 193.5pt 202.5pt;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">BIAYA SEWA</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Biaya sewa sarusunawa sebagai mana dimaksud dalam Pasal 1 </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">perbulan</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> sebesar </span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">341.000</span></strong> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">(</span><strong><em><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Tiga Ratus Empat Puluh Satu Ribu Rupiah</span></em></strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">) d</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">an pembayarannya dilakukan setiap bulan dari tanggal 1 s/d tanggal 20</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">.</span></li>
<li>Biaya sewa sarusunawa<span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> dapat berubah </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">sesuai ketentuan tarif yang ditetapkan berdasarkan peraturan perundang-undangan</span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">.</span></strong></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Perubahan biaya sewa berlaku sejak ditetapkannya peraturan perundang-undangan.</span></li>
</ol>
</li>
</ol>
<h1 style="margin-left: 42.55pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 4<br /></span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">H</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">AK DAN KEWAJIBAN</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> PIHAK </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PERTAMA</span><strong><span style="font-size: 8.0pt; font-family: 'Arial','sans-serif';">&nbsp;</span></strong></h1>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK PERTAMA berhak </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">untuk :<br /></span></span><br />
<ol style="list-style-type: lower-alpha;">
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan seleksi dan menetapkan calon penghuni;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memutuskan perjanjian sewa menyewa apabila penghuni melanggar ketentuan dalam perjanjian sewa menyewa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">m</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">enagih/menerima</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> biaya s</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ewa</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> dan/atau biaya lainnya yang telah ditetapkan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memberikan sanksi denda atas keterlambatan pembayaran yang menjadi kewajiban penghuni serta pelanggaran terhadap tata tertib penghunian sebagaimana diatur dalam perjanjian sewa menyewa dan tata tertib penghunian;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksanakan pengaturan dan penertiban administrasi berkaitan dengan hak, kewajiban dan larangan penghuni; dan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksanakan pengaturan dan penertiban teknis berkaitan dengan pengelolaan rusunawa<br /><br /></span></li>
</ol>
</li>
<li>PIHAK PERTAMA berkewajiban untuk :</li>
</ol>
</li>
</ol>
<ol>
<li style="list-style-type: none;">
<ol>
<li style="list-style-type: none;">
<ol style="list-style-type: lower-alpha;">
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membuat perjanjian sewa menyewa dengan calon penghuni;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menyediakan sarana dan prasarana rusunawa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan pemeriksaan, perawatan, pemeliharaan, perbaikan secara teratur terhadap seluruh elemen dan komponen rusunawa serta inspeksi reguler dan insidental yang dapat dilakukan bersama SKPD/UKPD terkait;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mewujudkan lingkungan yang bersih dan teratur;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menjaga situasi dan kondisi keamanan Iingkungan dan menjalin kerja sama dengan aparat keamanan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengadakan sosialisasi berkala termasuk pelatihan dan bimbingan tentang keadaan darurat dan bahaya kebakaran kepada penghuni;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengembalikan uang jaminan dari penghuni, apabiia terjadi perjanjian sewa menyewa antara UPRS dan penghuni yang berakhir/dibatalkan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menanggapi pengaduan/keluhan atas laporan yang disampaikan oleh penghuni;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menyediakan prasarana dasar Iistrik dan air bersih sesuai yang telah disepakati dalam perjanjian sewa menyewa sarusunawa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menyusun tata tertib dan aturan penghunian serta memberikan sosialisasi kepada penghuni rusunawa, termasuk hak, kewajiban dan larangan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memonitor kesesuaian/kebenaran penghuni yang tinggal di rusunawa sesuai dengan perjanjian sewa menyewa yang telah ditandatangani minimal 3 (tiga) bulan sekali; dan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menjaga, merawat dan memeiihara prasarana, sarana dan utilitas.</span></li>
</ol>
</li>
</ol>
</li>
</ol>
<h1 style="margin-left: 42.55pt; text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal&nbsp; 5</span></h1>
<p style="margin-left: 42.55pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">H</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">AK DAN KEWAJIBAN</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> PIHAK </span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">KEDUA</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">KEDU</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">A berhak </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">untuk :<br /></span></span><br />
<ol style="list-style-type: lower-alpha;">
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menempati/memanfaatkan Sarusunawa sebagaimana dimaksud dalam Pasal 1;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mendapatkan layanan suplai listrik, air bersih dan/atau pelayanan lainnya yang ditetapkan oleh Kepala UPRS;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengajukan keberatan atas pelayanan kondisi lingkungan hunian yang kurang diperhatikan atau terawat kepada UPRS;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mendapat pelayanan atas perbaikan kerusakan bangunan, prasarana, sarana dan utilitas umum yang bukan disebabkan oleh penghuni;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menjadi anggota rukun tetangga, rukun warga yang dimanfaatkan sebagai wadah komunikasi dan sosialisasi guna kepentingan bersama;</span></li>
<li style="text-align: justify;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mendapat penjelasan, pelatihan dan bimbingan tentang penanggulangan bahaya kebakaran dan evakuasi, pengelolaan sampah, pembuangan limbah, penghematan air, listrik dan lainnya; dan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memanfaatkan prasarana, sarana dan utilitas sesuai dengan fungsi.<br /><br /></span></li>
</ol>
</li>
<li>PIHAK <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">KEDU</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">A </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berkewajiban untuk :</span></li>
</ol>
</li>
</ol>
<ol>
<li style="list-style-type: none;">
<ol>
<li style="list-style-type: none;">
<ol style="list-style-type: lower-alpha;">
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menaati peraturan, tata tertib serta menjaga ketertiban lingkungan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengikuti aturan tentang kemampuan daya dukung bangunan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memelihara, merawat, menjaga kebersihan sarusunawa dan sarana umum;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membuang sampah di tempat yang telah ditentukan secara rapi dan teratur;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membayar biaya pemakaian sarana air bersih, listrik dan/atau pelayanan lainnya yang ditetapkan oleh Kepala UPRS;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membayar biaya sewa rusunawa dan jaminan biaya sewa rusunawa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaporkan pada pihak UPRS apabila melihat adanya kerusakan pada prasarana, sarana dan utilitas di rusunawa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaporkan pada pihak UPRS apabila mengetahui adanya pemindahan hak sewa kepada pihak lain;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaporkan pada pihak UPRS apabila melihat adanya indikasi tindakan kriminal di rusunawa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membayar ganti rugi untuk setiap kerusakan yang diakibatkan kelalaian penghuni;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengosongkan sarusunawa pada saat perjanjian sewa menyewa berakhir/ dibatalkan dan menyerahkan kembali kepada Kepala UPRS;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berpartisipasi dalam menciptakan lingkungan dan kehidupan bermasyarakat yang harmonis;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengikuti pelatihan dan bimbingan yang dilaksanakan oleh UPRS atau intansi terkait lainnya; dan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengurus perubahan Kartu Tanda Penduduk dan Kartu Keluarga sesuai dengan lokasi rumah susun selambat-Iambatnya 3 (tiga) bulan terhitung sejak tanggal perjanjian ini ditandatangani.</span></li>
</ol>
</li>
</ol>
</li>
</ol>
<h4 style="text-indent: -21.25pt; margin: 6pt 0cm 0.0001pt 49.6pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal</span></strong> <strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">6</span></strong></h4>
<p style="margin-left: 49.65pt; text-align: center; text-indent: -21.3pt;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">JAMINAN</span></strong><strong><span style="font-size: 6.0pt; font-family: 'Arial','sans-serif';">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA wajib menyediakan Jaminan Uang </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">B</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">iaya Sewa pada saat Perjanjian ini ditandatangani oleh PARA PIHAK.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA wajib membuka Rekening Tabungan di </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">B</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ank </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">KI atas nama PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA dengan minimal Jaminan Uang </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">B</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">iaya Sewa sebesar 3 (t</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">i</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ga) kali dari biaya sewa sarusunawa yang dihuni oleh PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Jaminan Uang </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">B</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">iaya Sewa tidak dapat dicairkan selama PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA menempati/menghuni sarusunawa.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK PERTAMA menerima kuasa dari PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA untuk dapat mencairkan Jaminan Uang </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">B</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">iaya Sewa tersebut apabila :</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA menunggak/tidak membayar biaya sewa pemakaian sarusunawa selama 3 (tiga) bulan berturut</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">-t</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">urut; da</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">n</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">/atau</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Sarusunawa yang ditempati oleh PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA ditertibkan dengan memperhitungkan tunggakan biaya sewa yang belum diselesaikan.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Jaminan Uang </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">B</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">iaya Sewa tetap menjadi hak PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA sepanjang PIHAK KEDUA tidak memiliki tunggakan dan/atau melakukan pelanggaran.</span></li>
</ol>
</li>
</ol>
<p style="margin-bottom: 0.0001pt; text-align: center; padding-left: 40px;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 7<br /><br /></span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">LARANGAN</span></strong><strong><span style="font-size: 6.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">KEDU</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">A </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dilarang</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">untuk :</span></li>
</ol>
</li>
</ol>
<ol>
<li style="list-style-type: none;">
<ol>
<li style="list-style-type: none;">
<ol style="list-style-type: lower-alpha;">
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memindahkan hak sewa kepada pihak lain;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menyewa lebih dari satu sarusunawa;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menggunakan sarusunawa sebagai tempat usaha/gudang;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengubah prasarana, sarana dan utilitas rusunawa yang sudah ada;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menjemur pakaian dan lainnya di luar tempat yang telah ditentukan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menjual/memakai/memproduksi narkoba dan minuman keras, berjudi, berbuat maksiat, kegiatan yang menimbulkan suara keras/bising, bau menyengat, termasuk memelihara binatang;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memasak dengan menggunakan kayu, arang, atau bahan lain yang mengotori dan dapat menimbulkan bahaya kebakaran;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membuang benda-benda ke dalam saluran air kamar mandi/WC yang dapat menyumbat saluran pembuangan;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menyimpan segala jenis bahan peledak, bahan kimia, bahan bakar atau bahan terlarang lainnya yang dapat menimbulkan kebakaran atau bahaya lain;</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengubah konstruksi bangunan rusunawa; dan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">meletakkan barang-barang melampaui daya dukung bangunan.</span></li>
</ol>
</li>
</ol>
</li>
</ol>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 6.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 8</span></strong></p>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">SANKSI</span></strong><strong><span style="font-size: 6.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila PIHAK KEDUA terlambat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksanakan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pembayaran</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">biaya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sewa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagaimana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 3, maka PIHAK KEDUA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dikenakan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">denda</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">setiap</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">bulan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebesar 2% (dua persen) dari</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">biaya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sewa</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">KEDUA tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksanakan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pembayaran</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berikut</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dendanya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagaimana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pada</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ayat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">(1),</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">maka</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila PIHAK KEDUA melanggar</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ketentuan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagaimana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 7 huruf</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">a, huruf b, dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">huruf d, maka PIHAK KEDUA dikenakan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sanksi</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pidana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">penjara paling lama 1 (satu) tahun</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">denda paling banyak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Rp 150.000.000,00 (seratus lima puluh</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">juta rupiah) atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">denda</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berupa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ganti</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kerugian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebesar</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">jumlah yang akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ditentukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kemudian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">oleh PIHAK PERTAMA dan/atau</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila PIHAK KEDUA melanggar</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ketentuan yang dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 5 ayat (2) dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 7 huruf f, maka</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menja</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">d</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">i</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">batal demi hukum dan PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">penertiban</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pengosongan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila PIHAK KEDUA tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksanakan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kewajiban</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagaimana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 5 ayat (2) dan/atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ayat (1), maka PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">penertiban</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pengosongan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">selama</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berlangsung</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sarusunawa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dihuni</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">selama 15 (lima belas) hari</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kalender</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berturut-turut</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tanpa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pemberitahuan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">secara</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tertulis</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kepada PIHAK PERTAMA, maka PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pembatalan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sewa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menyewa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">penyegelan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">serta</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pengosongan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">secara</span></li>
</ol>
</li>
</ol>
<p>&nbsp;</p>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 9</span></strong></p>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PEMBATALAN DAN PENGAKHIRAN PERJANJIAN</span></strong><strong><span style="font-size: 6.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perj</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">a</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">njian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berakhir</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">secara</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">otomatis</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pada</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">saat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">jangka</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">waktu</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagai</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 2 ayat (1).</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dapat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dibatalkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">oleh</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">salah</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">satu</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pihak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kecuali</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">karena</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">alasan-alasan yang se</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">c</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ara</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tegas</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">disebutkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini, yaitu :</span>
<ol style="list-style-type: lower-alpha;">
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK KEDUA tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksa</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">n</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pembayaran</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">biaya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sewa</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berikut</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dendanya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">selama </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">3</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> (tiga) bulan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">berturut-turut; dan/atau</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK KEDUA tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melaksanakan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kewajiban-kewajibannya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagaimana </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 5 ayat (2), dan/atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melanggar</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ketentuan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 7.</span></li>
</ol>
</li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila PIHAK KEDUA memenuhi</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">unsur</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pembatalan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagaimana</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dimaksud</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pada</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ayat (2), maka PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memberikan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Surat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Teguran</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">yang pertama</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kepada PIHAK KED</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">U</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">A agar PIHAK KEDUA segera</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memenuhi</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kewajibannya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan/atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memperbaiki</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kesalahan/pelanggaran yang telah</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">waktu 3 (tiga) hari</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kalender PIHAK KEDUA tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memenuhi</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kewajibannya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan/atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memperbaiki</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kesalahan/pelanggaran yang telah</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dibuatnya, maka PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">menerbitkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Surat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Teguran</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Kedua</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sebagai</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">teguran yang terakhir</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kepada PIHAK KEDUA.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">waktu 3 (tiga) hari</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kalender</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sejak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Surat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Teguran yang terakhir</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">diterbitkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PIHAK KEDUA</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tetap</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tidak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memenuhi</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kewajibannya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan/atau</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">memperbaiki</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kesalahan/pelanggaran yang telah</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dibuatnya, maka PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">membatalkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">secara</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sepihak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pembatalan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian se</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">c</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ara</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sepihak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">oleh PIHAK PERTAMA akan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dilakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dengan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pemberitahuan se</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">c</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ara</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tertulis</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">disertai</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dengan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">melakukan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">penyegelan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sarusunawa, dan PIHAK KEDUA harus</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">segera</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">meninggalkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengosongkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sarusunawa paling lambat 7 (tujuh) hari</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">kalender</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">sejak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tanggal</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pemberitahuan</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Sehubungan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">dengan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">pembatalan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">terhadap</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ini, PARA PIHAK sepakat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">untuk</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">mengesampingkan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">ketentuan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 1266 dan 1267 Kitab</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Undang-Undang</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Hukum</span><span style="font-size: 8.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> <br /></span></li>
</ol>
</li>
</ol>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal 10</span></strong></p>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PENERTIBAN DAN PENGOSONGAN</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila PIHAK KEDUA </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">tidak meninggalkan dan mengosongkan sarusunawa dalam waktu 7 (tujuh) hari kalender sejak pemberitahuan pembatalan Perjanjian dan penempelan segel sebagaimana dimaksud dalam Pasal 9 ayat (6), </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">maka PIHAK </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PERTAMA </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">akan</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> menerbitkan Surat Peringatan (selanjutnya disebut &ldquo;SP&rdquo;) I (kesatu).</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila dalam waktu 3 (tiga) hari kalender sejak SP I (kesatu) diterbitkan PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA tidak mengindahkan SP I (kesatu) tersebut maka PIHAK PERTAMA akan menerbitkan SP II (kedua).</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila dala</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">m</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;"> waktu 3 (tiga) hari kalender PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA masih tetap tidak mengindahkan SP II (kedua) atau SP terakhir tersebut, maka PIHAK PERTAMA akan me</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">l</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">akukan pengosongan secara paksa terhadap PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">UA dan segala biaya serta risiko yang timbul atas pe</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">n</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">gosongan paksa tersebut menj</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">a</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">di beban PIHAK KE</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">D</span></li>
</ol>
</li>
</ol>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal </span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">11</span></strong></p>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">KETENTUAN LAIN-LAIN</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<ol>
<li style="list-style-type: none;">
<ol>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila terjadi keadaan memaksa (bencana alam, kebakaran) yang mengakibatkan sarusunawa tidak dapat dipergunakan, Perjanjian ini batal dan/atau berakhir demi hukum.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila terjadi perubahan peruntukan atas tanah yang diatasnya berdiri bangunan Rumah Susun Sederhana Sewa (Rusunawa) maka PIHAK KEDUA harus mengosongkan sarusunawa tanpa menuntut ganti kerugian berupa apapun dan dengan alasan apapun.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Bahwa pemakaian sarusunawa disebut sewa/kontrak bulanan dan pembayarannya disebut pembayaran biaya sewa/kontrak bulanan.</span></li>
<li><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Bahwa tanah dan bangunan rusunawa yang dimaksud dalam Perjanjian ini adalah aset/milik Pemerintah Provinsi DKI Jakarta.</span></li>
</ol>
</li>
</ol>
<p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">Pasal </span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">1</span></strong><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">2</span></strong></p>
<p style="margin-bottom: 0.0001pt; text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">PERJANJIAN TAMBAHAN<br /></span></strong><strong><span style="font-size: 8.0pt; font-family: 'Arial','sans-serif'; color: windowtext;">&nbsp;</span></strong></p>
<p style="line-height: 120%; margin: 3pt 0cm 4pt 1cm;"><span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">Apabila</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">terdapat</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">hal-hal yang belum</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">diatur</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">dan/atau</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">diperlukan</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">perubahan</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">terhadap</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">isi</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">ini, maka</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">akan</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">diatur</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">dalam</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">suatu Addendum yang merupakan</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">bagian</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">tidak</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">terpisahkan</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">dengan</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">Perjanjian</span> <span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">ini</span><span style="font-size: 11.0pt; line-height: 120%; font-family: 'Arial','sans-serif'; color: windowtext;">.<br /></span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">ini</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dibuat</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dalam</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">rangkap </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">2</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> (</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dua</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">) dengan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">materai</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">secukupnya</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">ditandatangani</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">oleh</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> Para </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Pihak</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">pada</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">hari</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">dan</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">tanggal yang disebutkan di awal</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">Perjanjian</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">ini, sehingga</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"> keduanya </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">mempunyai</span> <span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">kekuatan h</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">u</span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">kum yang sama</span></p>
<table style="margin-left: 26.7pt; border-collapse: collapse; height: 273px; width: 785px;" width="561">
<tbody>
<tr style="height: 42px;">
<td style="width: 205.917px; padding: 0cm 5.4pt; height: 42px;">
<p style="text-align: justify; tab-stops: 63.8pt;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">&nbsp;</span></p>
</td>
<td style="width: 8.86667px; padding: 0cm 5.4pt; height: 42px;">
<p style="text-align: justify; tab-stops: 63.8pt;">&nbsp;</p>
</td>
<td style="width: 523.017px; padding: 0cm 5.4pt; height: 42px;">
<p style="text-align: center;">Jakarta,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2019</p>
</td>
</tr>
<tr style="height: 65px;">
<td style="width: 205.917px; padding: 0cm 5.4pt; height: 65px;">
<p style="text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">PIHAK KEDUA<br /></span></p>
</td>
<td style="width: 8.86667px; padding: 0cm 5.4pt; height: 65px;">
<p style="text-align: justify; tab-stops: 63.8pt;">&nbsp;</p>
</td>
<td style="width: 523.017px; padding: 0cm 5.4pt; height: 65px;">
<p style="text-align: center;"><!--?php echo $data['blok']; ?--> PIHAK PERTAMA,<br /><!--?php echo $data['lantai']; ?--></p>
<p style="text-align: center;">Kepala Unit Pengelola Rumah Susun Cipinang</p>
</td>
</tr>
<tr style="height: 149px;">
<td style="width: 205.917px; padding: 0cm 5.4pt; height: 149px;">
<p style="text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"><span style="font-size: 9pt;">Pas Foto <br />3x4</span><br /></span></p>
</td>
<td style="width: 8.86667px; padding: 0cm 5.4pt; height: 149px;">&nbsp;</td>
<td style="width: 523.017px; padding: 0cm 5.4pt; height: 149px;">
<p style="text-align: justify; tab-stops: 63.8pt;">&nbsp;</p>
</td>
</tr>
<tr style="height: 65px;">
<td style="width: 205.917px; padding: 0cm 5.4pt; height: 17px;">
<p style="text-align: center;"><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">........................<br /></span></p>
</td>
<td style="width: 8.86667px; padding: 0cm 5.4pt; height: 17px;">
<p style="text-align: justify; tab-stops: 63.8pt;">&nbsp;</p>
</td>
<td style="width: 485.217px; padding: 0cm 5.4pt 0cm 45px; height: 17px;">
<p style="text-align: center;"><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Drs. NUGRAHARYADI<br /></span></strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">NIP </span><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';">197305021992031003</span><strong><span style="font-size: 11.0pt; font-family: 'Arial','sans-serif';"><br /></span></strong></p>
</td>
</tr>
</tbody>
</table>
<p style="padding-left: 80px;">&nbsp;</p>
