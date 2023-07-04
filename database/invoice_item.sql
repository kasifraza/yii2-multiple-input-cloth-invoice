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
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `cloth` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `variety` varchar(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`id`, `invoice_id`, `cloth`, `size`, `variety`, `uniqid`) VALUES
(5, 31, 'Ahsan Ahmed', '1', '1', '64a3dd3a8a97d'),
(6, 31, 'hjghgjk', '1', '1', '64a3dd3a8a97d'),
(7, 31, '666666', '1', '1', '64a3dd3a8a97d'),
(8, 31, 'pppp', '1', '1', '64a3dd3a8a97d'),
(9, 32, 'Ahsan Ahmed', '1', '1', '64a3dd5a89696'),
(10, 32, 'Hijab', 'XL', 'WOmen', '64a3dd5a89696'),
(11, 33, 'PLAZO', '1', '1', '64a3dd895cd0f'),
(12, 33, 'HIJAB', 'XLLL', 'OOOOO', '64a3dd895cd0f'),
(13, 34, 'Hijab', 'small', 'sex', '64a3dfebe1802'),
(14, 34, 'burkakajd', '', 'djfjk', '64a3dfebe1802'),
(15, 35, 'Bra', 'Large', 'Sex Material', '64a3e15312a72'),
(16, 35, 'Panty', 'Extra Large', 'Virginity Handler', '64a3e15312a72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD CONSTRAINT `invoice_item_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
