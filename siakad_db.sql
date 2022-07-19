-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 09:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id_mhs` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `nim` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_mhs` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prodi` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jk_mhs` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agama_mhs` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `nim`, `nama_mhs`, `prodi`, `jk_mhs`, `agama_mhs`) VALUES
('87c04a80-f6ae-11ec-bb8c-1cb72c38418a', '123456712', 'BUDIONO', 'PTI', 'Perempuan', 'Katolik'),
('a342c61e-f6aa-11ec-bb8c-1cb72c38418a', '123110016', 'Galih Bayu', 'PTI', 'Laki-Laki', 'Hindu'),
('ca2e5021-0725-11ed-8315-1cb72c38418a', '6283242394', 'Galih Bayu', 'PTI', 'Laki-Laki', 'Kristen'),
('ded4c7ca-01ac-11ed-9d13-1cb72c38418a', '123110022', 'NOE ADITYA', 'PTI', 'Perempuan', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
