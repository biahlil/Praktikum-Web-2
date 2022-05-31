<?php 
require ("Koneksi.php");
require ("Model.php");
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $judul_buku = $_POST["inputJudul"];
        $penulis = $_POST["inputPenulis"];
        $penerbit = $_POST["inputPenerbit"];
        $tahun_terbit = intval($_POST["inputTahun"]);
        tambah_buku($pdo_conn,$judul_buku,$penulis,$penerbit,$tahun_terbit);
    }
?>