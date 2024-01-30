<?php
// terdapat sebuah variable nilai
$nilai = 74;
// buatlah logika untuk menghasilkan text berikut dengan warna hijau pada teks "KOMPETEN" jika nilai lebih besar sama dengan 75 :
// nilai 76 dinyatakan <warnahijau>KOMPETEN<warnahijau>
// nilai kurang dari itu akan menampilkan teks berikut dengan warna merah pada teks "BELUM KOMPETEN" :
// nilai 74 dinyatakan <warnamerah>BELUM KOMPETEN<warnamerah>
if ($nilai >= 75) {
    echo "nilai " . $nilai . " dinyatakan <span style='color: green'> KOMPETEN </span>";
} else {
    echo "nilai " . $nilai . " dinyatakan <span style='color: red'> BELUM KOMPETEN </span>";
}
?>