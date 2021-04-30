<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 5 - 11 Maret 2021
Mempelajari tentang Array pada PHP
*/
?>

<?php 
// cara multi dimensi/array didalam array
// "Array nomerik array yang indeks nya angka"

// Array multidimensi >>>
$mahasiswa = [
    ["Ikhsan Rachmat Alghifari", "203040042",
    "Teknik Informatika", "23ikhsanrachmat@gmail.com"],
    ["Ujang Cekes", "203123214",
    "Teknik Kuli Bangun", "UjangCekes@gmail.com"],
    ["Mamat Portal", "212312412",
    "Teknik Ngecor", "MamatPortal@gmail.com"],
];

?>
<!DOCTYPE html>
<html >
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<!--  cara tulis manual
<ul>
    <li>Ikhsan Rachmat Alghifari</li>
    <lI>203040042</li>
    <li>Teknik Informatika</li>
    <li>23ikhsanrachmat@gmail.com</li>
</ul>
-->

<!-- Menggunakan looping  -->

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama    : <?= $mhs[0]; ?></li>
    <li>NRP     : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email   : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>