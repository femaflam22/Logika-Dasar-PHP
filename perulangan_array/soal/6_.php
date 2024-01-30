<?php

// Buatlah urutan perkalian 1 x 1 = 1 sampai dengan 3 x 10 = 30

// space : loop pertama jmlh konten
// baris : loop kedua ambil dr baris per konten
// kolom : loop ketiga ambil dr jmlh kolom di per konten
for ($i=1; $i <= 3 ; $i++) { 
    for ($x=1; $x <= 10; $x++) { 
        echo "$x x $i = " . $x * $i . " <br> ";
    }
    echo "<br>";
}