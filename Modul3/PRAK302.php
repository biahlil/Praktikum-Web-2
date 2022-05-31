<html>
    <head>
        <style>
            tr {
                width: fit-content;
            }
            td {
                text-align: right;
            }
            img {
                height: 50px;
                width: 50px;
            }
        </style>
        <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $tinggi = $_POST["tinggi"];
                $alamat = $_POST["link"];
            }
        ?>
    </head>
    <body>
        <form method="POST">
            Tinggi : <input type="number" name="tinggi" value="<?php if (isset($tinggi)) { echo"$tinggi"; } ?>"><br>
            Alamat Gambar : <input type="text" name="link" value="<?php if (isset($alamat)) { echo"$alamat"; } ?>"><br>
            <input type="submit" value="Cetak" name="submit"> 
        </form>
        <div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $counter1 = 0;
                    echo "<table>";
                    while ($counter1 < $tinggi) {
                        echo "<tr><td>";
                        $counter2 = 0;
                        while ($counter2 < $tinggi) {
                            echo "<img src='$alamat'>";
                            $counter2++;
                        }
                        echo "</td></tr>";
                        $tinggi--;
                    }
                    echo "</table>";
                    print_r($_POST);
                    // echo $_POST['link'][8];
                }
                
            ?>
        </div>
    </body>
</html>