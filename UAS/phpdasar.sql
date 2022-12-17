-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Hari Matahari', '2110803022', 'hrimthari18@gmail.com', 'Sistem Informasi', 'hari.jpg'),
(3, 'Deri Armando', '2110803006', 'armandoderi22@gmail.com', 'Hukum', 'deri.jpg'),
(4, 'Desi', '2110803020', 'desimayang12@gmail.com', 'kedokteran', 'desi.jpg'),
(5, 'Adi Saputra', '2110803050', 'adi@gmail.com', 'Ilmu Komunikasi', 'adi.jpg'),
(6, 'Tanzilal', '2110803602', 'tanzilal@gmail.com', 'Komunikasi Penyiaran Islam', 'tanzilal.jpg'),
(7, 'Angga Pati', '2130892910', 'angga@gmail.com', 'Pendidikan Kimia', 'angga.jpg'),
(8, 'Yasir Ali', '2110803040', 'yasir18@gmail.com', 'Ilmu Alqur\'an', 'yasir.jpg'),
(9, 'Rindi Antika', '2130608090', 'rindi12@gmail.com', 'Perawat', 'rindi.jpg'),
(10, 'shinta Maria', '2110803060', 'shinta@gmail.com', 'Farmasi', 'shinta.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
