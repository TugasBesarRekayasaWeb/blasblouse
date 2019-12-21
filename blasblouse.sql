-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 02:02 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blasblouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll_id` int(11) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `roll_id`, `update_at`, `created_at`) VALUES
(1, 'kresna@gmail.com', '123', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'gresbuster@gmail.com', '123', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(8) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `S` int(5) NOT NULL,
  `M` int(5) NOT NULL,
  `L` int(5) NOT NULL,
  `XL` int(5) NOT NULL,
  `XXL` int(5) NOT NULL,
  `Gambar` varchar(30) NOT NULL,
  `gambarModel` varchar(30) NOT NULL,
  `gambarPosisi` varchar(30) NOT NULL,
  `gambarDetail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `detail`, `S`, `M`, `L`, `XL`, `XXL`, `Gambar`, `gambarModel`, `gambarPosisi`, `gambarDetail`) VALUES
(1, 'Short Polo-Neck Top', 149000, 'Material comes from 100% cotton', 5, 5, 5, 5, 5, 'ShortPoloNeckHitam.jpg', 'ShortPoloNeckHitamModel.jpg', 'ShortPoloNeckHitamPosisi.jpg', 'ShortPoloNeckHitamDetail.jpg'),
(2, 'T-shirt With A Motif', 129000, 'Material comes from 100% cotton', 4, 4, 4, 4, 4, 'TshirtWithAMotif,jpg', 'TshirtWithAMotifModel.jpg', 'TshirtWithAMotifPosisi.jpg', 'TshirtWithAMotifDetail.jpg'),
(3, 'Short T-shirt', 129000, 'Material comes from 100% cotton', 6, 6, 6, 6, 6, 'ShortT-shirt.jpg', 'ShortT-shirtModel.jpg', 'ShortT-shirtPosisi.jpg', 'ShortT-shirtDetail.jpg'),
(4, 'Flock-print T-shirt', 149000, 'Material comes from 100% cotton, Flock printed', 7, 7, 7, 7, 7, 'Flock-printT-shirt.jpg', 'Flock-printT-shirtModel.jpg', 'Flock-printT-shirtPosisi.jpg', 'Flock-printT-shirtDetail.jpg'),
(5, 'Jersey T-shirt', 69000, 'Material Jersey', 2, 2, 2, 2, 2, 'JerseyT-shirt.jpg', 'JerseyT-shirtModel.jpg', 'JerseyT-shirtPosisi.jpg', 'JerseyT-shirtDetail.jpg'),
(6, 'Nasa Short T-shirt', 129000, 'Material comes from 100% cotton', 6, 7, 7, 7, 8, 'NasaShortT-shirt.jpg', 'NasaShortT-shirtModel.jpg', 'NasaShortT-shirtPosisi.jpg', 'NasaShortT-shirtDetail,jpg'),
(7, 'Linen T-shirt', 179000, 'Material comes from Premium Linen Quality', 8, 8, 8, 9, 9, 'LinenT-shirt.jpg', 'LinenT-shirtModel.jpg', 'LinenT-shirtPosisi.jpg', 'LinenT-shirtDetail.jpg'),
(8, 'V-neck T-shirt', 69000, 'Material comes from 100% cotton', 5, 5, 5, 5, 5, 'V-neckT-shirt.jpg', 'V-neckT-shirtModel.jpg', 'V-neckT-shirtPosisi.jpg', 'V-neckT-shirtDetail.jpg'),
(9, 'Viscose Tshirt', 149000, 'Viscose Material ', 5, 5, 4, 4, 3, 'ViscoseT-shirt.jpg', 'ViscoseT-shirtModel.jpg', 'ViscoseT-shirtPosisi.jpg', 'ViscoseT-shirtDetail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kresna', 'kresna@gmail.com', NULL, '$2y$10$4RuKkcgVsG6K5tBNw7Da6.KC4PZGUJINnRGjQtoFg3QLfbYWp75gK', '6Nois7A4eOVq0QsA5sDHINH0l5zzl4vcvNMGpsIx9OBsQTuO3pnBmDzt3p4l', '2019-12-16 12:15:26', '2019-12-16 12:15:26'),
(3, 'budi', 'budisetiawan@gmail.com', NULL, '$2y$10$j5bv4XSB8yv5.KGxzR8leeGJYJJ.bm./vnDDDWXS1C9FiaMSPzTyK', NULL, '2019-12-17 23:35:16', '2019-12-17 23:35:16'),
(4, 'budi', 'busi@gmail.com', NULL, '$2y$10$6qbuKV1fKWvbt6Dq/fKoFeSI6x0Iun3cQkCLNtdsP2mACBtA14vy2', NULL, '2019-12-17 23:36:33', '2019-12-17 23:36:33'),
(5, 'kresna', 'gresbuster@gmail.com', NULL, '$2y$10$eO8GN6C3UGk4zmplqvbDjeipkBYecPH15kMKh3KYZe/xTlxRPL75m', NULL, '2019-12-17 23:49:55', '2019-12-17 23:49:55'),
(6, 'mariska', 'mariska_adinda_sa@uum.edu.my', NULL, '$2y$10$uAHWH6vEZf04KyIoY.LOGOGnEyK2nlEi/2Z/xzbYpzVmUmf5C2sCy', NULL, '2019-12-20 14:42:28', '2019-12-20 14:42:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
