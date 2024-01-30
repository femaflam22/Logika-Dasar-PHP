<?php

// dari array tersebut hitunglah jumlah rata-rata dari nilai tiap-tiap siswa. Lalu tampilkan seperti berikut :
// 1. Andi : 81.2

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

echo "<ol>";
foreach ($student as $key => $value) {
    echo "<li>" . $value['nama'] . " = " . (array_sum($value['nilai']) / count($value['nilai'])) . "</li>";
}
echo "</ol>";