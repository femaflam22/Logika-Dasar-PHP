<?php
//Buatlah sebuah fungsi yang akan menghitung jumlah karakter dari sebuah kalimat, jika kalimat lebih dari 50 karakter, maka karaktek dari 50 seterusnya diubah menjadi tanda ( ... )

function wrapText($text) {
    $count = str_split($text);
    if (count($count) > 50) {
        $text = substr($text, 0, 50);
        $text .= "...";
    }

    echo $text;
}

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique consectetur labore suscipit esse quisquam quaerat accusantium.";
wrapText($text);