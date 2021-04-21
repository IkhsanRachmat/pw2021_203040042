<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Warung</title>
    <style>
        .wowk{
            background-color:aqua;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            
        }
    </style>
</head>
<body>
    <h3 class = "wowk"><<< Form Tambih Data Warung >>></h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="barang">Barang :</label><br>
                <input type="text" name="barang" id="barang" required><br><br>
            </li>
            <li>
                <label for="fotobarang">Foto barang :</label><br>
                <input type="text" name="fotobarang" id="fotobarang" required><br><br>
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
            <button type="submit" name="tambah">Tambih Data!</button>
            <button type="submit">
                <a href="../index.php">Kembali</a>
            </button>
        </ul>
    </form>

<?php
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
</body>
</html>