<?php

// Tahun ini SMK Wikrama menjadi tuan rumah dari Lomba Programming Nasional yang diikuti oleh siswa SMP dan SMA/SMK/MA. Setiap peserta yang mendaftar mendapatkan nomor peserta sesuai dengan ketentuan dan ketegori mata lomba. Terdapat 3 mata lomba dengan kodenya masing-masing, yaitu :
// Web App 01W
// Android 02A
// Game 03G


// Nomor peserta disusun dari 'Urutan Daftar ke - kategori mata lomba - tingkat pendidikan P untuk SMP, A untuk SMA/SMK/MA - 2 digit terakhir tahun pelaksanaan'

// Jika terdapat 121 peserta yang sudah daftar dan tuan rumah menunjuk Eko sebagai perwakilan di mata lomba Web App, berapakan nomor peserta yang akan didapatkan Eko.

$peserta = 121;
$kategori = 'Web App';
$tp = 'SMA';
$nama = 'Eko';
$year = substr(date('Y'),2,2);

if ($tp == 'SMP') {
    $tpk = 'P';
} else {
    $tpk = 'A';
}

if ($kategori == 'Web App') {
    $kl = '01W';
} elseif ($kategori == 'Andorid') {
    $kl = '02A';
} else {
    $kl = '03G';
}

echo 'Nama : ' . $nama;
echo '<br>';
echo 'No. Peserta : ' . $peserta + 1 . $kl . $tpk . $year;
echo '<br>';
echo 'Mata Lomba : ' . $kategori;
echo '<br>';
echo 'Tingkat Sekolah : ' . $tp;