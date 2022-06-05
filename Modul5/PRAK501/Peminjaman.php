<?php
require_once("Koneksi.php");
require_once("Model.php");
require ("header.php");
?>

<body>
<?php
get_all_peminjaman($pdo_conn,$result);
?>
</div>
<table id="example" class="display" style="width:100%">
<thead>
<tr>
<th>Tanggal Peminjaman</th>
<th>Tanggal Kembali</th>
<!-- <th>Member</th> -->
<!-- <th>Buku</th> -->
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
if (!empty($result)) {
    foreach ($result as $row) {
?>
<tr>
<td>
    <?php  echo $row["tgl_pinjam"]; ?>
</td>
<td>
    <?php  echo $row["tgl_kembali"]; ?>
</td>
<!-- <td> -->
    <?php  
    // echo $row["penerbit"]; 
    ?>
<!-- </td> -->
<!-- <td> -->
    <?php  
    // echo $row["tahun_terbit"]; 
    ?>
<!-- </td> -->
<td>
<a href='FormPeminjaman.php?update=<?php  echo $row['id_peminjaman']; ?>'>edit</a>
<a href='Peminjaman.php?hapus=<?php echo $row['id_peminjaman']; ?>'>hapus</a>
</td>
</tr>
<?php
    }
}
?>
</tbody>
</table>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<?php
require ("footer.php");
?>
