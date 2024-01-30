<?php
//buatlah sebuah fungsi yang menerima sebuah data string. Dari data string tersebut hitunglah jumlah karakter alphabet nya
// contoh : kelelawar, hasil nya :
// jumlah karakter : 9
// k : 1, e : 2, l : 2, a : 2, w : 1, r : 1

function countString($string) {
    $char = str_split($string);
    $arr = array_count_values($char);
    
    echo "Jumlah karakter : " . count($char) . "<br>";
    foreach ($arr as $key => $value) {
        echo "$key : $value, ";
    }
}

countString("kelelawar");