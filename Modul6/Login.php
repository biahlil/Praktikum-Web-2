<?php
session_start();
require ("Koneksi.php");
$nama_member = $_POST['Nomor'];
$password = $_POST['Password'];


$sql = $pdo_conn->prepare("SELECT * FROM member WHERE nomor_member = :nomor_member and password = :Password");
$stmt = $pdo_conn->prepare($sql);
$stmt->bindParam('nomor_member', $nomor_member);
$stmt->bindParam('Password', $password);
$stmt->execute();
$hasil = $stmt->fetch();
if (isset($hasil)) {
    if ($password == $hasil["password"]) {
        $_SESSION["nomor_member"] = $hasil['nomor_member'];
        // $_SESSION["nama_member"] = $hasil['nama_member'];
        header("Location: index.php");
    }
} else {
    echo '    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">    ';
    echo "<h1 style = 'color: white;'>Username atau Password yang anda masukkan salah</h1>";
}
?>