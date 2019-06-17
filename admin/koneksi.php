<?php
    @session_start();
    $dbserver = "localhost"
    $dbuser = "id9242539_admin"
    $dbpassword = "admin_123"
    $dbname = "id9242539_uprs"

    global $koneksi;
    $koneksi = mysqli_connect ($dbserver,$dbuser,$dbpassword) or die ("Koneksi ke server error! " . mysqli_error ());
    mysqli_select_db($dbname,$koneksi) or die (:"Koneksi ke database error! " . msyqli_error());

 ?>
