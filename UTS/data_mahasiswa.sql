-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 06:47 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `jurusan`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('16090078', 'Iftahlana Nur Latifah', 'D4 Teknik Informatika'),
('16090063', 'Siti Maeturoh', 'D4 Teknik Informatika'),
('16090024', 'Sri Sugihartika', 'D4 Teknik Informatika'),
('16090119', 'Rita Masfufah', 'D4 Teknik Informatika'),
('16090100', 'Resti Cahya Mulyaningroom', 'D4 Teknik Informatika'),
('16090096', 'Sunita Rani', 'D4 Teknik Informatika'),
('16090065', 'Intan Dwi Oktavia', 'D4 Teknik Informatika'),
('16090061', 'Kusnanik Mufida', 'D4 Teknik Informatika'),
('16090040', 'Tri Intan Permatasari ', 'D4 Teknik Informatika'),
('16090068', 'Nur Halimatussaâ€™diyah ', 'D4 Teknik Informatika'),
('16090052', 'Fauziah Nur Rahmawati ', 'D4 Teknik Informatika');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
