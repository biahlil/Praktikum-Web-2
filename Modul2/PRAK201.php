<html>
    <head>
        <title>
            Pengurut Nama
        </title>
        <?php

        ?>
    </head>
    <body>
        <div>
            <form method="POST">
                Nama : 1 <input name="Nama1" type="text"><br>
                Nama : 2 <input name="Nama2" type="text"><br>
                Nama : 3 <input name="Nama3" type="text"><br>
                <input type="submit" name="submit">
            </form>
            <?php
            $nama = [];
            $counter;
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                error_reporting(0);
                for ($counter = 1; $counter <= 100; $counter++) { 
                    $tmp = $_POST["Nama".$counter];
                    if (isset($tmp)) {
                        array_push($nama,$_POST["Nama".$counter]);
                    }
                    else {
                        $counter = 100;    
                    }
                }
                sort($nama, SORT_STRING);
                $jmlNama = count($nama);
                for ($counter = 0;$counter < $jmlNama; $counter++) { 
                    echo $nama[$counter];
                    echo "<br>";
                }
            }
            ?>
        </div>
    </body>
</html>
