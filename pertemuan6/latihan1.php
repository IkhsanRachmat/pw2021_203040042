<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 6 - 11 Maret 2021
Mempelajari tentang Associative Array Pada PHP
*/
?>

<html lang="en">
<head>
    <title>Latihan Array</title>
    <style> 
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php 
// cara untuk mencetak array multi dimensi
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

<!-- <div class="kotak">5</div> -->
    
</body>
</html>