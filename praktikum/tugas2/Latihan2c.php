<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php 
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for ($j=1; $j <= $i; $j++){
                echo "<div class=\"bola\">$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2c</title>

    <style>
    .bola{
        width: 70px;
        height: 70px;
        background-color: salmon;
        border: 2px solid black;
        display: inline-block;
        border-radius: 100%;
        text-align: center;
        line-height: 50px;
        margin: 5px 5px 0 0;
    }
    </style>
</head>
<body>
    <?php tumpukanBola(10); ?>
</body>
</html>