-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 05:11 PM
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
-- Database: `electric_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_credential`
--

CREATE TABLE `user_credential` (
  `user_id` int(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `orgName` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `resgisterAs` varchar(255) NOT NULL,
  `code` varchar(300) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp(),
  `imageFile` varchar(255) NOT NULL,
  `latchOn` varchar(255) NOT NULL,
  `iPartner` tinyint(1) NOT NULL,
  `catalouge` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_credential`
--

INSERT INTO `user_credential` (`user_id`, `fName`, `lName`, `orgName`, `gst`, `resgisterAs`, `code`, `contact`, `email`, `password`, `create_date`, `update_date`, `imageFile`, `latchOn`, `iPartner`, `catalouge`, `street`, `city`, `zip`) VALUES
(1, '', '', '', '', 'Manufacturer', 'naumaan', 2147483647, 'mohammednaumaanalvi@gmail.com', '318d3f2be4c1c1487925ebf6f4149a0a', '2019-10-18', '2019-10-18 00:00:00', '', '', 0, '', '', '', ''),
(2, '', '', '', '', 'Manufacturer', 'arif', 89889, 'arifs0479@gmail.com', '9a0fe27c8bcc9aad51eda55e1b735eb5', '2019-10-18', '2019-10-18 00:00:00', '', '', 0, '', '', '', ''),
(3, '', '', '', '', 'Raw Material', 'nazim', 965210753, 'nazim@gmail.com', '339157246b942ea4ffb7ed0b39c7eb74', '2019-10-23', '2019-10-23 00:00:00', '', '', 0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_credential`
--
ALTER TABLE `user_credential`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_credential`
--
ALTER TABLE `user_credential`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
