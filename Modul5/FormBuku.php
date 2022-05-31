<?php
// session_start();
// if (!isset($_SESSION['nomor_member'])) {
    // header("Location: ErrorPage.php");
// }
require ("Koneksi.php");
require ("Model.php");
include ("header.php");
?>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="background:;" action="BukuProcess.php" method="POST">                
            <h1 style="color: var(--bs-white);">Form Buku</h1>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field" style="color: var(--bs-white);">Judul Buku</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="text" name="inputJudul" placeholder="Judul Buku" value="Judul Buku"></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Penulis</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="text" name="inputPenulis" placeholder="Penulis" value="Penulis"></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Penerbit</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="text" name="inputPenerbit" placeholder="Penerbit" value="Penerbit"></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Tahun Terbit</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="number" name="inputTahun" placeholder="2020" value="2020"></div>
                </div><input class="form-control submit-button btn btn-light" type="submit" value="submit">
            </form>
        </div>
    </div>
<?php 
    include ("footer.php"); 
?>
