<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 5 - 11 Maret 2021
Mempelajari tentang Array pada PHP
*/
?>

<?php 
// << array >> Pengertian : 
// variabel yang dapat memiliki banyak nilai
// << ilustarasi array >> :
// Di ibaratkan Seperti tempat pensil warna, yang memiliki kegunaan untuk menyimpan dan menata pencil warna dalam satu tempat,
// agar rapih dan mudah di cari setiap kita butuh kan pencil warna yang di butuhkan
// "elemen pada arry boleh memiliki tipe data yang berbeda"

// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// << membuat array >>
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tuisan", false];

// << Menampilkan array >>
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array "bisa menggunakan echo"
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambah elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo"<br>";
var_dump($hari);

?>