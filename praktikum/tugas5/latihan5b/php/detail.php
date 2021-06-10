<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
// ###################################################################################################
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
<html lang="en">
<head>
    <title>Detail</title>
</head>
<body>
    <div class="keterangan">
    <div class="wakwaw">
        <img src="../assets/img/<?= $warma["fotobarang"]; ?>">
        <br>
        <span><?= $warma["barang"]; ?></span>
        <div class="wow">
            <p><?= $warma["deskripsi"]; ?></p>
            <p><?= $warma["stok"]; ?></p>
            <p><?= $warma["harga"]; ?></p>
            <p><?= $warma["discont"]; ?></p>
        </div>
    </div>
    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
</body>
</html>