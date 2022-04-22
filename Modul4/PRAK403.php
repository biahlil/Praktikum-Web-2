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
                "SKS" => [2,1,2,3]
                ],
                ["No" => 2,"Nama" => "Ratna", "Mata Kuliah diambil" => 
                ["Basis Data I","Praktikum Basis Data I","Kalkulus"],
                "SKS" => [2,1,3]
                ],
                ["No" => 3,"Nama" => "Tono", "Mata Kuliah diambil" => 
                ["Rekayasa Perangkat Lunak","Analisis dan Perancangan Sistem","Komputasi Awan","Kecerdasan Bisnis"],
                "SKS" => [3,3,3,3]
                ]
            ];
            #deklarasi var penampung
            $tmp = [];
            $tmp2 = [];
            $count = 0;
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
            function count_array($array,&$count,$counter) {
                $count = $count + count($array[$counter]['Mata Kuliah diambil']);
            }
            #proses pendukung
            $counter3 = 0;
            while ($counter3 < 3) {
                keterangan($array,$counter3,$tmp);
                foreach ($tmp as $key => $value) {
                    $array[$counter3][$key] = $value;
                }
                $counter3++;
            }            
            $counter3 = 0;            
            while ($counter3 < 3) {
                count_array($array,$count,$counter3);
                $counter3++;
            }
            #Penampilan
            echo "<table>";
            echo "<tr class='header'>";
            echo "<td>No</td>";
            echo "<td>Nama</td>";
            echo "<td>Mata Kuliah diambil</td>";
            echo "<td>SKS</td>";
            echo "<td>Total SKS</td>";
            echo "<td>Keterangan</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$array[0]['No']."</td>";
            echo "<td>".$array[0]['Nama']."</td>";
            echo "<td>".$array[0]['Mata Kuliah diambil'][0]."</td>";
            echo "<td>".$array[0]['SKS'][0]."</td>";
            echo "<td>".$array[0]['Total SKS']."</td>";
            echo "<td class = '";
            if ($array[0]['Keterangan'] == "Tidak Revisi") {
                echo "TRevisi";
            }
            elseif ($array[0]['Keterangan'] == "Revisi KRS") {
                echo "Revisi";
            }
            echo "'>".$array[0]['Keterangan']."</td>";            
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[0]['Mata Kuliah diambil'][1]."</td>";
            echo "<td>".$array[0]['SKS'][1]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[0]['Mata Kuliah diambil'][2]."</td>";
            echo "<td>".$array[0]['SKS'][2]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[0]['Mata Kuliah diambil'][3]."</td>";
            echo "<td>".$array[0]['SKS'][3]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$array[1]['No']."</td>";
            echo "<td>".$array[1]['Nama']."</td>";
            echo "<td>".$array[1]['Mata Kuliah diambil'][0]."</td>";
            echo "<td>".$array[1]['SKS'][0]."</td>";
            echo "<td>".$array[1]['Total SKS']."</td>";
            echo "<td class = '";
            if ($array[1]['Keterangan'] == "Tidak Revisi") {
                echo "TRevisi";
            }
            elseif ($array[1]['Keterangan'] == "Revisi KRS") {
                echo "Revisi";
            }
            echo "'>".$array[1]['Keterangan']."</td>";            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[1]['Mata Kuliah diambil'][1]."</td>";
            echo "<td>".$array[1]['SKS'][1]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[1]['Mata Kuliah diambil'][2]."</td>";
            echo "<td>".$array[1]['SKS'][2]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$array[2]['No']."</td>";
            echo "<td>".$array[2]['Nama']."</td>";
            echo "<td>".$array[2]['Mata Kuliah diambil'][0]."</td>";
            echo "<td>".$array[2]['SKS'][0]."</td>";
            echo "<td>".$array[2]['Total SKS']."</td>";
            echo "<td class = '";
            if ($array[2]['Keterangan'] == "Tidak Revisi") {
                echo "TRevisi";
            }
            elseif ($array[2]['Keterangan'] == "Revisi KRS") {
                echo "Revisi";
            }
            echo "'>".$array[2]['Keterangan']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[2]['Mata Kuliah diambil'][1]."</td>";
            echo "<td>".$array[2]['SKS'][1]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[2]['Mata Kuliah diambil'][2]."</td>";
            echo "<td>".$array[2]['SKS'][2]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$array[2]['Mata Kuliah diambil'][3]."</td>";
            echo "<td>".$array[2]['SKS'][3]."</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>