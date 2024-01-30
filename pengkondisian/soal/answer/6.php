<?php
$year = 2023;

// seperti yang diketahui, untuk tahun-tahun yang merupakan kelipatan 4, pada bulan februari nya terdapat tanggal 29
// buatlah pengkondisian jika tahun merupakan kelipatan 4, maka akan menampilkan :
// tahun 2024, bulan Februari sampai dengan tanggal 29
// selain dari itu, akan menampilkan :
// tahun 2023, bulan Februari sampai dengan tanggal 28

if ($year % 4 == 0) {
    echo "tahun " . $year . ", bulan Februari sampai dengan tanggal 29";
} else {
    echo "tahun " . $year . ", bulan Februari sampai dengan tanggal 28";
}
?>