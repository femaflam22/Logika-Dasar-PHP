<?php
// Buatlah sebuah fungsi yang akan menghitung lembar uang rupiah.
// Contoh : 140500
// Lembar rupiah :
// - Rp. 100.000 : 1
// - Rp. 20.000 : 2
// - Rp. 500 : 1

function rupiah($number) {
    $arr = [];

    if ($number % 100000 != $number) {
        $count = floor($number / 100000);
        $number -= ($count * 100000);
        $arr["Rp. 100.000"] = $count;
    }
    
    if ($number % 50000 != $number) {
        $count = floor($number / 50000);
        $number -= ($count * 50000);
        $arr["Rp. 50.000"] = $count;
    }
    
    if ($number % 20000 != $number) {
        $count = floor($number / 20000);
        $number -= ($count * 20000);
        $arr["Rp. 20.000"] = $count;
    }
    
    if ($number % 10000 != $number) {
        $count = floor($number / 10000);
        $number -= ($count * 10000);
        $arr["Rp. 10.000"] = $count;
    }
    
    if ($number % 5000 != $number) {
        $count = floor($number / 5000);
        $number -= ($count * 5000);
        $arr["Rp. 5.000"] = $count;
    }
    
    if ($number % 2000 != $number) {
        $count = floor($number / 2000);
        $number -= ($count * 2000);
        $arr["Rp. 2.000"] = $count;
    }
    
    if ($number % 1000 != $number) {
        $count = floor($number / 1000);
        $number -= ($count * 1000);
        $arr["Rp. 1.000"] = $count;
    }
    
    if ($number % 500 != $number) {
        $count = floor($number / 500);
        $number -= ($count * 500);
        $arr["Rp. 500"] = $count;
    }
    
    echo "Lembar Rupiah : <br>";
    echo "<ul>";
    foreach ($arr as $key => $value) {
        echo "<li> $key : $value </li>";
    }
    echo "</ul>";
}
rupiah(140500);
