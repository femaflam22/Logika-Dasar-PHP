<?php
// Setiap orang memiliki IMT dan ketegoti IMT nya masing-masing

// Berikut kategori IMT :
// Kurang dari 18.5 : Berat Badan Kurang
// Dari 18.5 sampai kurang dari 22.9 : Normal
// Dari 22.9 sampai kurang dari 24.9 : Berat Badan Lebih
// Lebih dari dan sama dengan 25 : Obesitas

// Jika Beni memiliki berat badan 50 kg dengan tinggi badan 165 cm, termasuk kedalam kategori apakah Beni

$bb = 55;
$tb  = 165;

$tbm = ($tb/100) * ($tb/100);
$imt = number_format($bb / $tbm, 1);

if ($imt < 18.5) {
    $kategori = 'Berat Badan Kurang';
} elseif ($imt >= 18.5 && $imt < 22.9) {
    $kategori = 'Normal';
} elseif ($imt >= 22.9 && $imt < 24.9) {
    $kategori = 'Berat Badan Lebih';
} elseif ($imt >= 25) {
    $kategori = 'Obesitas';
}

echo 'Dengan berat badan ' . $bb . ' kg dan tinggi badan ' . $tb . ' cm dengan hasil IMT ' . $imt . ' yang termasuk kedalam ketegori <b>' . $kategori . '</b>';