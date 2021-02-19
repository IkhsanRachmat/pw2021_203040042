<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 2 - 12 Februari 2021
Mempelajari mengenai sintaks dasar PHP
*/
?>

<?php
// Pertemuan 2 - PHP Dasar
// Sintak PHP

// Standar Output
// Standar Output ini adalah sebuah perintah di php yang di gunakan untuk menampilkan sesuatu ke layar
// Contoh sintak:
// echo, print
// print_r "Khusus di gunakan untuk mencetak isi Array"
// var_dump "di gunakan untuk melihat isi dari variabel"

// echo "Ikhsan Rachmat";
// var_dump ("Ikhsan Rachmat");

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Aturan pembuatan "tidak boleh diawali dengan angka, tapi boleh mengandung angka" 
// $nama = "Ikhsan";

// Operator
// aritmatika
// + - * / %
// echo 1 + 1;
// Bisa juga Simpendulu ke variabel
// $x = 10;
// $y = 20;
// echo $x * $y;

// Operator penggabung string / concatenation / concat
// .
// $nama_depan ="Ikhsan";
// $nama_belakang ="Rachmat";
// echo $nama_depan . " " . $nama_belakang;

// Operator Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Ikhsan";
// $nama .=" ";
// $nama .= "Rachmat";
// echo $nama;

// Operator Perbandingan
// <, >, <=, >=, ==
// var_dump(1 == "1")

// Identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);
?>


<!-- Contoh PHP di dalam HTML (RECOMEND Penulisan) -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo,Selamat datang <?php /*echo "Ikhsan"; */?></h1>
    
</body>
</html> -->

<!-- Contoh HTML di dalam PHP -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <?php /*echo "<h1>Halo, Selamat datang Ikhsan</h1>"*/?>
    
</body>
</html> -->