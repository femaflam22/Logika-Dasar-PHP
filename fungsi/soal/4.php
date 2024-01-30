<?php

//buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang diterima. Data yang dikirim berbentuk string nama-nama jurusan. Jika nama jurusan ada yang dipanggil duplikat, maka yang dimasukkan ke array hanya salah satunya saja (capslock). 
// Contoh pemanggilan argumentnya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan menghasilkan array ["PPLG", "HTL", "KLN", "PMN"]

function createArray(...$jurusan) {
    $arr = [];
    foreach ($jurusan as $value) {
        if (in_array(strtoupper($value), $arr) == false) {
            array_push($arr, strtoupper($value));
        }
    }
    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));