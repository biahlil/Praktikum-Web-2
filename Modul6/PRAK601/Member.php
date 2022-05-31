<?php
require_once("Koneksi.php");
require_once("Model.php");
require ("header.php");
?>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<body>
<?php
get_all_member($pdo_conn,$result);
?>
<table id="example" class="display table" style="width:100%">
<thead>
<tr>
<th>Nama</th>
<th>Nomor</th>
<th>Almat</th>
<th>Tanggal Daftar</th>
<th>Terakhir Login</th>
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
    <?php  echo $row["nama_member"]; ?>
</td>
<td>
    <?php  echo $row["nomor_member"]; ?>
</td>
<td>
    <?php  echo $row["alamat"]; ?>
</td>
<td>
    <?php  echo $row["tgl_mendaftar"]; ?>
</td>
<td>
    <?php  echo $row["tgl_terakhir_bayar"]; ?>
</td>
<td>
<a href='FormMember.php?edit=<?php echo $row['id_member']; ?>'>edit</a>
<a href='Member.php?hapus=<?php echo $row['id_member']; ?>'>hapus</a>
</td>
</tr>
<?php
    }
}
?>
</tbody>
</table>
<?php
require ("footer.php");
?>