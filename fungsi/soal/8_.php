<?php 

//buatlah sebuah fungsi yang akan menerima data array berikut, serta angka yang dicari. Misalnya ingin mencari angka 100. Lalu tampilkan angka tersebut ada berapa dan terdapat pada urutan ke berapa. Fungsi dipanggil sebanyak dua kali dan angka yang dicari harus berbeda. Contoh pemanggilan argumentnya : namafunc(100,$data)
$data = [80, 90, 75, 100, 85, 100, 66];

// function searchNumber($search, ...$data) {
//     $arr = [];
//     foreach ($data as $key => $value) {
//         if ($value == $search) {
//            $arr[$key] = $value;
//         }
//     }
//     echo "Jumlah data $search : " . count($arr) . "<br>";
//     echo "Data berada pada : ";
//     echo "<ol>";
//     foreach ($arr as $key => $value) {
//         echo "<li> index ke-$key : $value</li>";
//     }
//     echo "</ol>";
// }

function searchNumber($angkaYangDicari, ...$data) {
    $jumlah = 0;
    foreach ($data as $value) {
        if ($value == $angkaYangDicari) {
            $jumlah += 1;
        }
    }

    return $jumlah;
}

$angkaYangDicari = 100;
echo "Jumlah angka $angkaYangDicari = " . searchNumber($angkaYangDicari, 100,20,40,80,100);
echo "<br>";
$angkaYangDicari2 = 80;
echo "Jumlah angka $angkaYangDicari2 = " . searchNumber($angkaYangDicari2, 100,20,40,80,100);