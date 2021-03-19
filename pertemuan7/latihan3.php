<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 7 - 19 Maret 2021
Mempelajari tentang Request Method GET & POST Pada PHP
*/
?>

<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Hallo, Selamat Datang <?= $_POST["nama"]?></h1>
<?php endif; ?>

<form action="" method="post">

<!-- <form action="latihan4.php" method="post"> -->
    Masukkan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim!</button>
</form>
    
</body>
</html>