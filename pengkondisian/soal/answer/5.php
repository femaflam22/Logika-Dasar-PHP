<?php
$angka1 = 10;
$angka2 = 3;

// apabila hasil perhitungan bagi antara angka1 dan angka2 merupakan desimal, maka hasil akan dibulatkan tertampil seperti berikut :
// 10 : 3 = 3,33333 jika dibulatkan menjadi 3
// apabila hasil perhitungan bukan desimal :
// 10 : 5 = 2

$hasil = $angka1 / $angka2;
if (is_float($hasil)) {
    echo $angka1 . " : " . $angka2 . " = " . $hasil . " jika dibulatkan menjadi " . round($hasil);
} else {
    echo $angka1 . " : " . $angka2 . " = " . $hasil;
}
?>