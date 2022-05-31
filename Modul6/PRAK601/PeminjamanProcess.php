<?php 
require ("Koneksi.php");
require ("Model.php");
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $tgl_pinjam = $_POST["inputPinjam"];
        $tgl_kembali = $_POST["inputKembali"];
        tambah_peminjaman($pdo_conn,$tgl_pinjam,$tgl_kembali);
    }
?>