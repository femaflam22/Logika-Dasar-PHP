<?php

// Di suatu rumah produksi yang memiliki jam kerja 8 jam. Jika pegawai bekerja melebihi jam kerja berhak mendapatkan kompensasi berupa Rp. 50.000 di satu jam pertama dan Rp. 25.000 di jam berikutnya

// Jika Dani bekerja dari pukul 8 Pagi lalu pulang di pukul 10 malam, berapakah kompensasi yang akan diterima Dani.

// diketahui :
$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

// ditanyakan :
$jamMulai = 8;
$jamSelesai = 22;

// jawaban :
// 14
$jumlahJam = $jamSelesai - $jamMulai;

if ($jumlahJam > $jamNormal) {
    // 6
    $jumlahJamKompensasi = $jumlahJam - $jamNormal;

    if ($jumlahJamKompensasi == 1) {
        $kompensasi = $kompensasiSatu;
    } else {
        $kompensasi = ( ($jumlahJamKompensasi - 1) * $kompensasiDua ) + $kompensasiSatu;
    }

    echo "Jumlah kompensasi : " . $kompensasi;
} else {
    echo "Tidak mendapat kompensasi";
}