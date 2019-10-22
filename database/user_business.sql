-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 02:29 PM
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
-- Table structure for table `user_business`
--

CREATE TABLE `user_business` (
  `user_id` int(11) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `GST` varchar(255) NOT NULL,
  `IMP_EXP_CODE` varchar(255) NOT NULL,
  `latch_on` varchar(255) NOT NULL,
  `brands` varchar(255) NOT NULL,
  `imageFile` varchar(255) NOT NULL,
  `b_address` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_business`
--

INSERT INTO `user_business` (`user_id`, `organisation_name`, `GST`, `IMP_EXP_CODE`, `latch_on`, `brands`, `imageFile`, `b_address`, `create_date`, `update_date`) VALUES
(1, 'ggdgd', '6262hhdjd', 'ffffofoe', 'sfsdffsd', 'ddddd', 'basic web design.jpg', 'Plot No. 23, Line. G , Room No. 8,  Shivaji Nagar, Govandi', '2019-10-18', '2019-10-18 00:00:00'),
(1, 'ggdgd', '34534543', 'ffffofoe', 'sfsdffsd', 'ddddd', '2.png', 'Room no. 366,Dadarwala chawl, Nehru Nagar', '2019-10-18', '2019-10-18 00:00:00'),
(2, 'fgfjdd', 'dfghjkl;', 'ertyui', 'hkl;cvbnm', 'sxcvbnm', '2 (1).png', 'Plot No. 22, Line. L, Room No. 2, Shivaji Nagar, Govandi', '2019-10-18', '2019-10-18 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
