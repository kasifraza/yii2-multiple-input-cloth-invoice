-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2023 at 11:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `customer_name`, `customer_address`) VALUES
(1, 'Kasif', 'Noida'),
(2, 'Kasif', 'Noida'),
(3, 'Kasif', 'Noida'),
(4, 'Kasif', 'Noida'),
(5, 'Kasif', 'Noida'),
(6, 'Kasif', 'Noida'),
(7, 'Kasif', 'Noida'),
(8, 'Kasif', 'Noida'),
(9, 'Kasif', 'Noida'),
(10, 'Kasif', 'Noida'),
(11, 'Kasif', 'Noida'),
(12, 'Kasif', 'Noida'),
(13, 'Kasif', 'Noida'),
(14, 'Kasif', 'Noida'),
(15, 'Kasif', 'Noida'),
(16, 'Kasif', 'Noida'),
(17, 'Kasif', 'Noida'),
(18, 'Kasif', 'Noida'),
(19, 'Kasif', 'Noida'),
(20, 'Kasif', 'Noida'),
(21, 'Kasif', 'Noida'),
(22, 'Kasif', 'Noida'),
(23, 'Kasif', 'Noida'),
(24, 'Kasif', 'Noida'),
(25, 'Kasif', 'Noida'),
(26, 'Kasif', 'Noida'),
(27, 'Kasif', 'Noida'),
(28, 'Kasif', 'Noida'),
(29, 'Kasif', 'Noida'),
(30, 'Kasif', 'Noida'),
(31, 'Kasif', 'Noida'),
(32, 'Kasif', 'Noida'),
(33, 'Kasif', 'Noida'),
(34, 'Kasif', 'Noida'),
(35, 'Kasif', 'Noida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
