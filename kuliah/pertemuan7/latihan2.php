<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 7 - 19 Maret 2021
Mempelajari tentang Request Method GET & POST Pada PHP
*/
?>

<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["nomerkry"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["job"]) ||
    !isset($_GET["gm"])) {
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<html lang="en">
<head>
    <title>Detail Karyawan</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gm"];?>"></li>
    <li><?= $_GET["nama"];?></li>
    <li><?= $_GET["nomerkry"];?></li>
    <li><?= $_GET["email"];?></li>
    <li><?= $_GET["job"];?></li>

</ul>
    
</body>
</html>