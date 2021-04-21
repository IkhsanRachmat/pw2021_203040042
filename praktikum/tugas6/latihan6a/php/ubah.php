<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php
require 'functions.php';
//ambil data di URL
$id =$_GET["id"];

//query data mahasiswa berdasarkan id
$wm = query("SELECT * FROM warma WHERE id = $id")[0];

//cek tombol submit apakah sudah berfungsi atau belum
if (isset($_POST["ubah"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data tos berhasil diubah!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data tos gagal diubah!');
                    document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Warung</title>
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
    <h3 class = "wowk"><b><<< Form Ubah Data Warung >>></b></h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $wm['id']; ?>">
        <ul>
            <li>
                <label for="barang">Barang :</label><br>
                <input type="text" name="barang" id="barang" required value="<?= $wm['barang']; ?>"><br><br>
            </li>
            <li>
                <label for="fotobarang">Fotobarang :</label><br>
                <input type="text" name="fotobarang" id="fotobarang" required value="<?= $wm['fotobarang']; ?>"><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $wm['deskripsi']; ?>"><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required value="<?= $wm['stok']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $wm['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="discont">Discont :</label><br>
                <input type="text" name="discont" id="discont" required value="<?= $wm['discont']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Update Data!</button>
            <button type="submit">
                <a href="../index.php">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>