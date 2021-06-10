<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
} 

require './functions.php';

if (isset($_POST["tambah"]) ) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data tos berhasil ditambahkan!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data tos gagal ditambahkan!');
                    document.location.href = 'admin.php'
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>Warma.com</title>
    <link rel="icon" href="../assets/img/logowarma.png">
    <div class="header">
        <h1 data-aos="fade-down" data-aos-duration="1000"><<< Form Tambih Data Warung >>></h1>
    </div>

    <link rel="stylesheet" href="../css/cssbs/bootstrap.min.css">
    <!-- Source Css frame work Aos animasi -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- source Css sendiri csstambah.css-->
    <link rel="stylesheet" href="../css/csstambah.css">
    <!-- source Css frame work bulma-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
     <!-- source frame work js bulma,Aos dan jquery -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <form class="ff" action="" method="POST" enctype="multipart/form-data">
        <ul data-aos="fade-right" data-aos-duration="1000">
            <li>
                <label for="barang">Barang :</label><br>
                <input type="text" name="barang" id="barang" required><br><br>
            </li>
            <li>
                <label for="fotobarang">Foto barang :</label>
                <img src="../assets/img/nophoto.jpg" alt="120" width="120" style="display: block;" class="img-preview">
                <br>
                <input type="file" name="fotobarang" class="fotobarang" id="fotobarang" onchange="previewImage()"><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="discont">Discont :</label><br>
                <input type="text" name="discont" id="discont" required><br><br>
            </li>
            <br>
                <button class="kmb" type="submit" name="tambah"><b>Tambih Data!</b></button>

                <button class="tmb" type="submit">
                    <a href="./admin.php">Kembali</a>
                </button>
        </ul>
    </form>
<script src="../js/script.js"></script>
<script>
    AOS.init({ once: true, });
</script>
</body>
</html>