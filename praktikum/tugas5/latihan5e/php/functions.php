<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
?>

<?php
//function melakukan connect ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040042");
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040042");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $warma = [];
    while ($wm = mysqli_fetch_assoc($result)) {
        $warma[] = $wm;
    }
    return $warma;
}

//fungsi kangge menambihkan data didalam database
function tambah($data)
{
    $conn = koneksi();
    
    $barang = htmlspecialchars($data['barang']);
    $fotobarang = htmlspecialchars($data['fotobarang']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);
    $discont = htmlspecialchars($data['discont']);

    $query = "INSERT INTO warma
                    VALUES
                    ('', '$barang', '$fotobarang', '$deskripsi', '$stok', '$harga', '$discont')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi kangge menghupus data didalam database
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM warma WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $barang = htmlspecialchars($data['barang']);
    $fotobarang = htmlspecialchars($data['fotobarang']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);
    $discont = htmlspecialchars($data['discont']);

    $query = "UPDATE warma SET
            barang = '$barang',
            fotobarang = '$fotobarang',
            deskripsi = '$deskripsi',
            stok = '$stok',
            harga = '$harga',
            discont = '$discont'
            WHERE id = '$id'
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>

