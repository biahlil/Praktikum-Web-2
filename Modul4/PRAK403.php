<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            td {
                height: 30px;
                width: 150px;

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
            function get_multi_dim_array_value ($array, &$tmp2) {
                foreach ($array as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        if (gettype($value2) == "array") {
                            $tmp2[$key2] = $value2;
                        }
                    }
                }
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
            get_multi_dim_array_value($array,$tmp2);
            print_r($tmp2);
            #Penampilan
            echo "<table>";
            echo "<tr class='header'>
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>Keterangan</td>
            </tr>";
            $counter1 = 0;
            $counterArr = 0;
            $countSmall = count($array[0]['Mata Kuliah diambil']);
            print_r($countSmall);
            while ($counter1 < $count) {
                $counter2 = 0;
                $counter3 = 1;
                echo "<tr>";
                while ($counter2 < $countSmall) {
                    while ($counter3 <= 6) {            
                        if ($counter3 == 1) {
                        echo "<td>".$array[$counter2]['No']."</td>";
                        }
                        elseif ($counter3 == 2) {
                            echo "<td>".$array[$counter2]['Nama']."</td>";
                        }
                        elseif ($counter3 == 3) {
                            echo "<td>".$array[$counter2]['No']."</td>";
                        }
                        elseif ($counter3 == 4) {
                            echo "<td>".$array[$counter2]['No']."</td>";
                        }
                        elseif ($counter3 == 5) {
                            echo "<td>".$array[$counter2]['Total SKS']."</td>";
                        }
                        elseif ($counter3 == 6) {
                            echo "<td>".$array[$counter2]['Keterangan']."</td>";
                        }
                        $counter3++;
                        $counterArr++;
                        //
                    }
                    $counter2++;
                }
                echo "</tr>";
                $counter1++;
            }
            echo "</table>";
            
            

        ?>
    </body>
</html>