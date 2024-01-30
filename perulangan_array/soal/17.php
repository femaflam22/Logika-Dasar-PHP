<?php
// gabungkan dua array tersebut, lalu untuk nilai yang sama maka akan diambil hanya salah satunya saja, setelah itu tampilkan bilangan secara terurut dari terbesar ke terkecil. Hasil akan berisi angka-angka berikut :
// 99,98,91,90,89,86,81,80,77,65,55,45,12

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$bilangan = array_merge($bil1, $bil2);
$bilanganUnique = array_unique($bilangan);
arsort($bilanganUnique);

foreach ($bilanganUnique as $key => $value) {
    echo $value . ",";
}