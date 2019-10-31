-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 09:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electric_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `orgName` varchar(255) NOT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `registerAs` varchar(255) NOT NULL,
  `iecode` varchar(300) DEFAULT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `latchOn` varchar(255) NOT NULL,
  `brandName` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `catalouge` varchar(255) DEFAULT NULL,
  `iPartner` enum('0','1') NOT NULL,
  `address` varchar(255) NOT NULL,
  `stateName` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `code`, `fName`, `lName`, `orgName`, `gst`, `registerAs`, `iecode`, `contact`, `email`, `password`, `latchOn`, `brandName`, `logo`, `catalouge`, `iPartner`, `address`, `stateName`, `city`, `country`, `zip`, `create_date`, `update_date`) VALUES
(1, '', 'Mohammed', 'Alvi', 'Alvi General Store', 'fghjkl67890', '1', 'dghjkls', 2147483647, 'naumaanalvi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sdfghjkl', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00'),
(2, '', 'Mohammed', 'Alvi', 'ghjklgggg', '', '4', 'dghjkls', 2147483647, 'naumaan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00'),
(3, '', 'Mohammed', 'Alvi', 'Alvi General Store', '', '2', 'sdlfkmsdfkl', 2147483647, 'naumaalvi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00'),
(4, '', 'Mohammed', 'Alvi', 'Alvi General Store', '', '1', 'sdlfkmsdfkl', 2147483647, 'numaanalvi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00'),
(5, '', 'vishal', 'bansode', 'vishal farm', '', '3', 'fd', 2147483647, 'vis@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'vashi', '1', 'vashi', '1', '944', '2019-10-31', '2019-10-31 00:00:00'),
(6, '', 'Mohammed', 'Alvi', 'ghjklgggg', '', '2', 'dghjkls', 2147483647, 'naumnalvi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00'),
(7, '', 'Mohammed', 'Alvi', 'Alvi General Store', '', '4', 'dghjkls', 2147483647, 'naumaanalvi@l.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00'),
(8, '', 'Mohammed', 'Alvi', 'Alvi General Store', '', '3', 'dghjkls', 2147483647, 'naumaanalvi@gail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, '1', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '1', 'Mumbai', '1', '400043', '2019-10-31', '2019-10-31 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
