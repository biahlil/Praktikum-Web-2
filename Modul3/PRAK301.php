<html>
    <head>
        <title>Modul3Soal1</title>
    </head>
    <?php 
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $peserta = $_POST["peserta"];
        }
    ?>
    <body>
        <form method="POST">
            Jumlah Peserta : <input type="number" name="peserta" value="<?php if (isset($peserta)) { echo"$peserta"; } ?>"><br>
            <input type="submit" value="Cetak" name="submit">
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $a = 1;                    
                    while ($a <= $peserta) {
                        $b = $a;
                        while ($b % 2 == 0 ) {
                            echo "<h1 style='color: red;'>Peserta Ke-". $b ."</h1>";
                            $b++;
                        }
                        $b = $a;
                        while ($b % 2 == 1 ) {
                            echo "<h1 style='color: green;'>Peserta Ke-". $a ."</h1>";
                            $b++;
                        }
                        $a++;
                    }
                }
            ?>
        </form>
    </body>
</html>