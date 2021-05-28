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
    </div>
    <title>Warma.com</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="icon" href="./assets/img/logowarma.png">
    <!--Source Untuk Menggunakan Fontawesome -->
    <script src="https://kit.fontawesome.com/e20013ff33.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Source CSS  -->
    <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection">
    <link rel="stylesheet" href="./css/cssbs/bootstrap.min.css"  media="screen,projection">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>
<body>

<!-- Bagian Navbar  -->
 <!-- Bagian nafbar -->
 <div class="navbar-fixed">
    <nav class="grey">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo1"><a href="#!" class="brand-logo"><span><img src="./assets/img/logowarma.png" alt="" width="70"></span></a>
                </div>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Home</a></li>
                        <li><a href="#cari">Produk</a></li>
                        <li><a href="./php/login.php"><div class="buttons">Masuk/Lebet ka halaman admin</a> </div></li>
                    </ul>
            </div>
        </div>
    </nav>
</div>

 <!-- Bagian SideNav -->
 <ul class="sidenav" id="mobile-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#cari">Produk</a></li>
        <li><a href="./php/login.php"><div class="buttons">Masuk/Lebet ka halaman admin</a> </div></li>

</ul>

<!-- Bagian slider -->
<div id="home"class="prbackground">
            <div class="slider">
                <ul class="slides">
                <li>
                    <img src="./assets/img/viewwarung.jpg"> 
                    <div class="caption left-align">
                    <h3><b>Serba ada serbamurah!</b></h3>
                    <h5 class="light grey-text text-lighten-3"><b>Hanya di warma anda bisa mendapatkan barang impian anda.</b>
                        <p><b>more have fun with warma</b></p>
                        <p><b>Stay At Home And Healty</b></p>
                        <p><b>be enjoy your shop</b></p>
                    </h5>
                    </div>
                </li>
                <li>
                    <img src="./assets/img/viewwarung.jpg"> 
                    <div class="caption right-align">
                    <h3><b>We Are Services</b></h3>
                    <h5 class="light grey-text text-lighten-3"><b>Kami siap melayani anda dalam 24 jam.</b>
                        <p><b>If any your problem ready to solve.</b></p>
                        <p><b>We'll do everything we can for you.</b></p>
                        
                    </h5>
                    </div>
                </li>
                <li>
                    <img src="./assets/img/viewwarung.jpg"> 
                    <div class="caption center-align">
                    <h3><b>This is our company!</b></h3>
                    <h5 class="light grey-text text-lighten-3"><b>A lot of many tools are served for you.</b>
                    <p><b>Enjoy and play with shopping.</b></p>
                    <p><b>Stay At Home And Healty</b></p>
                    <p><b>be enjoy your self</b></p>
                    </h5>
                    </div>
                </li>
                </ul>
            </div>
        </div>

<!-- Isi Content WARMA warung ema/ main table-->

    <div class="container mt-5 mb-5" data-aos="zoom-in-up" data-aos-duration="1500">
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
                    <th>Detail Produk</th>
                </tr>
            </thead>
            <abody>
                <?php $i = 1; ?>
                <?php foreach($warma as $wm) : ?>  
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $wm ["barang"]; ?></td>
                        <td><img src="assets/img/<?= $wm ["fotobarang"]; ?>"width="120"></td>
                        <td><?= $wm ["deskripsi"]; ?></td>
                        <td><?= $wm ["stok"]; ?></td>
                        <td><?= $wm ["harga"]; ?></td>
                        <td><?= $wm ["discont"]; ?></td>
                        <td>
                            <a href="php/detail.php?id=<?= $wm['id']?>"<?= $wm["barang"]?>>details Produk >>></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </abody>
        </table>
    </div>

<footer>
    <div class="row" data-aos="zoom-out" data-aos-duration="1500" class="text-center">
        <div class="col text-center cn">
            <p><b><span>Warma.com</span> - Copy right 2021 Designed by IkhsanRachmat-203040042</b></p>
        </div>
    </div>
</footer>

    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script>
          const sidenav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sidenav);

          const slider = document.querySelectorAll('.slider')
          M.Slider.init(slider,{
              indicators: false,
              height:650,
              transition:600,
              interval:3000
          });
    </script>
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