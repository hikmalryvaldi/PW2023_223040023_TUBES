-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 02:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int UNSIGNED NOT NULL,
  `harga_awal` int DEFAULT NULL,
  `stok` int NOT NULL DEFAULT '0',
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `harga`, `harga_awal`, `stok`, `gambar`) VALUES
(26, 'Obat Asam Urat', 800000, 850000, 98, '647d8a815af80.jpg'),
(27, 'Obat Gagal Ginjal', 800000, 900000, 999, '647d8f2eea76f.jpg'),
(28, 'Obat Batu Ginjal', 600, 420, 23, '647dab5721d17.jpg'),
(29, 'Obat Sidaguri', 655000, 700000, 21, '647dab6e079f4.jpg'),
(30, 'Obat Syaraf Kejepit', 900000, 700000, 234, '647dab8336fe7.jpg'),
(31, 'Panadol', 250000, 10000, 99, '647daba0ce0b5.jpg'),
(32, 'Bodrex', 300000, 25000, 45, '647dabd5e1902.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(17, 'hikmal', '$2y$10$Wkxq5hQDBCxyMD31bckKTeOASXvxd.tudgujEzGs8td9TJvLH83eW', 'hikmal@gmail.com', 'user'),
(18, 'admin', '$2y$10$mI0GUFfs40m8c7DtfK2oxucZ6CGSdQCAwYyB95kcRwp21c5C75db6', 'admin@gmail.com', 'admin'),
(19, 'ojan', '$2y$10$AkC38g1sQlgPTqmny6HYweg08gYKSOBu3jiGsNycULBsEcyK02R5W', 'ojan@wibu.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
