<?php

// Syarat untuk mendaftar terhadap suatu ikatan dinas haruslah berusia minimal berusia 16 tahun dengan maksimal berusia 25. Dengan dua syarat selanjutnya :

// Nilai minimun mata pelajaran sebagai berikut :
// Matematika 87
// Bahsa Inggris 85
// Bahasa Indonesia 87

// Dengan minimum rata-rata nilai adalah 85

// Jika nilai minimum mata pelajaran dan minimun rata-rata terpenuhi maka peserta dinyatakan Diterima. Jika hanya salah satu saja yang terpenuhi maka peserta dinyatakan Passing Grade. Peserta dinyatakan ditolak jika tidak memenuhi dua kondisi.

// Jika Andi saat ini berusaia 1/4 abad dengan nilai Matematika 83, Bahasa Indonesia 87, dan Bahasa Inggris 86. Apakah status andi di ikatan dinas tersebut?

$umur = 25;
$mtk = 83;
$indo = 87;
$inggris = 86;
$rerata = ($mtk + $indo + $inggris) / 3;

echo 'Usia Andi adalah ' . $umur;
echo '<br>';
echo 'Nilai Matematika Andi adalah ' . $mtk;
echo '<br>';
echo 'Nilai Bahasa Indonesia Andi adalah ' . $indo;
echo '<br>';
echo 'Nilai Bahasa Inggris Andi adalah ' . $inggris;
echo '<br>';
echo 'Rata-rata nilai Andi adalah ' . $rerata;
echo '<br>';

if ($umur >= 16 && $umur <= 25) {
    if ($mtk >= 87 && $inggris >= 85 && $info >= 87) {
        if ($rerata >= 85) {
            echo 'Diterima';
        } else {
            echo 'Passing Grade';
        }
    } else {
        echo 'Passing Grade';
    }
} else {
    echo 'Ditolak';
}

