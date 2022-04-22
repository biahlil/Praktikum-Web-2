<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            td {
                height: 30px;
                width: 30px;
                border: 2px black solid;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            Panjang : <input type="number" name="panjang"><br>
            Lebar : <input type="number" name="lebar"><br>
            Nilai : <input type="text" name="nilai"><br>
            <input type="submit" name="submit" value="Cetak">
        </form>
        <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $nilaiRaw = $_POST["nilai"];
                $nilaiTmp = explode(" ", $nilaiRaw);
                $count = count($nilaiTmp);
                // print_r($_POST);
                $baris = $_POST["panjang"];
                $kolom = $_POST["lebar"];
                echo "<br> <table>";
                if (empty($baris) == false) {
                    if (empty($kolom) == false) {
                        if ($count <= $baris*$kolom) {
                            $counter1 = 0;
                            $counterArr = 0;
                            while ($counter1 < $baris) {
                                $counter2 = 0;
                                echo "<tr>";
                                while ($counter2 < $kolom) {
                                    if (isset($nilaiTmp[$counterArr])) {
                                        echo "<td>".$nilaiTmp[$counterArr]."</td>";
                                    }
                                    else {
                                        echo "<td></td>";
                                    }
                                    $counter2++;
                                    $counterArr++;
                                }
                                echo "</tr>";
                                $counter1++;
                            }
                        }
                        else {
                            echo "<h1>Panjang nilai tidak sesuai dengan ukuran matriks</h1>";
                        }
                    }
                    else {
                        echo "<h1>Anda Belum Memasukan Kolom</h1>";
                    }
                }
                else {
                    echo "<h1>Anda Belum Memasukan Baris</h1>";
                }
                echo "</table><br>";
            }
        ?>
    </body>
</html>