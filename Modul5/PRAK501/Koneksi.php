<?php

    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "perpustakaan";
    $dsn = "mysql:host=$host;dbname=$database";
try { 
    $pdo_conn = new PDO($dsn, $username, $password,
    array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true)); 
        
    // $stmt = $dbh->prepare('INSERT INTO murid VALUES (?, ?, ?, ?)');
// hubungkan data dengan variabel (bind)
    // $stmt->bindParam(1, $no_induk);
    // $stmt->bindParam(2, $nama);
    // $stmt->bindParam(3, $tempat_lahir);
    // $stmt->bindParam(4, $tanggal_lahir);
// siapkan "data" query
    // $no_induk="109023031";
    // $nama="Jerry Kurniawan";
    // $tempat_lahir="Malang";
    // $tanggal_lahir="1990-05-08";
// jalankan query (execute)
    // $stmt->execute();
// tampilkan hasil proses query
    // echo $stmt->rowCount()." data berhasil ditambahkan";
// hapus koneksi
    // $dbh = null;
    
    } 
    catch(PDOException $e) { 
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>"; 
    die();
    } 
    
?>