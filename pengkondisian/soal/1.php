<?php
// terdapat sebuah variable berikut
$angka = "22";
// =    : memberikan nilai pada variable
// ==   : perbandingan dua nilai variable
// ===  : perbandingan dua nilai variable, mengecek tipe data
if ($angka === 22) {
    echo "$angka adalah number";
    // echo '"' . $angka . '" adalah teks';
} else {
    echo "\"$angka\" adalah teks";
}
?>