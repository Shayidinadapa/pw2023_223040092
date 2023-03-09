<?php
    function hitungLuasLingkaran($jari_jari) {
        $luas = 3.14 * pow($jari_jari, 2);
        return $luas;
    }

    function hitungKelilingLingkaran($jari_jari) {
        $keliling = 2 * 3.14 * $jari_jari;
        return $keliling;
    }

    $jari_jari1 = 10;
    $luas = hitungLuasLingkaran($jari_jari1);
    echo "<h4>Menghitung luas lingkaran</h4>";
    echo "jari-jari = " . $jari_jari1 . " cm.<br>";
    echo "luas lingkaran = " . $luas . " cm²";
    echo "<hr>";
    $jari_jari2 = 20;
    $keliling = hitungKelilingLingkaran($jari_jari2);
    echo "<h4>Menghitung keliling lingkaran</h4>"; 
    echo "jari-jari = " . $jari_jari2 . " cm.<br>";
    echo "keliling lingkaran = " . $keliling . " cm.";
 ?>