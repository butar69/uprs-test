<?php
$koneksi = mysqli_connect('localhost','root','','uprs');

$id_sp = $_GET['id_sp'];

if(isset($_POST['update'])) {

    $id_rusun = $_POST['id_rusun'];
    $date_register = $_POST['date_register'];
    $date_expired = $_POST['date_expired'];
    $nama_sp = $_POST['nama_sp'];
    $nomor_sp = $_POST['nomor_sp'];

    // query update data
    // $bd = "UPDATE data_sp, daftar_sp SET data_sp.nama_sp='$nama_sp' daftar_sp.id_rusun = '$id_rusun' daftar_sp.date_register = '$date_register',
    // daftar_sp.date_expired = '$date_expired' daftar_sp.nomor_sp = '$nomor_sp' WHERE data_sp.id_sp=$id_sp";

    // update data ke database
    mysqli_query($koneksi,"update daftar_sp set date_expired='$date_expired', date_register='$date_register', nomor_sp='$nomor_sp' where id_sp='$id_sp'");

    // mengalihkan halaman kembali ke index.php
    header("location:perpanjang_sewa.php");


?>
