<?php

// Buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang sama antara kedua variabel. Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya terdapat disalah satu variabel saja)

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

echo '<b>Bilangan yang ada di kedua variabel</b>';
echo '<br>';
$inc = array_intersect($bil1, $bil2);
foreach ($inc as $bil) {
    echo $bil;
    echo '<br>';
}

echo '<br>';
echo '<b>Bilangan yang tidak ada di kedua variabel</b>';
echo '<br>';
$dif = array_diff($bil1, $bil2);
foreach ($dif as $bil2) {
    echo $bil2;
    echo '<br>';
}
