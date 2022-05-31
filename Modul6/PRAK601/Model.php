<?php
require ("Koneksi.php");
#Globals Var
$result = null;

#Fungsi data member
    // Megambill semua data member
    function get_all_member ($pdo_conn,&$result)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("SELECT * FROM member ORDER BY id_member DESC");
        // jalankan query (execute)
        $stmt->execute();
        // Mengambil hasil
        $result = $stmt->fetchAll();
        // return hasil
        return $result;
    }
    // Menambahkan member ke database
    function tambah_member ($pdo_conn,$nama_member,$password,$nomor_member,$alamat,$tgl_mendaftar,$tgl_terakhir_bayar)
    {
        // siapkan query
        $sql = 'INSERT INTO member VALUES (null, ?, ?, ?, ?, ?, ?)';
        $stmt = $pdo_conn->prepare($sql);
        // hubungkan data dengan variabel (bind)
        $stmt->bindParam(1, $nama_member);
        $stmt->bindParam(2, $password);
        $stmt->bindParam(3, $nomor_member);
        $stmt->bindParam(4, $alamat);
        $stmt->bindParam(5, $tgl_mendaftar);
        $stmt->bindParam(6, $tgl_terakhir_bayar);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
        header("Location: Member.php");
    }
    // Mengambil 1 data member berdasarkan id 
    function get_member_byid ($pdo_conn,$id_member,&$result)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("SELECT * FROM member WHERE id_member = ".$id_member);
        // jalankan query (execute)
        $stmt->execute();
        // Mengambil hasil
        $result = $stmt->fetchAll();
        // return hasil
        return $result;
    }
    // Update data member
    function update_member ($pdo_conn,$id_member,$nama_member,$password,$nomor_member,$alamat,$tgl_mendaftar,$tgl_terakhir_bayar)
    {
        // siapkan query
        $sql = "UPDATE member SET nama_member = '".$nama_member."', password = '".$password."', nomor_member = '".$nomor_member."', alamat = '".$alamat."', tgl_mendaftar = '".$tgl_mendaftar."', tgl_terakhir_bayar = '".$tgl_terakhir_bayar."' WHERE id_member = ".$id_member;
        $stmt = $pdo_conn->prepare($sql);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
    }
    // Hapus data member
    function hapus_member ($pdo_conn,$id_member)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("DELETE FROM member where id_buku=" . $id_member);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
    }
#Fungsi buat data buku
    // Mengambil data semua buku
    function get_all_buku ($pdo_conn,&$result)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("SELECT * FROM buku ORDER BY id_buku DESC");
        // jalankan query (execute)
        $stmt->execute();
        // Mengambil hasil
        $result = $stmt->fetchAll();
        // return hasil
        return $result;
    }
    // Menambahkan buku ke database
    function tambah_buku ($pdo_conn,$judul_buku,$penulis,$penerbit,$tahun_terbit)
    {
        // siapkan query
        $sql = 'INSERT INTO buku VALUES (null, ?, ?, ?, ?)';
        $stmt = $pdo_conn->prepare($sql);
        // hubungkan data dengan variabel (bind)
        $stmt->bindParam(1, $judul_buku);
        $stmt->bindParam(2, $penulis);
        $stmt->bindParam(3, $penerbit);
        $stmt->bindParam(4, $tahun_terbit);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
        header("Location: Buku.php");
    }
    // Mengambil 1 data buku berdasarkan id 
    function get_buku_byid ($pdo_conn,$id_buku,&$result)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("SELECT * FROM buku WHERE id_buku = ".$id_buku);
        // jalankan query (execute)
        $stmt->execute();
        // Mengambil hasil
        $result = $stmt->fetchAll();
        // return hasil
        return $result;
    }
    // Update data buku
    function update_buku ($pdo_conn,$id_buku,$judul_buku,$penulis,$penerbit,$tahun_terbit)
    {
        // siapkan query
        $sql = "UPDATE buku SET judul_buku = '".$judul_buku."', penulis = '".$penulis."', penerbit = '".$penerbit."', tahun_terbit = '".$tahun_terbit."' WHERE id_buku = ".$id_buku;
        $stmt = $pdo_conn->prepare($sql);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
    }
    // Hapus data buku
    function hapus_buku ($pdo_conn,$id_buku)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("DELETE FROM buku where id_buku=" . $id_buku);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
    }
#Fungsi buat data peminjaman
    // Mengambil data semua peminjaman
    function get_all_peminjaman ($pdo_conn,&$result)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("SELECT * FROM peminjaman ORDER BY id_peminjaman DESC");
        // jalankan query (execute)
        $stmt->execute();
        // Mengambil hasil
        $result = $stmt->fetchAll();
        // return hasil
        return $result;
    }
    // Menambahkan peminjaman ke database
    function tambah_peminjaman ($pdo_conn,$tgl_pinjam,$tgl_kembali)
    {
        // siapkan query
        $sql = 'INSERT INTO peminjaman VALUES (null, ?, ?)';
        $stmt = $pdo_conn->prepare($sql);
        // hubungkan data dengan variabel (bind)
        $stmt->bindParam(1, $tgl_pinjam);
        $stmt->bindParam(2, $tgl_kembali);
        // $stmt->bindParam(3, $id_member);
        // $stmt->bindParam(4, $id_buku);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
        header("Location: Peminjaman.php");
    }
    // Mengambil 1 data peminjaman berdasarkan id 
    function get_peminjaman_byid ($pdo_conn,$id_peminjaman,&$result)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("SELECT * FROM peminjaman WHERE id_member = ".$id_peminjaman);
        // jalankan query (execute)
        $stmt->execute();
        // Mengambil hasil
        $result = $stmt->fetchAll();
        // return hasil
        return $result;
    }
    // Update peminjaman buku
    function update_peminjaman ($pdo_conn,$id_peminjaman,$tgl_pinjam,$tgl_kembali,$id_member,$id_buku)
    {
        // siapkan query
        $sql = "UPDATE peminjaman SET tgl_pinjam = '".$tgl_pinjam."', tgl_kembali = '".$tgl_kembali."', id_member = '".$id_member."', id_buku = '".$id_buku."' WHERE id_peminjaman = ".$id_peminjaman;
        $stmt = $pdo_conn->prepare($sql);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
    }
    // Hapus data peminjaman
    function hapus_peminjaman ($pdo_conn,$id_peminjaman)
    {
        // siapkan query
        $stmt = $pdo_conn->prepare("DELETE FROM peminjaman where id_peminjaman=" . $id_peminjaman);
        // jalankan query (execute)
        $stmt->execute();
        // hapus koneksi
        $pdo_conn = null;
    }
#Fungsi lain-lain
    // Fungsi yang mungkin perlu :
    // get_online_memberid, dateformatter,
?>