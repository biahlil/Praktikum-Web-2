<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            td {
                height: 30px;
                min-width: 100px;
                max-width: fit-content;
                border: 1px black solid;
            }
            .Trevisi {
                background-color: green;
            }
            .Revisi {
                background-color: red;
            }
            .header{
                font-weight: bold;
                background-color: gray;
            }
        </style>
    </head>
    <body>
        
        <?php 
#array
            $array = [
                ["No" => 1,"Nama" => "Ridho", "Mata Kuliah diambil" => 
                ["Pemrograman I","Praktikum Pemrograman I","Pengantar Lingkungan Lahan Basah","Arsitektur Komputer"],
                "SKS" => [2,1,2,3]],
                ["No" => 2,"Nama" => "Ratna", "Mata Kuliah diambil" => 
                ["Basis Data I","Praktikum Basis Data I","Kalkulus"],
                "SKS" => [2,1,3]],
                ["No" => 3,"Nama" => "Tono", "Mata Kuliah diambil" => 
                ["Rekayasa Perangkat Lunak","Analisis dan Perancangan Sistem","Komputasi Awan","Kecerdasan Bisnis"],
                "SKS" => [3,3,3,3]]
            ];
#deklarasi var penampung
            $tmp = [];
#fungsi
            function keterangan($array,$counter,&$tmp){
                $counter1 = 0;
                $tmpMath = 0;
                while ($counter1 <= 10) {
                    if (isset($array[$counter]['SKS'][$counter1])) {
                        $tmpMath = $tmpMath + $array[$counter]['SKS'][$counter1];
                    }
                    else {
                        $counter1 = 11;
                    }
                    $counter1++;
                }
                $tmp['Total SKS'] = $tmpMath;
                if ($tmp['Total SKS'] < 7) {
                    $tmp['Keterangan'] = "Revisi KRS";
                }
                else {
                    $tmp['Keterangan'] = "Tidak Revisi";
                }                
            }
            function array_push_assoc(&$array, $key, $key2, $value){
                $array[$key][$key2] = $value;
                return $array;
            }
#end fungsi
#proses pendukung
            $counter3 = 0;
            while ($counter3 < 3) {
                keterangan($array,$counter3,$tmp);
                foreach ($tmp as $key => $value) {
                    $array[$counter3][$key] = $value;
                }
                $counter3++;
            }            
#end proses pendukung
#Penampilan
            echo "<table>";
            echo "<tr class='header'><td>No</td><td>Nama</td><td>Mata Kuliah diambil</td><td>SKS</td><td>Total SKS</td><td>Keterangan</td></tr>";            $counter1 = 0;
            while ($counter1 < 3) {
                $counter2 = 0;
                foreach ($array[$counter1] as $value) {
                    echo "<tr>";
                    if ($counter2 == 0) {
                        echo "<td>".$array[$counter1]['No']."</td>";
                        echo "<td>".$array[$counter1]['Nama']."</td>";
                        echo "<td>".$array[$counter1]['Mata Kuliah diambil'][$counter2]."</td>";
                        echo "<td>".$array[$counter1]['SKS'][$counter2]."</td>";
                        echo "<td>".$array[$counter1]['Total SKS']."</td>";
                        echo "<td class = '";
                        if ($array[$counter1]['Keterangan'] == "Tidak Revisi") {
                            echo "TRevisi";
                        }
                        elseif ($array[$counter1]['Keterangan'] == "Revisi KRS") {
                            echo "Revisi";
                        }
                        echo "'>".$array[$counter1]['Keterangan']."</td>";            
                    }
                    else {
                        if (isset($array[$counter1]['Mata Kuliah diambil'][$counter2])) {
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td>".$array[$counter1]['Mata Kuliah diambil'][$counter2]."</td>";
                            echo "<td>".$array[$counter1]['SKS'][$counter2]."</td>";
                            echo "<td></td>";
                            echo "<td></td>";
                        }
                    }
                    echo "</tr>";
                    $counter2++;
                }
                $counter1++;
            }
            echo "</table>";
#end Penampilan
        ?>
    </body>
</html>