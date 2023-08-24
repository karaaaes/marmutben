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
-- Table structure for table `t_marmutben_ongkir`
--

CREATE TABLE `t_marmutben_ongkir` (
  `id` int NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `wilayah_kecil` varchar(255) NOT NULL,
  `ongkir_cod` varchar(255) NOT NULL,
  `ongkir_ojol` varchar(255) NOT NULL,
  `ongkir_ka_logistik` varchar(255) NOT NULL
);

--
-- Dumping data for table `t_marmutben_ongkir`
--

INSERT INTO `t_marmutben_ongkir` (`id`, `wilayah`, `wilayah_kecil`, `ongkir_cod`, `ongkir_ojol`, `ongkir_ka_logistik`) VALUES
(1, 'Bekasi', 'Mangunjaya', 'Free ongkir', 'Rp10.000', 'Tidak terjangkau'),
(2, 'Bekasi', 'Karang satria', 'Free ongkir', 'Rp10.000', 'Tidak terjangkau'),
(3, 'Bekasi', 'Cikarang', 'Free ongkir', 'Rp20.000', 'Tidak terjangkau'),
(4, 'Bekasi', 'Setu Taman rahayu', 'Rp10.000', 'Rp35.000', 'Tidak terjangkau'),
(5, 'Bekasi', 'Cileungsi', 'Rp10.000', 'Rp40.000', 'Tidak terjangkau'),
(6, 'Bekasi', 'Alamanda', 'Free ongkir', 'Rp10.000', 'Tidak terjangkau'),
(7, 'Bekasi', 'Perumnas 3', 'Free ongkir', 'Rp15.000', 'Tidak terjangkau'),
(8, 'Bekasi', 'Agus salim', 'Rp10.000', 'Rp15.000', 'Tidak terjangkau'),
(9, 'Bekasi', 'Summarecon Bekasi', 'Rp10.000', 'Rp15.000', 'Tidak terjangkau'),
(10, 'Bekasi', 'Harapan indah', 'Rp15.000', 'Rp30.000', 'Tidak terjangkau'),
(11, 'Bekasi', 'Tridaya sakti', 'Free ongkir', 'Rp10.000', 'Tidak terjangkau'),
(12, 'Bekasi', 'Cibitung', 'Rp10.000', 'Rp20.000', 'Tidak terjangkau'),
(13, 'Bekasi', 'Wanasari', 'Rp10.000', 'Rp20.000', 'Tidak terjangkau'),
(14, 'Bekasi', 'Babelan', 'Tidak terjangkau', 'Rp50.000', 'Tidak terjangkau'),
(15, 'Bekasi', 'Kranji', 'Rp15.000', 'Rp35.000', 'Tidak terjangkau'),
(16, 'Bekasi', 'cabangbungin', 'Tidak terjangkau', 'Rp50.000', 'Tidak terjangkau'),
(17, 'Bekasi', 'Sukawangi', 'Tidak terjangkau', 'Rp50.000', 'Tidak terjangkau'),
(18, 'Bekasi', 'Tambelang', 'Tidak terjangkau', 'Rp50.000', 'Tidak terjangkau'),
(19, 'Bekasi', 'Tarumajaya', 'Tidak terjangkau', 'Rp45.000', 'Tidak terjangkau'),
(20, 'Bekasi', 'Sukatani', 'Tidak terjangkau', 'Rp50.000', 'Tidak terjangkau'),
(21, 'Bekasi', 'Satriajaya', 'Rp15.000', 'Rp25.000', 'Tidak terjangkau'),
(22, 'Bekasi', 'Srimukti', 'Tidak terjangkau', 'Rp50.000', 'Tidak terjangkau'),
(23, 'Bekasi', 'Stasiun bekasi', 'Rp20.000', 'Rp30.000', 'Tidak terjangkau'),
(24, 'Jakarta', 'Cakung', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(25, 'Jakarta', 'Jatinegara', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(26, 'Jakarta', 'Karet', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(27, 'Jakarta', 'Senayan', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(28, 'Jakarta', 'Tanah abang', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(29, 'Jakarta', 'Kemayoran', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(30, 'Jakarta', 'Tanjung Priuk', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(31, 'Jakarta', 'Pasar senen', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(32, 'Jakarta', 'Kramat', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(33, 'Jakarta', 'Mangga dua', 'Rp30.000', 'Rp50.000', 'Tidak terjangkau'),
(34, 'Jakarta', 'blok M', 'Rp30.000', 'Rp50.000', 'Tidak terjangkau'),
(35, 'Jakarta', 'pasar minggu', 'Rp30.000', 'Rp50.000', 'Tidak terjangkau'),
(36, 'Jakarta', 'Monas', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(37, 'Jakarta', 'Gambir', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(38, 'Jakarta', 'Juanda', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(39, 'Jakarta', 'Sudirman', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(40, 'Jakarta', 'Klender', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(41, 'Jakarta', 'Buaran', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(42, 'Jakarta', 'Manggarai', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(43, 'Jakarta', 'Jakarta kota', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(44, 'Jakarta', 'Jayakarta', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(45, 'Jakarta', 'Cempaka putih', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(46, 'Jakarta', 'Duren sawit', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(47, 'Jakarta', 'Jagakarsa', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(48, 'Jakarta', 'Kebayoran lama', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(49, 'Jakarta', 'Kebayoran baru', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(50, 'Jakarta', 'Pancoran', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(51, 'Jakarta', 'Setiabudi', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(52, 'Jakarta', 'Tebet', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(53, 'Jakarta', 'Pulo gadung', 'Rp30.000', 'Rp45.000', 'Tidak terjangkau'),
(54, 'Depok', 'Pondok cina', 'Rp35.000', 'Rp50.000', 'Tidak terjangkau'),
(55, 'Depok', 'stasiun Depok baru ', 'Rp35.000', 'Rp50.000', 'Tidak terjangkau'),
(56, 'Depok', 'Margonda', 'Rp35.000', 'Rp50.000', 'Tidak terjangkau'),
(57, 'Depok', 'Cileubeut', 'Rp35.000', 'Rp50.000', 'Tidak terjangkau'),
(58, 'Depok', 'Lenteng agung', 'Rp35.000', 'Rp50.000', 'Tidak terjangkau'),
(59, 'Depok', 'Kalibata', 'Rp35.000', 'Rp50.000', 'Tidak terjangkau'),
(60, 'Bogor', 'Stasiun bogor', 'Rp35.000', 'Rp65.000', 'Tidak terjangkau'),
(61, 'Bogor', 'Dramaga', 'Rp35.000', 'Rp65.000', 'Tidak terjangkau'),
(62, 'Bogor', 'Bojong gede', 'Rp35.000', 'Rp65.000', 'Tidak terjangkau'),
(63, 'Bogor', 'Cibinong', 'Rp35.000', 'Rp65.000', 'Tidak terjangkau'),
(64, 'Tangerang', 'Stasiun tangerang', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(65, 'Tangerang', 'Sudimara', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(66, 'Tangerang', 'Poris', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(67, 'Tangerang', 'Kali deres', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(68, 'Tangerang', 'Bojong indah', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(69, 'Tangerang', 'Grogol', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(70, 'Tangerang', 'Duri', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(71, 'Tangerang', 'Palmerah', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(72, 'Tangerang', 'Kebayoran', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(73, 'Tangerang', 'Pondok ranji', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(74, 'Tangerang', 'Cisauk', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(75, 'Tangerang', 'Daru', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(76, 'Tangerang', 'Tenjo', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(77, 'Tangerang', 'Maja', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(78, 'Tangerang', 'Tiga raksa', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(79, 'Tangerang', 'Rangkasbitung', 'Rp40.000', 'Rp65.000', 'Rp70.000'),
(80, 'Banten', 'Jambubaru', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(81, 'Banten', 'Catang', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(82, 'Banten', 'Cikeusal', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(83, 'Banten', 'Walankata', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(84, 'Banten', 'Serang', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(85, 'Banten', 'Tonjongbaru', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(86, 'Banten', 'Cilegon', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(87, 'Banten', 'Merak', 'Rp50.000', 'Tidak terjangkau', 'Rp85.000'),
(88, 'Karawang', 'Klari', 'Rp50.000', 'Ikut tarif ojol', 'Rp70.000'),
(89, 'Karawang', 'Teluk jambe', 'Rp50.000', 'Ikut tarif ojol', 'Rp70.000'),
(90, 'Karawang', 'Cikampek', 'Rp50.000', 'Ikut tarif ojol', 'Rp70.000'),
(91, 'Karawang', 'Kosambi', 'Rp50.000', 'Ikut tarif ojol', 'Rp70.000'),
(92, 'Karawang', 'Lemah abang', 'Rp50.000', 'Ikut tarif ojol', 'Rp70.000'),
(93, 'Karawang', 'Kedawuan', 'Rp50.000', 'Ikut tarif ojol', 'Rp75.000'),
(94, 'Purwakarta', 'Stasiun Purwakarta', 'Rp50.000', 'Ikut tarif ojol', 'Rp75.000'),
(95, 'Bandung', 'Stasiun Bandung', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(96, 'Bandung', 'Kiaracondong', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(97, 'Leles', 'Leles', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(98, 'Cipeundeuy', 'Cipeundeuy', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(99, 'Tasikmalaya', 'Tasikmalaya', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(100, 'Banjar', 'Banjar', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(101, 'Kroya', 'Stasiun Kroya', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(102, 'Kroya', 'Cilacap', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(103, 'Purwokerto', 'Stasiun purwokerto', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(104, 'Cirebon', 'Cirebon', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(105, 'Jatibarang', 'Jatibarang', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp85.000'),
(106, 'Tegal', 'Tegal', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(107, 'Pekalongan', 'Pekalongan', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(108, 'Pemalang', 'Pemalang', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(109, 'SeMARANG', 'SeMARANG', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(110, 'Gombong', 'Gombong', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(111, 'Kebumen', 'Kebumen', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(112, 'Wates', 'Wates', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(113, 'Yogyakarta', 'Yogyakarta', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(114, 'Solo', 'Solo', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(115, 'Madiun', 'Madiun', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(116, 'Sragen', 'Sragen', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(117, 'Jombang', 'Jombang', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(118, 'Kediri', 'Kediri', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(119, 'Blitar', 'Blitar', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(120, 'Malang', 'Malang', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(121, 'Sidoarjo', 'Sidoarjo', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000'),
(122, 'Jember', 'Jember', 'Tidak terjangkau', 'Tidak terjangkau', 'Rp100.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_marmutben_ongkir`
--
ALTER TABLE `t_marmutben_ongkir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_marmutben_ongkir`
--
ALTER TABLE `t_marmutben_ongkir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
