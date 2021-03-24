<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
}

require 'functions.php';

// Mengembalikan id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
 $warunglur = query("SELECT * FROM warma WHERE id = $id")[0];

?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="assets/img/<?= $aw ["fotobarang"]; ?>">
    </div>
    <div class="keterangan">
        <p><?= $aw ["barang"]; ?></p>
        <p><?= $aw ["deskripsi"]; ?></p>
        <p><?= $aw ["stok"]; ?></p>
        <p><?= $aw ["harga"]; ?></p>
        <p><?= $aw ["discont"]; ?></p> <
    </div>
    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
</body>
</html>