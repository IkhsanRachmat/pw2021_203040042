<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas1</title>

</head>
<body>
<table width="220px" cellspacing="5px" cellpadding="1px" border="2px">

<?php for( $row = 1; $row <= 6; $row++ ) : ?>
    <tr>
        <?php for( $col = 1; $col <= 6; $col++ ) : ?>
            <?php $rc = $row + $col; ?>
            <?php if( $rc % 2 == 1 ) : ?>
                <td height=30px width=30px bgcolor=salmon></td>
            <?php else : ?>
                <td height=30px width=30px bgcolor=lightblue></td>
            <?php endif; ?>
        <?php endfor; ?> 
    </tr>
<?php endfor; ?>