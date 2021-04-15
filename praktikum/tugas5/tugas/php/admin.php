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
require './functions.php';
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
    <h1><b><<< Selamat datang ADMIN WARMA (Warung Euma) >>></b></h1>
    </div>
    <title>Warma(Warung Euma)</title>
    <style>
        .awok{
            margin-top: 10px;
            margin-left: 10px;
            padding: 10px 20px 10px 20px;
            background-color:turquoise;
            font-family: arial;
        }
        .cc {
            background-color: red;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>
<body>
<a href="./tambah.php"><button class="awok">Tambih Data</button></a>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Barang</th>
                    <th>Foto barang</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Discont</th>
                </tr>
            </thead>
            <abody>
                <?php $i = 1; ?>
                <?php foreach($warma as $wm) : ?>  
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $wm["id"] ?>"><button><b>Gentos</b></button></a>
                            <a href="hapus.php?id=<?= $wm["id"] ?>" onclick="return confirm('Hupus Data?')"><button class="cc"><b>Hupus</b></button></a>
                        </td>
                        <td><?= $wm ["barang"]; ?></td>
                        <td><img src="../assets/img/<?= $wm ["fotobarang"]; ?>"></td>
                        <td><?= $wm ["deskripsi"]; ?></td>
                        <td><?= $wm ["stok"]; ?></td>
                        <td><?= $wm ["harga"]; ?></td>
                        <td><?= $wm ["discont"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </abody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cari').DataTable();
        } );
    </script>
</body>
</html>