-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2023 at 09:12 AM
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
-- Database: `marmutben`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_marmutben_promo`
--

CREATE TABLE `t_marmutben_promo` (
  `id` int NOT NULL,
  `nama_promo` varchar(255) NOT NULL,
  `image_promo` varchar(255) NOT NULL,
  `kode_promo` varchar(255) NOT NULL,
  `jumlah_promo` int NOT NULL,
  `caption_promo` text NOT NULL,
  `start_at` datetime NOT NULL,
  `expired_at` datetime NOT NULL,
  `status` int NOT NULL COMMENT '0.Inactive, 1.Active',
  `created_at` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL
) ;

--
-- Dumping data for table `t_marmutben_promo`
--

INSERT INTO `t_marmutben_promo` (`id`, `nama_promo`, `image_promo`, `kode_promo`, `jumlah_promo`, `caption_promo`, `start_at`, `expired_at`, `status`, `created_at`, `timestamp`) VALUES
(1, 'Promo Eksklusif 8.8: Raih Cashback hingga 22k!', 'images/promo-1.jpg', 'J5hR9E', 22000, 'Jangan lewatkan kesempatan emas dengan Promo Eksklusif 8.8! Dapatkan keuntungan maksimal                            dengan Cashback hingga 22k yang siap menambahkan nilai lebih pada setiap pembelanjaan Anda.', '2023-08-08 14:39:21', '2023-08-31 14:39:21', 1, '2023-08-08 14:39:21', '2023-08-23 07:40:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_marmutben_promo`
--
ALTER TABLE `t_marmutben_promo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_marmutben_promo`
--
ALTER TABLE `t_marmutben_promo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
