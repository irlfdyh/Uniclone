-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2023 at 08:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniclone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `harga` int(8) NOT NULL,
  `stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `id_penerbit`, `kategori`, `nama`, `harga`, `stok`) VALUES
(1, 1, 'Fiksi', 'Kota Terlarang', 50000, 30),
(2, 2, 'Sains', 'Petualangan Ke Mars', 75000, 20),
(3, 3, 'Misteri', 'Rahasia Pulau Tersembunyi', 60000, 25),
(4, 4, 'Romansa', 'Cinta di Bawah Bintang', 45000, 35),
(5, 5, 'Fantasi', 'Dunia Ajaib', 80000, 15),
(6, 1, 'Petualangan', 'Jelajah Hutan Belantara', 70000, 18),
(7, 2, 'Sejarah', 'Prahara Perang Dunia', 55000, 28),
(8, 3, 'Biografi', 'Kisah Inspiratif', 40000, 40),
(9, 4, 'Kesehatan', 'Menu Sehat Sehari-hari', 85000, 12),
(10, 5, 'Seni', 'Menggambar Tanpa Batas', 65000, 22);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `telepon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `nama`, `alamat`, `kota`, `telepon`) VALUES
(1, 'Penerbit Buku Jaya', 'Jl. Merdeka No. 123', 'Jakarta Pusat', '021-1234-5678'),
(2, 'Majalah Terbit Bersama', 'Jl. Ahmad Yani No. 456', 'Bandung', '022-9876-5432'),
(3, 'Pustaka Nusantara', 'Jl. Sudirman No. 789', 'Surabaya', '031-1111-2222'),
(4, 'Media Cerdas Sejahtera', 'Jl. Gajah Mada No. 321', 'Yogyakarta', '0274-4444-5555'),
(5, 'Penerbit Harapan Baru', 'Jl. Diponegoro No. 555', 'Semarang', '024-7777-8888');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
