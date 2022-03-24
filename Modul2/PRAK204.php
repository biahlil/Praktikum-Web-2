<html>
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <div>
            <form method="POST"><br>
                Nilai : <input type="text" name="bilangan"><br>
                <input type="submit" name="submit" value="Konversi">
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $bilangan = $_POST["bilangan"];
                    $strBil = strlen($bilangan);
                    if (0 <= $bilangan && $bilangan < 1000) {
                        if ($bilangan == 0) {
                            echo "<h1>Hasil: Nol</h1>";
                        }
                        elseif ($strBil == 1) {
                            echo "<h1>Hasil: Satuan</h1>";
                        }
                        elseif ($strBil == 2) {
                            echo "<h1>Hasil: Belasan</h1>";
                        }
                        elseif ($strBil == 3) {
                            echo "<h1>Hasil: Ratusan</h1>";
                        }   
                    }
                    else  {
                        echo "<h1>Anda Menginput Melebihi Limit Bilangan</h1>";
                    }
                }
            ?>
            </form>
        </div>
    </body>
</html>