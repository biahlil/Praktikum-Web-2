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
                if($nama[0] < $nama[1] && $nama[1] < $nama[2]){
					echo "$nama[0] <br> $nama[1] <br> $nama[2]";
				}
				else if($nama[0] < $nama[1] && $nama[1] > $nama[2] && $nama[0] < $nama[2]){
					echo "$$nama[0] <br> $nama[2] <br> $nama[1]";
				}
				else if($nama[0] > $nama[1] && $nama[1] < $nama[2] && $nama[0] < $nama[2]){
					echo "$nama[1] <br> $nama[0] <br> $nama[2]";
				}
				else if($nama[0] > $nama[1] && $nama[1] < $nama[2] && $nama[0] > $nama[2]){
					echo "$nama[1] <br> $nama[2] <br> $nama[0]";
				}
				else if($nama[0] < $nama[1] && $nama[1] > $nama[2] && $nama[0] > $nama[2]){
					echo "$nama[2] <br> $nama[0] <br> $nama[1]";
				}
				else {
					echo "$nama[2] <br> $nama[1] <br> $nama[0]";
				}
                // $jmlNama = count($nama);
                // for ($counter = 0;$counter < $jmlNama; $counter++) { 
                //     echo $nama[$counter];
                //     echo "<br>";
                // }
            }
            ?>
        </div>
    </body>
</html>
