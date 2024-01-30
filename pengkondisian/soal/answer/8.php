<?php
// Di suatu rumah produksi yang memiliki jam kerja 8 jam. Jika pegawai bekerja melebihi jam kerja berhak mendapatkan kompensasi berupa Rp. 50.000 di satu jam pertama dan Rp. 25.000 di jam berikutnya

// Jika Dani bekerja dari pukul 8 Pagi lalu pulang di pukul 10 malam, berapakah kompensasi yang akan diterima Dani.

$masuk = 8;
$keluar = 22;
$lama = $keluar - $masuk;
$over = $lama - 8;
$totalKompensasi = 0;

if ($lama > 8) {
    if ($over > 1) {
        $kompensasiDua = 50000 + (($over - 1) * 25000);
    } else {
        $kompensasiSatu = 50000;
    }

    $totalKompensasi = $kompensasiSatu + $kompensasiDua;
} 

echo 'Lama Kerja : ' . $lama . ' Jam';
echo '<br>';
echo 'Jam Lebih : ' . $over . ' Jam';;
echo '<br>';
echo 'Jumlah Kompensasi : Rp. ' . number_format($kompensasi,0,'.','.');