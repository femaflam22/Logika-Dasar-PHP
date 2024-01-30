<?php
// Buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K" untuk ribuan dan "M" untuk jutaan. Misal 9500 menjadi 9,5K atau 1.700.000 menjadi 1,7M
function formatNumber($number) {
    if ($number % 1000000 != $number) {
        $number /= 1000000;
        $number = $number . "M";
    }elseif ($number % 1000 != $number) {
        $number /= 1000;
        $number = $number . "K";
    }
    
    echo $number;
}
formatNumber(9500);
echo "<br>";
formatNumber(1700000);
