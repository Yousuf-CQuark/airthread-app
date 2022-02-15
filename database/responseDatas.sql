-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2022 at 11:39 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airthreadapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `responsedatas`
--

CREATE TABLE `responsedatas` (
  `shirtInp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heightInp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferedInp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chestInp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waistInp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sleeveInp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_shoulder` int(11) NOT NULL,
  `api_chest_width` int(11) NOT NULL,
  `api_waist_width` int(11) NOT NULL,
  `api_back_length` int(11) NOT NULL,
  `api_sleeve_length` int(11) NOT NULL,
  `api_sleeve_width` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responsedatas`
--
ALTER TABLE `responsedatas`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responsedatas`
--
ALTER TABLE `responsedatas`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
