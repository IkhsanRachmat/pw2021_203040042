<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php 
$warungma = [
    [
        "barang"=>"Beras Merek Gurih",
        "fotobarang"=>"beras.jpg",
        "deskripsi"=>"Beras enak,puleun, no gigih-gigih club",
        "stok"=>"100 kg",
        "harga"=>"11.000/kg",
        "discont"=>"10% Asal Beli > 5kg "
    ],
    [
        "barang"=>"Galon Isi Ulang",
        "fotobarang"=>"galon.jpg",
        "deskripsi"=>"Di ambil dari sumber air langsung dari gunung nya! Seger!",
        "stok"=>"30 Galon",
        "harga"=>"5.000/galon",
        "discont"=>"-"
    ],
    [
        "barang"=>"Gas 3Kg",
        "fotobarang"=>"gas.jpg",
        "deskripsi"=>"Kecil Ringan Banyak isi nya!",
        "stok"=>"35 Tabug",
        "harga"=>"22.000/tabung gas",
        "discont"=>"-"
    ],
    [
        "barang"=>"Indomie Goreng",
        "fotobarang"=>"indomie.jpg",
        "deskripsi"=>"Recomend Makanan Sejuta Umat! Dengan nikmatnya keriuk di dalam nya.",
        "stok"=>"45",
        "harga"=>"3.000/perbungkus",
        "discont"=>"10% Saat Akhir bulan"
    ],
    [
        "barang"=>"Indomie Kuah",
        "fotobarang"=>"miekuah.jpg",
        "deskripsi"=>"Recomend Makanan Para Pencari berkat",
        "stok"=>"45",
        "harga"=>"2.500/perbungkus",
        "discont"=>"10% Saat Akhir bulan"
    ],
    [
        "barang"=>"Teh Gelas",
        "fotobarang"=>"teh.jpg",
        "deskripsi"=>"Diambil dari pucuk pilihan sejuta umat, SEGERR!!",
        "stok"=>"2 Dus",
        "harga"=>"1.000/cup",
        "discont"=>"-"
    ],
    [
        "barang"=>"Magnum",
        "fotobarang"=>"magnum.jpg",
        "deskripsi"=>"Recomend Rokok Sejuta Umat! Pada Akhir bulan (18+)",
        "stok"=>"20 pak",
        "harga"=>"1.500/batang 18.000/perbungkus",
        "discont"=>"-"
    ],
    [
        "barang"=>"Jarum Coklat",
        "fotobarang"=>"jarcok.jpg",
        "deskripsi"=>"Recomend Rokok para abah-abah dengan bako cengkeh pilihan (18+)",
        "stok"=>"20 pak",
        "harga"=>"1.500/batang 17.000/perbungkus",
        "discont"=>"-"
    ],
    [
        "barang"=>"Signature",
        "fotobarang"=>"signature.jpg",
        "deskripsi"=>"Recomend Rokok para senja (18+)",
        "stok"=>"20 pak",
        "harga"=>"1.500/batang 19.000/perbungkus",
        "discont"=>"-"
    ],
    [
        "barang"=>"Kopi Kapal HIDEUNG",
        "fotobarang"=>"kopi.jpg",
        "deskripsi"=>"Dengan kopi hitam HANEUT, peneman rokok pada malam hari",
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
                <?php foreach($warungma as $warma => $jualeun) : ?>
                    <tr>
                        <td><?= $warma+1; ?></td>
                        <td><?= $jualeun["barang"]; ?></td>
                        <td>
                            <figure class="image is-120x120">
                                <img src="img/<?= $jualeun["fotobarang"]; ?>" alt="">
                            </figure>
                        </td>
                        <td><?= $jualeun["deskripsi"]; ?></td>
                        <td><?= $jualeun["stok"]; ?></td>
                        <td><?= $jualeun["harga"]; ?></td>
                        <td><?= $jualeun["discont"]; ?></td>
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