<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
// Functions untuk TUBES
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

// Funsi kangge upload foto
function upload() 
{
  $nama_file = $_FILES['fotobarang']['name'];
  $tipe_file = $_FILES['fotobarang']['type'];
  $ukuran_file = $_FILES['fotobarang']['size'];
  $error = $_FILES['fotobarang']['error'];
  $tmp_file = $_FILES['fotobarang']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if($error == 4) {
    // echo "<script>
    //         alert('pilih gambar terlebih dahulu!');
    //       </script>";
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5Mb == 5000000
  if ($ukuran_file > 5000000) {
     echo "<script>
            alert('ukuran terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;

  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}


//fungsi kangge menambihkan data didalam database
function tambah($data)
{
    $conn = koneksi();
    
    $barang = htmlspecialchars($data['barang']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);
    $discont = htmlspecialchars($data['discont']);

    // upload gambar
    $fotobarang = upload();
    if(!$fotobarang) {
        return false;
    }

    $query = "INSERT INTO warma
                    VALUES
                    ('', '$barang', '$fotobarang', '$deskripsi', '$stok', '$harga', '$discont')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

//fungsi kangge menghupus data didalam database
function hapus($id) {
    $conn = koneksi();

    // Untuk menghupus foto di dalam folder assets/img
    $wm = query("SELECT * FROM warma WHERE id = $id");
    if ($wm['fotobarang'] != 'nophoto.jpg') {
      unlink('../assets/img/' . $wm['fotobarang']);
    }

  mysqli_query($conn, "DELETE FROM warma WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $barang = htmlspecialchars($data['barang']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);
    $discont = htmlspecialchars($data['discont']);

    $fotobarang = upload();
    if (!$fotobarang) {
      return false;
    }
  
    if ($fotobarang == 'nophoto.jpg') {
      $fotobarang = $gambar_lama;
    }

    $query = "UPDATE warma SET
            barang = '$barang',
            fotobarang = '$fotobarang',
            deskripsi = '$deskripsi',
            stok = '$stok',
            harga = '$harga',
            discont = '$discont'
            WHERE id = '$id'
            ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
   $conn = koneksi();
   $username = strtolower(stripcslashes($data["username"]));
   $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>

