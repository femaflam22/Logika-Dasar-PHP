<?php
// buatlah sebuah function yang akan menampilkan hari tanggal yg tdnya (Mon, 29 Jan 2024) menjadi (Senin, 29 Jan 2024) hari menggunakan bahasa indonesia, argument diambil dari variable berikut ($date)
function formatIDN($date) {
    $day = substr($date, 0, 3);
    if ($day == 'Sun') {
        $dayIDN = 'Minggu';
    }elseif ($day == 'Mon') {
        $dayIDN = 'Senin';
    }elseif ($day == 'Tue') {
        $dayIDN = 'Selasa';
    }elseif ($day == 'Wed') {
        $dayIDN = 'Rabu';
    }elseif ($day == 'Thu') {
        $dayIDN = 'Kamis';
    }elseif ($day == 'Fri') {
        $dayIDN = 'Jumat';
    }elseif ($day == 'Sat') {
        $dayIDN = 'Sabtu';
    }

    $newDate = str_replace($day, $dayIDN, $date);
    echo $newDate;
}

$date = date('D, d M Y');
echo $date;
echo " vs ";
formatIDN($date);