<?php
    $var1 = 1;
    function FunctionName(&$c)
    {
        // pastbyreference
        // (&)
        //ngambil alamat memori dari variable yang dimasukan dalam parameter
    }

    //Array Multidimensi
    $test = [
        [1,2,3,4],
        [5,6,7,8]
    ];
    array_push($test, 16); //menambah array dengan cara paling belakang
    array_splice($test, 2, 2); //menghapus array dari index mana sepanjang brapa

    $testHari = [
        ["senin" => 1, "selasa" => 2, "rabu" => 3, "kamis" => 4],
        ["jumat" => 5, "sabtu" => 6, "minggu" => 7, "LIBUR" => 8]
    ];
    
    echo $testHari[0][2];
    
    foreach ($testHari as $key => $value) {
        echo $key;
    }

    $yolo = "Kamu mau apa?";

    $yili = explode(" ", $yolo);

    print_r($yili);


    // SOal 1 (Jika kurang table nya isi kosong) (Jika lebih Massage error)
    // Soal 2 foreach dengan assosiativ array (assosiativnya jadi kan isi kolom)
    // Soal 3 kurleb sama soal 2
?>