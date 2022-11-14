-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 10:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heatmap`
--

-- --------------------------------------------------------

--
-- Table structure for table `consuming_cities`
--

CREATE TABLE `consuming_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) NOT NULL,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `electricity` varchar(191) NOT NULL,
  `natural_gas` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consuming_cities`
--

INSERT INTO `consuming_cities` (`id`, `city`, `lng`, `lat`, `electricity`, `natural_gas`) VALUES
(1, 'City 1', 31.564689, -85.259124, '150', '100'),
(2, 'City 2', 33.60575, -86.97465, '250', '145'),
(3, 'City 3', 34.202681, -87.178004, '520', '150.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consuming_cities`
--
ALTER TABLE `consuming_cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consuming_cities`
--
ALTER TABLE `consuming_cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
