-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 01:23 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_child`
--

CREATE TABLE `products_child` (
  `child_id` int(11) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_child`
--

INSERT INTO `products_child` (`child_id`, `child_name`, `menu_id`) VALUES
(1, 'Surveillance', 1),
(2, 'Access Control', 1),
(3, 'Biometrics', 1),
(4, 'Barriers', 1),
(5, 'Cables', 1),
(6, 'Accessories', 1),
(7, 'Switches', 2),
(8, 'Support Systems', 3),
(9, 'Consumer', 4),
(10, 'Extinguisers & Equipment', 5),
(11, 'Solar Water Heater', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_child`
--
ALTER TABLE `products_child`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_child`
--
ALTER TABLE `products_child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products_child`
--
ALTER TABLE `products_child`
  ADD CONSTRAINT `products_child_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `products_menu` (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
