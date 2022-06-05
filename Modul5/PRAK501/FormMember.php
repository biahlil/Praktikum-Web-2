<?php
session_start();
// if (!isset($_SESSION['nomor_member'])) {
//     header("Location: ErrorPage.php");
// }
include ("header.php");
?>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="background:;" action="MemberProcess.php" method="POST">
                <h1 style="color: var(--bs-white);">Form Member</h1>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field" style="color: var(--bs-white);">Username </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="text" name="inputUsername" placeholder="Username" value="Username"></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field" style="color: var(--bs-white);">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="password" name="inputPassword" placeholder="Password" value="Password"></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Nomor Member</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="text" name="inputNomor" placeholder="01" value="01"></div>
                </div>
                <div class="row form-group" style="max-width: 100%;">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="color: var(--bs-white);">Alamat</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control input-text" type="text" name="inputAlamat" placeholder="Alamat" value="Jl. Manggis"></div>
                </div><input class="form-control submit-button btn btn-light" type="submit" value="submit">
            </form>
        </div>
    </div>
<?php 
    include ("footer.php"); 
?>
