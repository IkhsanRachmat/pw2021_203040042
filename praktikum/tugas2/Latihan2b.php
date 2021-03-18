<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php 
    $jawabanIsset = "Isset adalah = salah satu fungsi php, guna untuk memeriksa suatu objek dari nilai inputan form.<br><br>";
    $jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk  mengecek data atau sebagai penanda suatu kondisi.";
    //Sumber : https://www.brianabraham.web.id/blog/fungsi-isset-di-php.html
    //Sumber : https://kursuswebprogramming.com/fungsi-empty-pada-php
    function soal($style){
        return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2b</title>
    <style>
    .style{
        border: 1px solid black;
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
</body>
</html>