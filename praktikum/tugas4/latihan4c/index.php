<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';
    // melakukan query
    $warma = query("SELECT * FROM warma")
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/stylee.css">
    <style>
        .header{
            background-color: aqua;
            padding: 10px;
            text-align: center;
        }
    </style>
    <div class="header">
    <h1><b><<< Selamat datang di WARMA (Warung Euma) >>></b></h1>
    </div>
    <title>Warma(Warung Euma)</title>
</head>
<body>
    <div class="container">
            <abody>
                <?php foreach ($warma as $aw ) : ?>  
                   <p class="nama">
                        <a href="php/detail.php?id=<?= $aw['id']?>">
                            <?= $aw["nama"]?>
                        </a>
                   </p>
                <?php endforeach; ?>
            </abody>
        </table>
    </div>
</body>
</html>