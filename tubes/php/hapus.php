<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
// TUBES
https://github.com/IkhsanRachmat/pw2021_203040042
*/
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
} 
require './functions.php';

$id = $_GET["id"];
if ( hapus($id) > 0) {
    echo "<script>
            alert('Data tos berhasil dihupus!');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
            alert('Data tos gagal dihupus!');
            document.location.href = 'admin.php';
        </script>";
}
?>
