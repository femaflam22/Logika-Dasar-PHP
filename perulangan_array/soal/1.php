<?php

// Tampilkan angka-angka yang bisa dibagi dengan 4 dan 5, pada rentang 1-50

for ($i=1; $i < 50 ; $i++) { 
    if (($i % 4 == 0) && ($i % 5 == 0)) {
        echo "$i : 4 = " . $i / 4 . " dan $i : 5 = " . $i / 5 . "<br>";
    }
}
