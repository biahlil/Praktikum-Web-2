<?php
require_once("Koneksi.php");
require_once("Model.php");
require ("header.php");
?>

<body>
<?php
get_all_buku($pdo_conn,$result);
?>
</div>
<table id="example" class="display" style="width:100%">
<thead>
<tr>
<th>Judul</th>
<th>Penulis</th>
<th>Penerbit</th>
<th>Tahun Terbit</th>
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
    <?php  echo $row["judul_buku"]; ?>
</td>
<td>
    <?php  echo $row["penulis"]; ?>
</td>
<td>
    <?php  echo $row["penerbit"]; ?>
</td>
<td>
    <?php  echo $row["tahun_terbit"]; ?>
</td>
<td>
<a href='FormBuku.php?edit=<?php  echo $row['id_buku']; ?>'>edit</a>
<a href='Buku.php?edit=<?php echo $row['id_buku']; ?>'>hapus</a>
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
