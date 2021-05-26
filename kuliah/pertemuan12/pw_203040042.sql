-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 07:35 AM
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
-- Database: `pw_203040042`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Ikhsan Rachmat Alghifari', 203040042, '23ikhsanrachmat@gmail.com', 'Teknik Informatika', 'ikhsan.jpg'),
(2, 'Bang Angga', 2030400111, 'anggaiskandar@gmaail.com', 'Teknik Informatika', 'bangnga.jpg'),
(3, 'bang indra', 2030400222, 'indrasetia@gmail.com', 'Teknik Informatika', 'bangndra.jpg'),
(4, 'Ujang Bedog', 2030400666, 'bedogujang@gmail.com', 'Teknik Kulibangun', 'ujangbedog.jpg'),
(8, 'Mamat PortaLL', 2030400666, '2030400444', 'Teknik Keamanan', 'mamatportal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$tWc4M6kO9Nh0D7EMTPBvAuucrcMgfPCGgX5nTswLp4tUSZO9i7yHy'),
(4, 'jangikhsan', '$2y$10$krCwil2palgWmeujLrvXe.rLePH1G0G8WUKFlvO8LCJLe5E2l2/W2'),
(5, 'ikhsan', '$2y$10$RBiUjLNHlMEl1DQYx0NNoeCx5Pv04/IeN9HqLx5nB628.CTwmPHY6'),
(6, 'admin', '$2y$10$03d7Cyg5OUtKk7SIiQQKJe5xR/r35NlZgmtx/4KxxFp0it9zus8Vq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
