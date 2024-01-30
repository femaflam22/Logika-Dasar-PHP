<?php

// Tampilkan hasil perkalian 5, jika pada angka terdapat 0 maka angka tersebut tidak ditampilkan, dan perkalian berhenti sampai dengan 55

for ($i=1; $i <= 12; $i++) { 
    $hasil = $i * 5;
    if ($hasil % 10 == 0) {
        continue;
    } elseif ($hasil > 55) {
       break;
    }
    echo "$i x 5 = <span style='color:blue'>" . $hasil . "</span><br>";
}