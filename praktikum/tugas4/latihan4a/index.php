<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
// ############################################################### 

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost","root","");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040042");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM warma")

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Foto barang</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Discont</th>
                </tr>
            </thead>
            <abody>
                <?php $i = 1 ?>
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row["barang"]; ?></td>
                        <td><img src="assets/img/<?= $row["fotobarang"]; ?>"></td>
                        <td><?= $row["deskripsi"]; ?></td>
                        <td><?= $row["stok"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["discont"]; ?></td>
                    </tr>
                <?php $i++ ?>
                <?php endwhile; ?>
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