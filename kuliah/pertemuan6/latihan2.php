<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 6 - 11 Maret 2021
Mempelajari tentang Associative Array Pada PHP
*/
?>

<?php
// <<< Latihan Array Associative >>> 

// Array Associative
// definiinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar karyawan</title>
    <style>
        .head1{
            color:cadetblue;
        }
    </style>
</head>
<body>
    <div class="head1">
        <h1><b>Karyawan</b></h1>
    </div>
    <?php foreach( $karyawan as $kry ) : ?>
    <ul>
        <li>
            <img src="img/<?= $kry["gm"]; ?>">
        </li>
        <li>Nama : <?= $kry["nama"]; ?></li>
        <li>Nomerkry : <?= $kry["nomerkry"]; ?></li>
        <li>Email : <?= $kry["email"]; ?></li>
        <li>JOB : <?= $kry["job"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
