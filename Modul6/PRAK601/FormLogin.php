<?php
session_start();
if (isset($_SESSION['nomor_member'])) {
    header("Location: index.php");
}
require ("Koneksi.php");
require ("Model.php");
include ("header.php");
?>
    <div class="container" style="margin-top: 55px;max-width: 600px;min-width: auto;margin-bottom: 55px;">
        <div class="row" style="max-width: 600px;min-width: auto;">
            <form action="Login.php" method="POST">
            <div class="col-md-12 column-login">
                <div style="max-width: 600px;">
                    <div style="max-width: 600px;text-align: center;"><i class="fas fa-user icon-lg"></i></div>
                    <div style="max-width: 600px;">
                        <p class="judul-login">Member Login</p>
                    </div>
                    <div class="container-login"><i class="fas fa-envelope icon-email"></i><input type="text" class="input-text" placeholder="Nomor Member" value="Nomor Member" name="Nomor"></div>
                    <div class="container-login"><i class="fas fa-lock icon-email"></i><input type="text" class="input-text input-text:focus" placeholder="Password" value="Password" name="Password"></div>
                    <div class="container-login-submit"><input type="submit" style="padding: 10px;background: rgba(0,0,0,0);border-style: none;max-width: 500px;color: rgb(255,255,255);font-size: 20px;width: 400px;min-width: 300px;text-align: center;" value="submit"></div>
                </div>
            </div>
        </form>
        </div>
    </div>
<?php 
    var_dump($_POST['Username']);
    include ("footer.php"); 
?>
