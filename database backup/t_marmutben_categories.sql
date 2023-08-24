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
-- Table structure for table `t_marmutben_categories`
--

CREATE TABLE `t_marmutben_categories` (
  `id` int NOT NULL,
  `categories` varchar(100) NOT NULL,
  `status` int NOT NULL COMMENT '0. inactive, 1. active',
  `timestamp` timestamp NOT NULL
);

--
-- Dumping data for table `t_marmutben_categories`
--

INSERT INTO `t_marmutben_categories` (`id`, `categories`, `status`, `timestamp`) VALUES
(1, 'Anakan', 1, '2023-08-23 04:54:06'),
(2, 'Remaja', 1, '2023-08-23 04:54:06'),
(3, 'Indukan', 1, '2023-08-23 04:56:31'),
(4, 'Bunting', 1, '2023-08-23 04:56:31'),
(5, 'Indukan Hias', 1, '2023-08-23 04:56:31'),
(6, 'Buntingan Hias', 1, '2023-08-23 04:56:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_marmutben_categories`
--
ALTER TABLE `t_marmutben_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_marmutben_categories`
--
ALTER TABLE `t_marmutben_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
