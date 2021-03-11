<?php 
/*
Ikhsan Rachmat Alghifari
203040042
https://github.com/IkhsanRachmat/pw2021_203040042
Pertemuan 4 - 11 maret 2021
Mempelajari tentang Implementasi Function pada php
*/
?>

<?php
    // <<< Pengertian singkat Function >>> 
    // Function adalah Sebuah potongan program atau baris baris code yang kita buat untuk mempermudah kita pada saat memprogram
    // Code program tadi bisa kita kasih nama lalu kita bisa panggil berulang ulang itu kelebihan dari function 

    // ada 2 jenis function dalam php >>>
    // 1 Built-in Function
    // 2 User-Defined Function

    // Built-in Function yaitu fungsi yang di miliki PHP
    // Manual Untuk Cara kerja bisa kunjungi :
    // <<<  http://php.net/manual/en/funcref.php >>>
    
    // Date 
    // untuk menampilkan tanggal dengan format tertentu.
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 january 1970
    
    //Untuk mengecek 100 hari kebelakang dan kedepan >>>
    // echo date("d M Y", time()-60*60*24*100 );

    // mktime
    // membuat sendiri detik
    // mktime (0,0,0,0,0,0)
    // mktime (jam, minit, detik, bulan, tanggal, tahun)
    // echo date("l", mktime(0,0,0,2,23,2002));

    // strtotime
    echo date("l", strtotime("23 feb 2002"));

    // CATATAN : Yang akan/sering di pakai di dalam seri belajar PHP 

    //  << String >>
    //  strlen() : Yaitu untuk menghitung panjang sebuah string line dari sebuah string
    //  strcmp() atau stringcompare() : Yaitu untuk menggabungkan/membandingkan 2 buah string
    //  explode() : Yaitu untuk memecah string menjadi array, yang nanti akan di pakai ketika kita mau mengambil nama sebuah file,
    //              Sehingga kita tau file tersebut extensi apa
    //  htmlspecialchars : pasion khusus untuk menjaga dari hacker

    // << Utility >> Atau fungsi bantuan
    // var_dump() : untuk mencetak isi dari variabel,array,object
    // isset() : untuk mengetahui/mengecek apakah sebuah variabel sudah dibikin atau belum. isset ini akan menghasilkan bulean(true/false)
    // empty() : untuk mengetahui apakah variabel yang ada kosong atau tidak
    // die() : untuk memberhentikan program
    // sleep() : untuk memberhentikan sementara

?>