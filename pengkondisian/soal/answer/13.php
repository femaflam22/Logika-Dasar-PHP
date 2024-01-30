<?php
// Rumah Makan Beni mengadakan program diskon sebesar 5% tiap pembelian hari selasa. Dan setiap pembelian diatas 100.000 mendapat diskon sebesar 7%.

// Hitunglah uang yang harus dibayar jika total pembelian 130.000 di hari ini

$pembelian = 130000;

$day = date('l');
$totalBayar = 0;

if ($pembelian > 100.000) {
    if ($day == "Tuesday") {
        $totalBayar = ($pembelian - ($pembelian * 7 / 100));
        $totalBayar -= ($pembelian * 5 / 100);
    } else {
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
    }
} else {
    $totalBayar = $pembelian;
}

echo $totalBayar;