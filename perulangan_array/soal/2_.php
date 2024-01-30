<?php 

// Tampilkan bilangan-bilangan yang memungkinkan untuk bilangan 90 bisa dibagi habis dengan bilangan tersebut dari rentang angka 1-30

for ($i=1; $i < 30; $i++) { 
    if (90 % $i == 0) {
        echo "90 : $i = " . 90 / $i . "<br>"; 
    }
}