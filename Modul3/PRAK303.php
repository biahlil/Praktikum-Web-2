<html>
    <head>
        <style>
            img {
                height: 12px;
                width: 12px;
            }
        </style>
        <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $batasA = $_POST["batasA"];
                $batasB = $_POST["batasB"];
            }
        ?>
    </head>
    <body>
        <form method="POST">
            Batas Bawah : <input type="number" name="batasB" value="<?php if (isset($batasB)) { echo"$batasB"; } ?>"><br>
            Batas Atas : <input type="number" name="batasA" value="<?php if (isset($batasA)) { echo"$batasA"; } ?>"><br>
            <input type="submit" value="Cetak" name="submit"> 
        </form>
        <div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    do {
                        $tmp = ($batasB + 7) % 5; 
                        if ($tmp == 0) {
                            echo " <img src='star.ico'> ";
                        }
                        else {
                            echo " $batasB ";
                        }
                        $batasB++;
                    } while ($batasB <= $batasA);
                }
            ?>
        </div>
    </body>
</html>