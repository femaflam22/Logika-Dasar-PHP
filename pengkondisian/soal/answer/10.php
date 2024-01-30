<?php

// Dani ingin membangun rumah disuatu komplek perumahan dengan panjang tanah 13 meter dan lebar tanah 9 meter. Tetapi sebelum membangun rumah, Dani harus memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat kepada kontraktor bangunan. Dengan luas tanah yang dia punya, masuk ke kategori manakah rumah Dani nantinya.

// Tipe 36 : <90
// Tipe 45 : 90 - 96
// Tipe 54 : 96 - 120
// Tipe 60 : 120 - 150
// Tipe 70 : >150

$luas = 13 * 9;

if ($luas <= 90) {
    echo 'Luas rumah Dani adalah ' . $luas . ' meter persegir yang memiliki Tipe 36';
} elseif ($luas > 90 && $luas <= 96) {
    echo 'Luas rumah Dani adalah ' . $luas . ' meter persegir yang memiliki Tipe 45';
} elseif ($luas > 96 && $luas <= 120) {
    echo 'Luas rumah Dani adalah ' . $luas . ' meter persegir yang memiliki Tipe 54';
} elseif ($luas > 120 && $luas <= 150) {
    echo 'Luas rumah Dani adalah ' . $luas . ' meter persegir yang memiliki Tipe 60';
} else {
    echo 'Luas rumah Dani adalah ' . $luas . ' meter persegir yang memiliki Tipe 70';
}