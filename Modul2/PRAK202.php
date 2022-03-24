<html>
    <head>
        <title>
            
        </title>
        <style>
            span {
                color: red;
            }
        </style>
    </head>
    <?php
        $errNama = "Nama tidak boleh kosong";
        $errNim = "Nim tidak boleh kosong";
        $errJkl = "Jenis Kelamin tidak boleh kosong";
    ?>
    <body>
        <div>
            <form method="POST">
                <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    error_reporting(0);
                    $Nama = $_POST["Nama"];
                    if (empty($Nama)) {
                        echo 'Nama : <input name="Nama" type="text"><span>*'.$errNama.'</span><br>';
                    }
                    else {
                        echo 'Nama : <input name="Nama" type="text"><span>*</span><br>';
                    }
                    $Nim = $_POST["Nim"];
                    if (empty($Nim)) {
                        echo 'Nim  : <input name="Nim" type="text"><span>*'.$errNim.'</span><br>';
                    }
                    else {
                        echo 'Nim  : <input name="Nim" type="text"><span>*</span><br>';
                    }
                    $Jkl = $_POST["Jkl"];
                    if (empty($Jkl)) {
                        echo 'Jenis Kelamin : <span>*'.$errJkl.'</span><br>';
                    }
                    else {
                        echo 'Jenis Kelamin : <span>*</span><br>';
                    }
                    echo '<input name="Jkl" type="radio" value="Laki-Laki">Laki-Laki<br>';
                    echo '<input name="Jkl" type="radio" value="Perempuan">Perempuan<br>';
                    echo '<input type="submit" name="submit">';

                    if (empty($Nama) == false && empty($Nim) == false && empty($Jkl) == false) {
                        echo "<br><br><h1>Output</h1><br>";
                        echo $Nama."<br>";
                        echo $Nim."<br>";
                        echo $Jkl."<br>";
                    }
            }
                else {
                echo 'Nama : <input name="Nama" type="text"><span>*</span><br>';
                echo 'Nim  : <input name="Nim" type="text"><span>*</span><br>';
                echo 'Jenis Kelamin : <span>*</span><br>';

                echo '<input name="Jkl" type="radio" value="Laki-Laki">Laki-Laki<br>';
                echo '<input name="Jkl" type="radio" value="Perempuan">Perempuan<br>';
                echo '<input type="submit" name="submit">';
                }
                ?>
            </form>
        </div>
    </body>
</html>
