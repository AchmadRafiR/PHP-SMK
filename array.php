<?php 

    // array dimensi

    // $nama = ["joni","tejo","budi","siti",100,2.5];
    // var_dump($nama);
    // echo "<br>";
    // echo $nama[5];
    // echo "<br>";

    // for ($i=0; $i < 6; $i++) { 
    //     // echo $i;
    //     echo $nama[$i]. "<br>";
    // }

    // foreach ($nama as $key ) {
    //     echo $key. "<br>";
    // }

    // array asosiatif

    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "malang raya",
    //     "tejo" => "jakarta",
    //     "siti" => "sidoarjo city"
    // );

    $nama["joni"]= "Surabaya";
    $nama["budi"]= "Malang Raya";
    $nama["tejo"]= "Jakarta";
    $nama["siti"]= "Sidoarjo City";
    $nama["edi"]= "semarang";

    var_dump($nama);
    echo "<br>";
    // echo $nama["siti"];

    foreach ($nama as $k => $v) {
        echo $k." => ".$v;
        echo "<br>";
    }


?>