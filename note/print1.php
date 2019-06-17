<!DOCTYPE html>
<html>
<body>


 <?php
$koneksi = mysqli_connect('localhost','root','','uprs');
$id_sp = $_GET['id_sp'];
                                            $con1 = "SELECT * FROM data_sp where id_sp = $id_sp ";
                                            $get4 = mysqli_query($koneksi, $con1);
                                            $data = mysqli_fetch_assoc($get4);
                                            

                                        ?>    



<button onclick="myFunction()">Print this page</button>


<h2><strong>&nbsp;</strong></h2>
<h2 style="text-align: center;"><strong>SURAT PERJANJIAN</strong></h2>
<p style="text-align: center;">NOMOR<?php echo $data['nomor_sp']; ?>. <em>/-076.43</em></p>
<p style="text-align: center;">TENTANG</p>
<p>&nbsp;</p>
<h2 style="text-align: center;"><strong>PERJANJIAN SEWA MENYEWA BAGI PENGHUNI</strong></h2>
<p style="text-align: center;"><strong>SATUAN </strong><strong>RUMAH SUSUN SEDERHANA SEWA (PERPANJANGAN)</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Pada hari ini <strong><em>&hellip;&hellip;&hellip;&hellip;&hellip; </em></strong>tanggal <strong><em>&nbsp;</em></strong><strong><em>&hellip;&hellip;&hellip;&hellip;&hellip; </em></strong>yang bertanda tangan dibawah ini&nbsp; :</p>
<p>a</p>
<ol>
<li>Nama :&nbsp;&nbsp;&nbsp; <strong>Drs. NUGRAHARYADI<br /></strong>Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp; Kepala Unit Pengelola Rumah Susun Cipinang<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dinas Perumahan Rakyat dan Kawasan Permukiman Provinsi DKI Jakarta<br />NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp; 197305021992031003<br />Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp; Jl. Griya Wartawan Kel. Cipinang Besar Selatan Kec. Jatinegara Kota Administrasi Jakarta Timur<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Provinsi DKI Jakarta</li>
</ol>
<p>&nbsp;</p>
<p>Bertindak sebagai Kepala Unit Pengelola Rumah Susun Cipinang dan oleh karena jabatannya yang dalam hal ini adalah sebagai Pemilik/Pihak Yang Menyewakan/Pengelola selanjutnya disebut sebagai <strong>PIHAK PERTAMA</strong>.</p>
<p>&nbsp;</p>
<table width="597">
<tbody>
<tr>
<td width="29">
<p>2.</p>
</td>
<td width="166">
<p>Nama</p>
</td>
<td width="20">
<p>:</p>
</td>
<td width="382">
<p><strong>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</strong></p>
</td>
</tr>
<tr>
<td width="29">
<p>&nbsp;</p>
</td>
<td width="166">
<p>NIK</p>
</td>
<td width="20">
<p>:</p>
</td>
<td width="382">
<p>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</p>
</td>
</tr>
<tr>
<td width="29">
<p>&nbsp;</p>
</td>
<td width="166">
<p>Tempat / Tgl. Lahir</p>
</td>
<td width="20">
<p>:</p>
</td>
<td width="382">
<p>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
</td>
</tr>
<tr>
<td width="29">
<p>&nbsp;</p>
</td>
<td width="166">
<p>Pekerjaan</p>
</td>
<td width="20">
<p>:</p>
</td>
<td width="382">
<p>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
</td>
</tr>
<tr>
<td width="29">
<p>&nbsp;</p>
</td>
<td width="166">
<p>Alamat</p>
</td>
<td width="20">
<p>:</p>
</td>
<td width="382">
<p>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Bertindak untuk dan atas nama pribadi, yang dalam hal ini adalah sebagai Penyewa/Pemakai satuan rumah susun sederhana sewa selanjutnya disebut sebagai <strong>PIHAK KEDUA</strong>.</p>
<p>&nbsp;</p>
<p>Untuk seterusnya PIHAK PERTAMA dan PIHAK KEDUA secara bersama-sama disebut <strong>"PARA PIHAK"</strong>.</p>
<p>&nbsp;</p>
<p>Bahwa PARA PIHAK sepakat membuat perjanjian sewa menyewa pemakaian satuan Rumah Susun Sederhana Sewa <strong>Cipinang</strong> <strong>Besar Selatan </strong>yang terletak di Jalan <strong>Griya Wartawan</strong> Kelurahan<strong> Cipinang Besar Selatan</strong> Kecamatan <strong>Jatinegara </strong>Kota Administrasi <strong>Jakarta Timur</strong> dengan ketentuan sebagai&nbsp; berikut :</p>
<p style="text-align: center;">&nbsp;</p>
<h1 style="text-align: center;">Pasal 1</h1>
<h1 style="text-align: center;">OBJEK SEWA</h1>
<p><strong>&nbsp;</strong></p>
<p>PIHAK PERTAMA menyewakan kepada PIHAK KEDUA satuan Rumah Susun Sederhana Sewa <strong>Cipinang</strong> <strong>Besar Selatan </strong>yang terletak di :</p>
<table>
<tbody>
<tr>
<td width="126">
<p>Cluster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p>-</p>
</td>
</tr>
<tr>
<td width="126">
<p>Blok/Lantai</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p><strong>B </strong><strong>/ </strong><strong>IV</strong></p>
</td>
</tr>
<tr>
<td width="126">
<p>Nomor</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p><strong>411</strong></p>
</td>
</tr>
<tr>
<td width="126">
<p>Peruntukkan</p>
</td>
<td width="19">
<p>:</p>
</td>
<td width="423">
<p><strong>Hunian</strong></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Selanjutnya disebut <strong>"Sarusunawa"</strong>)</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><strong>Pasal&nbsp; </strong><strong>2</strong></p>
<p style="text-align: center;"><strong>J</strong><strong>ANGKA WAKTU</strong></p>
<p>&nbsp;</p>
<ul>
<li>Jangka waktu Perjanjian ini adalah selama 2 (dua) tahun, terhitung sejak tanggal ditanda tanganinya Perjanjian ini sampai dengan tanggal <strong><em>6 Februari 2021</em></strong> dan dapat diperpanjang berdasarkan pertimbangan PIHAK PERTAMA;</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Apabila di setujui oleh PIHAK PERTAMA maka Perjanjian ini dapat diperpanjang untuk jangka waktu yang sama dengan mengajukan permohonan perpanjangan Perjanjian kepada PIHAK PERTAMA paling lambat 30 (tiga puluh) hari sebelum jangka waktu perjanjian ini berakhir.</li>
</ul>
<h1>&nbsp;</h1>

</body>
</html>