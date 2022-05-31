<form method="GET" action="">
    <input type="hidden" name="page" value="<?php if (isset($page)) { echo"$page"; } ?>">
</form>
<?php
$page = $_GET["page"];
    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if ($page == "formmember") {
            header("Location: FormMember.php");
        }
        elseif ($page == "member") {
            include ("Member.php");
        }
        elseif ($page == "formbuku") {
            header("Location: FormBuku.php");
        }
        elseif ($page == "buku") {
            include ("Buku.php");
        }
        elseif ($page == "formpeminjaman") {
            header("Location: FormPeminjaman.php");
        }
        elseif ($page == "peminjaman") {
            include ("Peminjaman.php");
        }
    }
?>
