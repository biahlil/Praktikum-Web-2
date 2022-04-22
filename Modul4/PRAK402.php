<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            td {
                height: 30px;
                width: 80px;
                border: 1px black solid;
            }
            .header{
                font-weight: bold;
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <?php 
            $array = [
                ["Nama" => "Andi", "Nim" => "2101001", "NilaiUTS" => "87", "NilaiUAS" => "65"],
                ["Nama" => "Budi", "Nim" => "2101002", "NilaiUTS" => "76", "NilaiUAS" => "79"],
                ["Nama" => "Tono", "Nim" => "2101003", "NilaiUTS" => "50", "NilaiUAS" => "41"],
                ["Nama" => "Jessica", "Nim" => "2101004", "NilaiUTS" => "60", "NilaiUAS" => "76"]
            ];
            $nilaiakhir;
            $huruf;
            $counter1 = 0;
            function hitung($uts,$uas,&$nilaiakhir){
                $nilaiakhir = (0.4 * $uts) + (0.6 * $uas);                
            }
            function array_push_assoc(&$array, $key, $key2, $value){
                $array[$key][$key2] = $value;
                return $array;
            }
            while ($counter1 < 4) {
                hitung($array[$counter1]["NilaiUTS"],$array[$counter1]["NilaiUAS"],$nilaiakhir);
                if ($nilaiakhir >= 80) {
                    $huruf = "A";
                    array_push_assoc($array,$counter1,'Nilai Akhir',$nilaiakhir);
                    array_push_assoc($array,$counter1,'Huruf',$huruf);
                }
                elseif ($nilaiakhir >= 70 && $nilaiakhir < 80) {
                    $huruf = "B";
                    array_push_assoc($array,$counter1,'Nilai Akhir',$nilaiakhir);
                    array_push_assoc($array,$counter1,'Huruf',$huruf);
                }
                elseif ($nilaiakhir >= 60 && $nilaiakhir < 70) {
                    $huruf = "C";
                    array_push_assoc($array,$counter1,'Nilai Akhir',$nilaiakhir);
                    array_push_assoc($array,$counter1,'Huruf',$huruf);
                }
                elseif ($nilaiakhir >= 50 && $nilaiakhir < 60) {
                    $huruf = "D";
                    array_push_assoc($array,$counter1,'Nilai Akhir',$nilaiakhir);
                    array_push_assoc($array,$counter1,'Huruf',$huruf);
                }
                elseif ($nilaiakhir < 50) {
                    $huruf = "E";
                    array_push_assoc($array,$counter1,'Nilai Akhir',$nilaiakhir);
                    array_push_assoc($array,$counter1,'Huruf',$huruf);
                }
                $counter1++;
            }
            echo "<table>";
            echo "<tr class='header'>
            <td>Nama</td>
            <td>Nim</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
            </tr>";
            foreach ($array as $key => $value) {
                echo "<tr>";
                foreach ($value as $key2 => $actualvalue) {
                    echo "<td>$actualvalue</td>";
                }
                echo "</tr>";
            }
        ?>
    </body>
</html>