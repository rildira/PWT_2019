-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 07:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwt_2k19`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta_semnas`
--

CREATE TABLE `peserta_semnas` (
  `id_pendaftaran` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `identitas` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `status` enum('Registrasi','Terbayar','Selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_semnas`
--

INSERT INTO `peserta_semnas` (`id_pendaftaran`, `nama`, `mail`, `identitas`, `no_identitas`, `jenis_kelamin`, `asal`, `pendidikan`, `nama_instansi`, `qrcode`, `status`) VALUES
('A-2064', 'Ilham Sayekti', 'rdr1369@gmail.com', 'KTP', '08728123', 'Laki - laki', 'Semarang', 'Pelajar', 'POLINES', 'A-2064.png', 'Registrasi'),
('A-3172', 'Absky Permana', 'rdr1369@gmail.com', 'KTP', '08728123', 'Laki - laki', 'Semarang', 'Pelajar', 'POLINES', 'A-3172.png', 'Registrasi'),
('A-3207', 'Richi Ilham', 'rdr1369@gmail.com', 'KTP', '08728123', 'Laki - laki', 'Semarang', 'Pelajar', 'POLINES', 'A-3207.png', 'Registrasi'),
('A-4098', 'Hariadi', 'rdr1369@gmail.com', 'KTP', '08728123', 'Laki - laki', 'Semarang', 'Pelajar', 'POLINES', 'A-4098.png', 'Registrasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta_semnas`
--
ALTER TABLE `peserta_semnas`
  ADD PRIMARY KEY (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
