<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
// ############################################################################################################### 
    $nama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b</title>
    <style>
        .kotak 
        {
            font-family: arial;
            width: 50%;
            padding: 10px;
            border: 3px solid black;
        }
        p 
        {
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <p>Daftar pemain bola terkenal</p>
            <ol>
                <?php foreach($nama as $n) : ?>                   
                        <li><?= $n; ?></li>                  
                <?php endforeach ?>
            </ol>
            <?php
                array_push($nama, 'Luca Modrie', 'Sadio Mane');
                sort($nama);
            ?>
            <p>Daftar pemain bola terkenal baru</p>
            <ol>
                <?php foreach($nama as $n) : ?>                   
                        <li><?= $n; ?></li>                  
                <?php endforeach ?>
            </ol>
    </div>
</body>
</html>