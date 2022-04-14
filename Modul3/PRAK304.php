<html>
    <head>
        <style>
            img {
                height: 50px;
                width: 50px;
            }
        </style>
        <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $star = $_POST["bintang"];
            }
        ?>
    </head>
    <body>
        <div>
            <?php
                // Jika bintang nya minus kembali ke form
                if ($star < 1) {
                    $_SERVER['REQUEST_METHOD'] = null;
                }
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    if (isset($_POST['tambah'])) {
                        $star++;
                    }
                    elseif (isset($_POST['kurang'])) {
                        $star--;
                    }
                    $counter = 0;
                    
                    echo "<form method='POST'><input type='hidden' name='bintang' value='$star'>";                    
                    echo "Jumlah bintang $star";
                    echo "<br><table><tr><td>";
                    while ($counter < $star) {
                        echo"<img src='star.ico'>";
                        $counter++;
                    }
                    echo "</td></tr></table>";
                    echo "<input type='submit' name='tambah' value='Tambah'><input type='submit' name='kurang' value='Kurang'></form>";
                }
                else {
                    echo "<form method='POST'>
                    Jumlah Bintang : <input type='number' name='bintang'><br>
                    <input type='submit' value='Cetak' name='submit'></form>";
                }
            ?>
        </div>
    </body>
</html>

