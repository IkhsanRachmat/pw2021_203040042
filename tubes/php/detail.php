<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
//untuk mengecek apakah ada id yang dikiri, jika tidak kembali ke index.php
if(!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';
// mengambil id dari url 
$id = $_GET['id'];
//melakukan query dengan parameter id yang diambil dari url
$warma = query("SELECT * FROM warma WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/detailcss.css">
    <title>Warma.com</title>
    <link rel="icon" href="../assets/img/logowarma.png">
     <!--Source Untuk Menggunakan Fontawesome -->
    <script src="https://kit.fontawesome.com/e20013ff33.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Source Css frame work Aos animasi -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <div class="keterangan">
    <div class="wakwaw" data-aos="fade-right" data-aos-duration="1000">
        <img src="../assets/img/<?= $warma["fotobarang"]; ?>"width="300" data-aos="zoom-in-up" data-aos-duration="1500">
        <br>
        <h2><span><?= $warma["barang"]; ?></span></h2>
        <div class="wow">
            <p><?= $warma["deskripsi"]; ?></p>
            <p><?= $warma["stok"]; ?></p>
            <p><?= $warma["harga"]; ?></p>
            <p><?= $warma["discont"]; ?></p>
        </div>
        <i class="fab fa-whatsapp-square"></i>
    </div>
    <a class="gg" href="../index.php"><button data-aos="fade-right" data-aos-duration="1500">kembali</button></a>

    <script>
    AOS.init({ once: true, });
    </script>
</body>
</html>
