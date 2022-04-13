<html>
    <head>
        <style>
            
        </style>
        <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $kalimat = $_POST["kalimat"];
            }
        ?>
    </head>
    <body>
        <form method="POST">
           <input type="text" name="kalimat" value="<?php if (isset($kalimat)) { echo"$kalimat"; } ?>">
            <input type="submit" value="Cetak" name="submit"> 
        </form>
        <div>
            <?php
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    //Cetak
                    echo "        <h4>Input:</h4>
                    <p>$kalimat</p>
                    <h4>Output:</h4>";
                    $counter1 = 0;
                    $counter2 = 0;
                    $kalimat = strtolower($kalimat);
                    $array = str_split($kalimat,1);
                    $panjang = count($array);
                    while ($counter1 < $panjang) {
                        while ($counter2 < $panjang) {
                            $counter3 = 0;
                            while ($counter3 < $panjang) {
                                if ($counter3 == 0) {
                                    echo strtoupper($array["$counter2"]);
                                    $counter3++;
                                }
                                else {
                                    echo ($array["$counter2"]);
                                    $counter3++;
                                }
                            }
                            $counter2++;
                        }
                        $counter1++;
                    }
                }
            ?>
        </div>
        
    </body>
</html>

