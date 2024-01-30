<?php 
// menampilkan angka 10-1, jika angka 

for ($i=10; $i >= 1; $i--) { 
    if ($i == 8) {
        continue;
    } elseif ($i == 3) {
        break;
    }

    echo $i . "<br>";
}