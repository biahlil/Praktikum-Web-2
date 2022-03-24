<html>
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <div>
            <form method="POST">
                Nilai : <input type="text" name="nilai"><br>
                Dari :<br>
                <input type="radio" name="satuan1" value="5">Celcius<br>
                <input type="radio" name="satuan1" value="9">Fahrenheit<br>
                <input type="radio" name="satuan1" value="4">Rheamur<br>
                <input type="radio" name="satuan1" value="Kelvin">Kelvin<br>
                Ke :<br>
                <input type="radio" name="satuan2" value="5">Celcius<br>
                <input type="radio" name="satuan2" value="9">Fahrenheit<br>
                <input type="radio" name="satuan2" value="4">Rheamur<br>
                <input type="radio" name="satuan2" value="Kelvin">Kelvin<br>
                <input type="submit" name="submit">
                <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    error_reporting(0);
                    $nilai = $_POST["nilai"];
                    $dari = $_POST["satuan1"];
                    $ke = $_POST["satuan2"];
                    if ($ke == "Kelvin" && $dari == "Kelvin") {
                        
                        $suhu = $nilai;
                        echo "<h1>Hasil Konversi : ".$suhu."°K</h1>";
                    }
                    elseif ($dari == "Kelvin" && $ke == "4") {
                        $suhu = $ke / 5 * $nilai - 273;
                        echo "<h1>Hasil Konversi : ".$suhu."°R</h1>";
                    }
                    elseif ($dari == "Kelvin" && $ke == "5") {
                        $suhu = $ke / 5 * $nilai - 273;
                        echo "<h1>Hasil Konversi : ".$suhu."°C</h1>";
                    }
                    elseif ($dari == "Kelvin" && $ke == "9") {
                        $suhu = $ke / 5 * ($nilai - 273) + 32;
                        echo "<h1>Hasil Konversi : ".$suhu."°F</h1>";
                    }
                    elseif ($ke == "Kelvin") {
                        $suhu = 5 / $dari * $nilai + 273;
                        echo "<h1>Hasil Konversi : ".$suhu."°K</h1>";
                    }
                    if ($ke == 9 && $dari == 9) {
                        $suhu = $nilai;
                        echo "<h1>Hasil Konversi : ".$suhu."°F</h1>";
                    }
                    elseif ($dari == 9 && $ke == "Kelvin") {
                        $suhu = $ke / $dari * ($nilai - 32) + 273;
                        echo "<h1>Hasil Konversi : ".$suhu."°K</h1>";
                    }
                    elseif ($ke == 9) {
                        $suhu = $ke / $dari * $nilai + 32;
                        echo "<h1>Hasil Konversi : ".$suhu."°F</h1>";
                    }
                    elseif($ke == 4) {
                        $suhu = $ke / $dari * $nilai;
                        echo "<h1>Hasil Konversi : ".$suhu."°R</h1>";
                    }
                    elseif($ke == 5) {
                        $suhu = $ke / $dari * $nilai;
                        echo "<h1>Hasil Konversi : ".$suhu."°C</h1>";
                    }                }
                ?>
            </form>
        </div>
    </body>
</html>