<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
// ################################################################################# 
    $pemainBola = [
        [
            "nama" => "Cristiano Ronaldo",
            "klub" => "Juventus",
            "main" => "100",
            "gol" => "76",
            "assist" => "30"
        ],
        [
            "nama" => "Lionel Messi",
            "klub" => "Baecelona",
            "main" => "120",
            "gol" => "80",
            "assist" => "12"
        ],
        [
            "nama" => "Luca Modric",
            "klub" => "Real Madrid",
            "main" => "87",
            "gol" => "12",
            "assist" => "48"
        ],
        [
            "nama" => "Mohammad Salah",
            "klub" => "Liverpool",
            "main" => "90",
            "gol" => "103",
            "assist" => "8"
        ],
        [
            "nama" => "Neymar Jr",
            "klub" => "Paris Saint Germain",
            "main" => "109",
            "gol" => "56",
            "assist" => "15"
        ],
        [
            "nama" => "Sadio Mane",
            "klub" => "Liverpool",
            "main" => "63",
            "gol" => "30",
            "assist" => "70"
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "klub" => "Ac Milan",
            "main" => "100",
            "gol" => "10",
            "assist" => "12"
        ]
    ];
$total_main = 0;
$total_gol= 0;
$total_assist = 0;
foreach ($pemainBola as $pemain => $bola) {
    $total_main += $bola['main'];
    $total_gol += $bola['gol'];
    $total_assist += $bola['assist'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3d</title>
    <style>
        .kotak 
        {
            font-family: arial;
            width: 72%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <table border="2" cellspacing="0" cellpadding="12">
            <td><b>NO</b></td>
            <td><b>NAMA</b></td>
            <td><b>CLUB</b></td>
            <td><b>MAIN</b></td>
            <td><b>GOAL</b></td>
            <td><b>ASSIST</b></td>
            <tr></tr>
                <?php  $i = 1; ?>    
                <?php foreach ($pemainBola as $pb) : ?>  
                        
                        <td><?= $i; ?></td>
                        <td><?= $pb["nama"];?></td>
                        <td><?= $pb["klub"];?></td>
                        <td><?= $pb["main"];?></td>
                        <td><?= $pb["gol"];?></td>
                        <td><?= $pb["assist"];?></td>
                        <tr></tr>  
                        <?php $i++; ?>
                <?php endforeach; ?>
            <th>#</th>
            <th colspan="2">
            <center>Jumlah</center>
            </th>
            <th><?= $total_main ?></th>
            <th><?= $total_gol ?></th>
            <th><?= $total_assist ?></th>  
        </table>
    </div>
</body>
</html>