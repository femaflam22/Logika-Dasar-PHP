<?php
// terdapat sebuah variable berikut
$angka = 22;
// buatlah logika (if-else) untuk menghasilkan output seperti berikut :
// jika value tanpa petik :
// 22 merupakan bilangan
// jika value dengan petik ($angka = "22") :
// "22" merupakan text

if (gettype($angka) == "string") {
    echo '"' . $angka . '" merupakan text';
} else {
    echo $angka . " merupakan bilangan";
}
?>