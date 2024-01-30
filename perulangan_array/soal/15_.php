<?php

// Tampilkan nama-nama barang dari data dibawah ini, hanya yang memiliki diskon

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli Mesin',
        'diskon' => 0,
    ],
    [
        'nama' => 'Kampas Rem',
        'diskon' => 0,
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
]; 

echo "Nama-nama barang yang mempunyai diskon : <br>";
echo "<ol>";
foreach ($barang as $key => $value) {
    if ($value['diskon'] > 0) {
        echo "<li>" . $value['nama'] . "</li><br>";
    }
}
echo "</ol>";