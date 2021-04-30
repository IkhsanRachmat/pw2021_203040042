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
// << Pegulangan pada araay >>
// for / foreach
// Catatan: 
// Supaya agar php menghitung sendiri berapa jumlah elemen
// kita bisa menggunakan count()

$angka = [3,2,15,20,11,88,1,45];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style> 
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both;}
    </style>

</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>