<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 7 - 19 Maret 2021
Mempelajari tentang Request Method GET & POST Pada PHP
*/
// ############################################################################
// <<< Lingkup Variabel >>>
// 1.Superglobals
// variabel yang dimiliki oleh php variabel nya variabel special
// 2.variabel global
// 3.Variabel Scope/linkup variabel
// ############################################################################
/* 
Superglobals 7 variabel yang di miliki PHP
$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV
<<<< Tipe Array Associative
*/
// ############################################################################
$karyawan = [
    [
         "nomerkry" => "203040042",
         "nama" => "Ikhsan Rachmat Alghifari",
         "email" => "23ikhsanrachmat@gmail.com",
         "job" => "Back End Developer",
         "gm" => "ikhsan.jpg"
    ],
    [
        "nama" => "Angga Cekes",
         "nomerkry" => "201232131",
         "email" => "Anggacekes22@gmail.com",
         "job" => "Front End Developer",
         "gm" => "bangNga.jpg"

    ],
    [
        "nama" => "Bang Ndra",
        "nomerkry" => "2012321344",
        "email" => "Ndra123@gmail.com",
        "job" => "software engineer",
        "gm" => "bangNdra.jpg"

    ]
];
?>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Karyawan</h1>
<ul>
<?php foreach($karyawan as $kry ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $kry["nama"];?>&nomerkry=<?= $kry["nomerkry"];?>&email=<?= $kry["email"];?>
        &job=<?= $kry["job"];?>&gm=<?= $kry["gm"];?>"><?=$kry["nama"]?></a>
    </li>
<?php endforeach;?>
</ul>
    
</body>
</html>