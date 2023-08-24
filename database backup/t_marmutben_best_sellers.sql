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
-- Table structure for table `t_marmutben_best_sellers`
--

CREATE TABLE `t_marmutben_best_sellers` (
  `id` int NOT NULL,
  `marmut_id` int NOT NULL,
  `jumlah_terjual` int NOT NULL,
  `timestamp` timestamp NOT NULL
);

--
-- Dumping data for table `t_marmutben_best_sellers`
--

INSERT INTO `t_marmutben_best_sellers` (`id`, `marmut_id`, `jumlah_terjual`, `timestamp`) VALUES
(1, 1, 7, '2023-08-23 07:16:23'),
(2, 2, 9, '2023-08-23 07:16:23'),
(3, 3, 4, '2023-08-23 07:16:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_marmutben_best_sellers`
--
ALTER TABLE `t_marmutben_best_sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_marmutben_best_sellers`
--
ALTER TABLE `t_marmutben_best_sellers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
