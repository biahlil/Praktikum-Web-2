<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "perpustakaan";
    $dsn = "mysql:host=$host;dbname=$database";
try { 
    $pdo_conn = new PDO($dsn, $username, $password,
    array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true)); 
    
    } 
    catch(PDOException $e) { 
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>"; 
    die();
    } 
    
?>