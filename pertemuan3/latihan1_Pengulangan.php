<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 3 - 24 Februari 2021
Mempelajari tentang pengulangan dan pengkondisian
*/
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Latihan 1 Pengulangan Pada Tabel</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php
        // for( $i = 1; $i <=3; $i++ ) {
        //     echo "<tr>";
        //     for ( $j = 1; $j <=5; $j++ ) {
        //         echo "<td>$i,$j</td>";
        //     }
        //     echo "</tr>";
        // }
    ?>
</table>
    
</body>
</html> -->

<!-- Penulisan Gaya Templating -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 Pengulangan Pada Tabel</title>
    <style>
        .warna-baris {
            background-color: silver; 
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 0 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <=5; $j++ ) :?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
    
</body>
</html>
