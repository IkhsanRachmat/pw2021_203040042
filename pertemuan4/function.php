<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 4 - 11 maret 2021
Mempelajari tentang Implementasi Function pada php
*/
?>

<?php

function salam($waktu ="Datang", $nama = "IkhsanR") {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi","IkhsanRachmat"); ?></h1>
</body>
</html>