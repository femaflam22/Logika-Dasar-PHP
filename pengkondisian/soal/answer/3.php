<?php
// terdapat sebuah variable yang menyimpan data string
$nama = "Fe";
// buat pengecekan yang akan menampilkan jumlah karakter dari sebuah string. Jika karakter lebih dari 3 maka akan menampilkan teks berikut :
// karakter dari teks "Fema" berjumlah lebih dari 3
// jika kurang atau sama dengan 3 maka akan menampilkan :
// karakter dari teks "Fe" berjumlah 2

if (strlen($nama) <= 3) {
    echo 'karakter dari teks "' . $nama . '" berjumlah ' . strlen($nama);
} else {
    echo 'karakter dari teks "' . $nama . '" berjumlah lebih dari 3';
}
?>