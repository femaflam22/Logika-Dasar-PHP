<?php 

// Berikut jadwal praktik dokter di Klinik Kesehatan Deni

// Senin = dr. Andi
// Selasa = dr. Andi & dr. Beni
// Rabu = dr. Deni
// Kamis = dr. Eko
// Jumat = dr. Dani & dr. Eko

// Setiap pasien yang datang akan ditangani sesuai dengan dokter yang terjadwal praktik. Tetapi untuk hari Selasa jika nomor urut pasien gasal akan ditangani oleh dr. Andi, jika genap akan ditangani oleh dr. Beni. Hal ini berlaku di hari Jumat.


$date = date('d-m-Y');
$day = date('l', strtotime($date));
$no = 32;

echo 'Nomor urut pasien : ' . $no;
echo '<br>';
echo 'Tanggal : ' . $date;
echo '<br>';


if ($day == 'Monday') {
    $dokter = 'dr. Andi';
} elseif ($day == 'Tuesday') {
    if ($no % 2 == 0) {
        $dokter = 'dr. Beni';
    } else {
        $dokter = 'dr. Andi';
    }
} elseif ($day == 'Wednesday') {
    $dokter = 'dr. Deni';
} elseif ($day == 'Thursday') {
    $dokter = 'dr. Eko';
} elseif ($day == 'Friday') {
    if ($no % 2 == 0) {
        $dokter = 'dr. Eko';
    } else {
        $dokter = 'dr. Dani';
    }
} else {
    $dokter = '-';
}

echo 'Dokter : ' . $dokter;