<?php 
require ("Koneksi.php");
require ("Model.php");
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $nama_member = $_POST["inputUsername"];
        $password = $_POST["inputPassword"];
        $nomor_member = $_POST["inputNomor"];
        $alamat = $_POST["inputAlamat"];
        $tgl_mendaftar = date("Y-m-d");
        $tgl_terakhir_bayar = date("Y-m-d");
        tambah_member($pdo_conn,$nama_member,$password,$nomor_member,$alamat,$tgl_mendaftar,$tgl_terakhir_bayar);
    }
?>