-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 08:27 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040042`
--

-- --------------------------------------------------------

--
-- Table structure for table `warma`
--

CREATE TABLE `warma` (
  `id` int(11) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `fotobarang` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `discont` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warma`
--

INSERT INTO `warma` (`id`, `barang`, `fotobarang`, `deskripsi`, `stok`, `harga`, `discont`) VALUES
(1, 'Beras Merek Gurih', 'beras.jpg', 'Beras enak,puleun, no gigih-gigih club', '100 kg', '11.000/kg', '10% Asal Beli > 5kg'),
(2, 'Galon Isi Ulang', 'galon.jpg', 'Di ambil dari sumber air langsung dari gunung nya! Seger!', '30 Galon', '5.000/galon', '-'),
(3, 'Gas 3Kg', 'gas.jpg', 'Kecil Ringan Banyak isi nya!', '35 Tabung', '22.000/tabung gas', '-'),
(4, 'Indomie Goreng', 'indomie.jpg', 'Recomend Makanan Sejuta Umat! Dengan nikmatnya keriuk di dalam nya.', '45', '3.000/perbungkus', '10% Saat Akhir bulan'),
(5, 'Indomie Kuah', 'miekuah.jpg', 'Recomend Makanan Para Pencari berkat', '45', '2.500/perbungku', '10% Saat Akhir bulan'),
(6, 'Teh Gelas', 'teh.jpg', 'Diambil dari pucuk pilihan sejuta umat, SEGERR!!', '2 Dus', '1.000/cup', '-'),
(7, 'Magnum', 'magnum.jpg', 'Recomend Rokok Sejuta Umat! Pada Akhir bulan (18+)', '20 pak', '1.500/batang 18.000/perbungkus', '-'),
(8, 'Jarum Coklat', 'jarcok.jpg', 'Recomend Rokok para abah-abah dengan bako cengkeh pilihan (18+)', '20 pak', '1.500/batang 17.000/perbungkus', '-'),
(9, 'Signature', 'signature.jpg', 'Recomend Rokok para senja (18+)', '20 pak', '1.500/batang 19.000/perbungkus', '-'),
(10, 'Kopi Kapal HIDEUNG', 'kopi.jpg', 'Dengan kopi hitam HANEUT, peneman rokok pada malam hari', '20', '1.500/bungkus', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warma`
--
ALTER TABLE `warma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warma`
--
ALTER TABLE `warma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
