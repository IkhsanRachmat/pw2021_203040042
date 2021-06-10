<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
    // menghubungkan dengan file php lainnya
require 'php/functions.php';
    // melakukan query
$warma = query("SELECT * FROM warma")  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stylee.css">
    <title>Warma.com</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="icon" href="./assets/img/logowarma.png">
    <!--Source Untuk Menggunakan Fontawesome -->
    <script src="https://kit.fontawesome.com/e20013ff33.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Source CSS  -->
    <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection">
    <link rel="stylesheet" href="./css/cssbs/bootstrap.min.css"  media="screen,projection">
    <!-- Source Css frame work Aos animasi -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

    <style>
        #loading{
            width: 50px;
            height: 50px;
            border: solid 5px #ccc;
            border-top-color:#00c3ff;
            border-radius:100%;

            position: fixed;
            left:0;
            top: 0;
            right: 0;
            bottom:0;
            margin:auto;
            animation: putar 2s linear infinite;
        }
        @keyframes putar{
            from{transform:rotate(0deg)}
            to{transform:rotate(360deg)}
        }
    </style>

</head>
<body>

<!-- Bagian Navbar  -->
 <!-- Bagian nafbar -->
 <div class="navbar-fixed" data-aos="fade-down" data-aos-duration="1000">
    <nav class="black">
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
            <li><a href="./php/login.php">Masuk/Lebet ka halaman admin</a></li>
    </ul>

<section class="banner">
<div id="loading"></div>
    <div class="overlay">
        <div class="kata">
            <h1 data-text="Wellcome to Warma Shop">Wellcome to Warma Shop</h1>
            <div class="kata2">
                <h2 data-aos="fade-right" data-aos-duration="1000"><b>Temukan barang kebutuhan sehari-hari anda di warma Dengan harga murah ramah di kantong</b></h2>
                <p data-aos="fade-right" data-aos-duration="1500"><b>Dan akan banyak diskon yang akan anda nikmati setiap hari hanya di <span>warma.com</span></b></p>
            </div>
        </div>
    </div>
</section>

<!-- Isi Content WARMA warung ema/ main table-->
<section class="produk">
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
                            <a class="gg"href="php/detail.php?id=<?= $wm['id']?>"<?= $wm["barang"]?>><button>details Produk</button></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </abody>
        </table>
    </div>
</section>
<footer>
    <div class="row">
        <div class="col text-center cn">
            <p><b><span>Warma.com</span> - Copy right 2021 Designed by IkhsanRachmat-203040042</b></p>
        </div>
    </div>
</footer>

    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cari').DataTable();
        } );
    </script>
    <script>
    AOS.init({ once: true, });
    </script>
    <script>
          const sidenav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sidenav);

          const materialbox = document.querySelectorAll('.materialboxed');
          M.Materialbox.init(materialbox);

          const scroll = document.querySelectorAll('.scrollspy');
          M.ScrollSpy.init(scroll,{
              scrollOffset: 50
          });
    </script>
    <script>
        var loading = document.getElementById('loading');
        window.addEventListener('load',function(){
            loading.style.display="none";
        });
    </script>
</body>
</html>