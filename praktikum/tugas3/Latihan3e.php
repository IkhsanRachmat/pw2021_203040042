<?php
/*
Nama    : Ikhsan Rachmat Alghifari
Npm/Nrp : 203040042
Shift   : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>
<?php 
$warungma = [
    [
        "barang"=>"Beras",
        "fotobarang"=>"beas1.jpg",
        "deskripsi"=>"Beras harum, pulen, nikmat, no gigih-gigih club",
        "stok"=>"100 kg",
        "harga"=>"10.000/kg",
        "discont"=>"5% apabila beli > 5kg"
    ],
    [
        "barang"=>"Galon Isi Ulang",
        "fotobarang"=>"galon1.jpg",
        "deskripsi"=>"Dari sumber air langsung dari gunung nya",
        "stok"=>"20",
        "harga"=>"5.000/galon",
        "discont"=>"-"
    ],
    [
        "barang"=>"gas 3kg",
        "fotobarang"=>"gas3kgkg.jpg",
        "deskripsi"=>"Gas 3kg ringan di bawa banyak isi nya!",
        "stok"=>"35 tabung",
        "harga"=>"22.000/tabung",
        "discont"=>"Harga Teman Apabila Tetangga"
    ],
    [
        "barang"=>"Teh Gelas",
        "fotobarang"=>"tehgelas1.jpg",
        "deskripsi"=>"Di ambil dari pucuk teh berkualiti !",
        "stok"=>"2 dus",
        "harga"=>"1.000/cup",
        "discont"=>"-"
    ],
    [
        "barang"=>"indomie",
        "fotobarang"=>"indomie1.jpg",
        "deskripsi"=>"Recomend Makanan sejuta UMAT !!",
        "stok"=>"55",
        "harga"=>"3.000/bungkus",
        "discont"=>"10% jika tanggal kolot"
    ],
    [
        "barang"=>"indomie kuah",
        "fotobarang"=>"miekuah1.jpg",
        "deskripsi"=>"Recomend Makanan Para Pencari Berkat !!",
        "stok"=>"30",
        "harga"=>"2.500/bungkus",
        "discont"=>"10% jika tanggal kolot"
    ],
    [
        "barang"=>"Magnum",
        "fotobarang"=>"magnum1.jpg",
        "deskripsi"=>"Recomend Kangge rokok akhir bulan ! (18+)",
        "stok"=>"20",
        "harga"=>"18.000/bungkus 1.500/batang",
        "discont"=>"-"
    ],
    [
        "barang"=>"Jarcok",
        "fotobarang"=>"jarcok1.jpg",
        "deskripsi"=>"Recomend Kangge abah-abah (18+)",
        "stok"=>"20",
        "harga"=>"18.000/bungkus 1.500/batang",
        "discont"=>"-"
    ],
    [
        "barang"=>"Signature",
        "fotobarang"=>"signature1.jpg",
        "deskripsi"=>"Recomend rokok senja (18+)",
        "stok"=>"10",
        "harga"=>"19.000/bungkus 1.500/batang",
        "discont"=>"-"
    ],
    [
        "barang"=>"Kopi Kapal Hideung",
        "fotobarang"=>"kopi1.jpg",
        "deskripsi"=>"Recomend minuman haneut,peneman rokok ",
        "stok"=>"20",
        "harga"=>"1.500/bungkus",
        "discont"=>"-"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
   .header{
       text-align: center;
       background-color:aqua;
       padding: 10px;
       border: 2px solid;
   }
   .header h1{
       
   }
</style>
<div class="header">
    <h1><b><<< Selamat Datang Di Warma >>></b></h1>
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
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Discont</th>
                </tr>
            </thead>
            <abody>
                <?php foreach($warungma as $warung => $juanleun) : ?>
                    <tr>
                    <td><?= $warung+1; ?></td>
                        <td><?= $juanleun["barang"]; ?></td>
                        <td>
                            <figure class="image is-120x120">
                                <img src="img/<?= $juanleun["fotobarang"]; ?>" alt="">
                            </figure>
                        </td>
                        <td><?= $juanleun["deskripsi"]; ?></td>
                        <td><?= $juanleun["stok"]; ?></td>
                        <td><?= $juanleun["harga"]; ?></td>
                        <td><?= $juanleun["discont"]; ?></td>
                    </tr>
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