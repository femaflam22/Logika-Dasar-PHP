<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

// Dari bilangan diatas, kelompokan nilai-nilai tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). Lalu tampilkan berdasarkan kelompok tersebut.

echo '<b>Nilai Kompeten : </b>';
echo '<br>';
foreach ($bilangan as $bil) {
    if ($bil >= 75) {
        echo $bil;
        echo '<br>';
    }
}

echo '<br>';
echo '<b>Nilai Belum Kompeten : </b>';
echo '<br>';
foreach ($bilangan as $bil) {
    if ($bil < 75) {
        echo $bil;
        echo '<br>';
    }
}