<?php

// Andi ditahun ini berusia 21 tahun
// Ani ditahun ini berusia 20 tahun
// siapakan yang lahir pada tahun kabisat, tampilkan nama dan tahun lahirnya

$andi = 15;
$ani = 16;

$tahunSekarang = date("Y");

$tahunAndi = $tahunSekarang - $andi;
$tahunAni = $tahunSekarang - $ani;

if ($tahunAndi % 4 == 0) {
    echo "Andi lahir tahun " . $tahunAndi . " ditahun kabisat";
}elseif ($tahunAni % 4 == 0) {
    echo "Ani lahir tahun " . $tahunAni . " ditahun kabisat";
}
