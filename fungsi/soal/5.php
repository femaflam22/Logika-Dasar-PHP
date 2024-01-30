<?php
// Buatlah sebuah fungsi yang akan membandingkan dua buah string nama. Lalu, menampilkan jumlah karakter dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya

function pembandingNama($nama1, $nama2) {
    $nama1_arr = str_split($nama1);
    $nama2_arr = str_split($nama2);

    if (count($nama1_arr) == count($nama2_arr)) {
        $text = "<u>$nama1</u> dan <u>$nama2</u> memiliki jumlah karakter sama : <b>" . count($nama1_arr) . "</b> karakter";
    }elseif (count($nama1_arr) >= count($nama2_arr)) {
        $text = "<u>$nama1</u> memiliki jumlah karakter lebih banyak dari <u>$nama2</u> : selisih <b>" . count($nama1_arr) - count($nama2_arr) . "</b> karakter";
    }else {
        $text = "<u>$nama2</u> memiliki jumlah karakter lebih banyak dari <u>$nama1</u> : selisih <b>" . count($nama2_arr) - count($nama1_arr) . "</b> karakter";
    }

    echo $text;
}

pembandingNama("Fema Flamelina Putri", "Artasya Legina");