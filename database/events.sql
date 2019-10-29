-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 10:09 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tradingn`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `image`, `discription`) VALUES
(1, 'THE EVENt', 'blog_1.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(2, 'THE EVENT', 'blog_2.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(3, 'THE EVENT', 'blog_3.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(4, 'event', 'blog_4.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(5, 'THE EVENT', 'blog_5.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(6, 'THE EVENT', 'blog_6.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(7, 'event', 'blog_7.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(8, 'event', 'blog_8.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.'),
(9, 'event', 'blog_9.jpg', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
