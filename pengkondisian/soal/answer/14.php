<?php 

// Mini Market Eko menjual berbagai kebutuhan. Setiap pelanggan yang berbelanja lebih dari 100000 akan mendapatkan voucher potonga harga sebesar 10000 di pembelian selanjutnya dengan masa berlaku voucher adalah 1 bulan setelah pembelian. Jika total belanja lebih dari 150000 akan mendapatkan voucher serupa dan mendapatkan poin member sebanyak 1/Rp.1000.

// Jika Andi berbelanja sebesar 180000 apasaja yang akan didapatkan Andi.

$belanja = 180000;
$time = time(); 
$final = date("d-m-Y", strtotime("+1 month", $time)); 

echo 'Total belanja : Rp. ' . number_format($belanja,'0',',','.'); 

if ($belanja > 100000 && $belanja < 150000) {
    echo ' Selamat Anda mendapatkan voucher potongan harga sebesar Rp. 10.000 untuk pembelian selanjutnya dengan masa berlaku sampai tanggal ' . $final;
} elseif ($belanja  > 150000) {
    $poin = $belanja / 1000;
    echo ' Selamat Anda mendapatkan voucher potongan harga sebesar Rp. 10.000 untuk pembelian selanjutnya dengan masa berlaku sampai tanggal ' . $final. ' dan tambahan poin member sebanyak ' . $poin . ' poin';
} else {
    echo ' Silahkan berbelanja kembali untuk mendapatkan hadiah menarik.';
}