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
-- Table structure for table `t_marmutben_products`
--

CREATE TABLE `t_marmutben_products` (
  `id` int NOT NULL,
  `jenis_marmut` varchar(255) NOT NULL,
  `image_marmut` varchar(100) NOT NULL,
  `categories_marmut` int NOT NULL,
  `description` text NOT NULL,
  `harga` int NOT NULL,
  `date_created` datetime NOT NULL,
  `timestamp` timestamp NOT NULL
);

--
-- Dumping data for table `t_marmutben_products`
--

INSERT INTO `t_marmutben_products` (`id`, `jenis_marmut`, `image_marmut`, `categories_marmut`, `description`, `harga`, `date_created`, `timestamp`) VALUES
(1, 'Marmut Coronet', 'images/marmut-1-edited.jpg', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 100000, '2023-08-23 07:06:22', '2023-08-23 07:07:22'),
(2, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 150000, '2023-08-23 07:08:57', '2023-08-23 07:09:47'),
(3, 'Marmut Silky', 'images/marmut-3-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 120000, '2023-08-23 07:09:50', '2023-08-23 07:10:13'),
(5, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 150000, '2023-08-23 07:06:22', '2023-08-23 00:06:22'),
(6, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 150001, '2023-08-23 07:06:22', '2023-08-23 00:06:22'),
(7, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 150002, '2023-08-23 07:06:22', '2023-08-23 00:06:22'),
(8, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 150003, '2023-08-23 07:06:22', '2023-08-23 00:06:22'),
(9, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 150004, '2023-08-23 07:06:22', '2023-08-23 00:06:22'),
(10, 'Marmut Sheba', 'images/marmut-2-edited.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 150005, '2023-08-23 07:06:22', '2023-08-23 00:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_marmutben_products`
--
ALTER TABLE `t_marmutben_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_marmutben_products`
--
ALTER TABLE `t_marmutben_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
