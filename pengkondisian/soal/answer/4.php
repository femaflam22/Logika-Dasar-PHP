<?php
// terdapat sebuah variable yang menyimpan data tahun kelahiran
$tahun = 2004;
// apabila tahun skrng dr tahun keliharan tersebut berselesih 17 lebih, maka akan menampilkan teks berikut :
// tahun kelahiran 2004 sudah dapat memiliki KTP. Usia sekarang = 20
// apabila selisih kurang dari 17 maka menampilkan :
// tahun kelahiran 2008 belum dapat memiliki KTP

if ((int)date("Y") - $tahun < 17) {
    echo "tahun kelahiran " . $tahun . " belum dapat memiliki KTP";
} else {
    echo "tahun kelahiran " . $tahun . " dapat memiliki KTP. Usia sekarang = " . (int)date("Y") - $tahun;
}
?>