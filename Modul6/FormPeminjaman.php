<?php
session_start();
// if (!isset($_SESSION['nomor_member'])) {
    // header("Location: ErrorPage.php");
// }
include ("header.php");
?>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="background:;" action="PeminjamanProcess.php" method="POST" >
                <h1 style="color: var(--bs-white);">Form Peminjaman</h1>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Tanggal Pinjam</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="date" name="inputPinjam" value='
                    '></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Tanggal Kembali</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="date" name="inputKembali" value='
                    13-03-2002'></div>
                </div><input class="form-control submit-button btn btn-light" type="submit" value="submit">
            </form>
        </div>
    </div>
<?php 
    include ("footer.php"); 
?>

