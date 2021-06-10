<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
// ########################################################################## 
    function hitungDeterminan($bilA, $bilB, $bilC, $bilD){

        // baris code perhitung determinan
        
        // menampilkan matriks

        $hasil = ($bilA * $bilD) - ($bilB * $bilC);

        echo "<table style='border-left: 4px solid black; border-right: 4px solid black; font-size: 15px;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$bilA</td>
                    <td>$bilB</td>
                </tr>
                <tr>
                    <td>$bilC</td>
                    <td>$bilD</td>
                </tr>
              </table><br>";
        echo "<b>Determinan dari matriks tersebut adalah $hasil</b>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2d</title>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4); ?><!-- Memanggil function hitungDeterminan  -->
</body>
</html>