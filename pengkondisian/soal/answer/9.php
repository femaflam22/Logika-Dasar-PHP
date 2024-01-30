<?php

// Terdapat satu variabel yang memiliki value -5. Tentukan lah apakah variabel tersebut masuk kelam bilangan bulat positif, bilangan bulat negatif atau bilangan cacah. Dan apakah variabel tersebut merupakan variabel kelipatan 3

$a = -5;

if ($a == 0) {
    if ($a % 3 == 0) {
        echo $a . ' adalah bilangan cacah yang berkelipatan 3';
    } else {
        echo $a . ' adalah bilangan cacah yang bukan berkelipatan 3';
    }
} elseif ($a >= 1) {
    if ($a % 3 == 0) {
        echo $a . ' adalah bilangan bulat positif yang berkelipatan 3';
    } else {
        echo $a . ' adalah bilangan bulat positif yang bukan berkelipatan 3';
    }
} else {
    if ($a % 3 == 0) {
        echo $a . ' adalah bilangan bulat negatif yang berkelipatan 3';
    } else {
        echo $a . ' adalah bilangan bulat negatif yang bukan berkelipatan 3';
    }
}