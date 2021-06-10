<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
// ########################################################################################
//function melakukan connect ke database
// $conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040042");
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040042");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $warma = [];
    while ($wm = mysqli_fetch_assoc($result)) {
        $warma[] = $wm;
    }
    return $warma;
}
?>
