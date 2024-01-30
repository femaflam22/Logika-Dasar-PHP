<?php
// buatlah tanda persegi dengan simbol bintang sebanyak 4 baris dengan banyak bintang perbarisnya sebanyak 8 bintang. persegi tersebut dibuat dua kali

for ($i=1; $i < 10; $i++) { 
    for ($j=0; $j < 8; $j++) { 
        if ($i % 5 == 0) {
            echo "";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}