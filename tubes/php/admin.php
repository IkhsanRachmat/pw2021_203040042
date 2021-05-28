<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
} 
    // menghubungkan dengan file php lainnya
require './functions.php';
    // melakukan query
$warma = query("SELECT * FROM warma")
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>Warma.com</title>
    <link rel="icon" href="../assets/img/logowarma.png">
    <div class="header">
        <h1 data-aos="fade-down" data-aos-duration="1000" ><b><<< Selamat datang ADMIN WARMA (Warung Euma) >>></b></h1>
    </div>

    <!--Source Untuk Menggunakan Fontawesome -->
    <script src="https://kit.fontawesome.com/e20013ff33.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="../css/cssbs/bootstrap.min.css">
    <!-- Source Css frame work Aos animasi -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- source Css sendiri cssadmin-->
    <link rel="stylesheet" href="../css/cssadmin.css">
    <!-- source Css frame work bulma-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
     <!-- source frame work js bulma,Aos dan jquery -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>
<body>
<a class="awok1" href="./tambah.php"><button data-aos="fade-right" data-aos-duration="1000" class="awok"><b>Tambih Data</b></button></a>
<div class="logout">
    <a class="awok1" href="./logout.php"><button data-aos="fade-right" data-aos-duration="1500" class="awok"><b>Logout</b></button></a>
</div>
    <div class="container mt-5 mb-5"data-aos="zoom-in-up" data-aos-duration="1500">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable" >
            <thead>
                <tr class="tb1">
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
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($warma as $wm) : ?>  
                    <tr>
                        <td class="tb1"><?= $i; ?></td>
                        <td>
                            <a class="gg1" href="ubah.php?id=<?= $wm["id"] ?>"><button><b>Update</b></button></a>
                            <br>
                            <a class="cc1" href="hapus.php?id=<?= $wm["id"] ?>" onclick="return confirm('Hupus Data?')"><button class="cc"><b>Hupus</b></button></a>
                        </td>
                        <td><?= $wm ["barang"]; ?></td>
                        <td><img src="../assets/img/<?= $wm ["fotobarang"]; ?>" width="120"></td>
                        <td><?= $wm ["deskripsi"]; ?></td>
                        <td><?= $wm ["stok"]; ?></td>
                        <td><?= $wm ["harga"]; ?></td>
                        <td><?= $wm ["discont"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<footer>
    <div class="row" data-aos="zoom-out" data-aos-duration="1500">
        <div class="col-md-4 col-sm-12 text-center foot">
            <img src="../assets/img/logowarma.png" alt="">
        </div>
        <div class="col-md-4 col-sm-12 text-center foot1">
                <h1><<< <span>Warma</span> (Warung euma) >>></h1>
                <p>Segala ada segala murah meriah</p> 
                <p>temukan barang mu hanya di warma!</p>
                <p><b><span>Warma.com</span> - Copy right 2021 Designed by IkhsanRachmat-203040042</b></p>
        </div>
        <div class="col-md-4 col-sm-12 text-center foot1" >
                <h1><span>Follow</span> me</h1>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube-square"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-square"></i>
        </div>
    </div>
</footer>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cari').DataTable();
        } );
    </script>
    <script>
    AOS.init({ once: true, });
    </script>
</body>
</html>