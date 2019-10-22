-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 02:03 PM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`) VALUES
(1, 'all categories'),
(2, 'computers'),
(3, 'laptops'),
(4, 'cameras'),
(5, 'hardware'),
(6, 'smartphones');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'jaydeep', 'jaydeep@gmail.com', '2147483647', 'hii there.'),
(2, 'jaydeep', 'jaydeep@gmail.com', '7302130727', 'hii there.klklk'),
(3, 'mehboob', 'mehboob@gmail.com', '9768210008', 'hi    my taay'),
(4, 'lak', 'man', '730213072756', 'man');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `menu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`) VALUES
(1, 'Home'),
(2, 'Events'),
(3, 'Products'),
(4, 'Raw Material'),
(5, 'Blog'),
(6, 'Contact Us'),
(7, 'Partners');

-- --------------------------------------------------------

--
-- Table structure for table `menu_child`
--

CREATE TABLE `menu_child` (
  `child_id` int(10) NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_child`
--

INSERT INTO `menu_child` (`child_id`, `child_name`, `menu_id`) VALUES
(1, 'Security & Surveillance', 3),
(2, 'Networking', 3),
(3, 'Accessories', 3),
(4, 'DRONES(DJI)', 3),
(5, 'Fire & Safety', 3),
(6, 'Solar', 3),
(7, 'Surveillance', 4),
(8, 'Fire Safety', 4),
(9, 'Drones', 4),
(10, 'Solar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `latest_featured` varchar(50) NOT NULL,
  `new_arrival` varchar(50) NOT NULL,
  `best_seller` varchar(50) NOT NULL,
  `new` varchar(50) NOT NULL,
  `offers` varchar(50) NOT NULL,
  `trends` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `description`, `image`, `cat_id`, `latest_featured`, `new_arrival`, `best_seller`, `new`, `offers`, `trends`) VALUES
(1, 'Huawei MediaPad', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light1.jpg', 0, 'feature', '', '', '', '', ''),
(2, 'Apple iPod shuffle', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light2.jpg', 0, 'feature', '', '', '', '', ''),
(3, 'Apple iPod shuffle', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'fan.jpg', 0, 'feature', '', '', '', '', ''),
(4, 'Sony MDRZX310W', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light5.jpg', 0, 'feature', '', '', '', '', ''),
(5, 'LUNA Smartphone', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_5.png', 0, 'feature', '', '', '', '', ''),
(6, 'Canon STM Kit', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_6.png', 0, 'feature', '', '', '', '', ''),
(7, 'Samsung J330F', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_7.png', 0, 'feature', '', '', '', '', ''),
(8, 'Digitus EDNET', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_8.png', 0, 'feature', '', '', '', '', ''),
(9, 'Huawei MediaPad...', '300', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light1.jpg', 0, 'onsale', '', '', '', '', ''),
(10, 'Apple iPod shuffle', '320', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light2.jpg', 0, 'onsale', '', '', '', '', ''),
(11, 'Sony MDRZX310W', '340', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'fan.jpg', 0, 'onsale', '', '', '', '', ''),
(12, 'LUNA Smartphone', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light5.jpg', 0, 'onsale', '', '', '', '', ''),
(13, 'Canon STM Kit...', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_5.png', 0, 'onsale', '', '', '', '', ''),
(14, 'Samsung J330F...', '400', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_6.png', 0, 'onsale', '', '', '', '', ''),
(15, 'Lenovo IdeaPad', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_7.png', 0, 'onsale', '', '', '', '', ''),
(16, 'Digitus EDNET...', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_8.png', 0, 'onsale', '', '', '', '', ''),
(17, 'Huawei MediaPad...', '300', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light1.jpg', 0, 'bestrated', '', '', '', '', ''),
(18, 'Apple iPod shuffle', '320', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light2.jpg', 0, 'bestrated', '', '', '', '', ''),
(19, 'Sony MDRZX310W', '340', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'fan.jpg', 0, 'bestrated', '', '', '', '', ''),
(20, 'LUNA Smartphone', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light5.jpg', 0, 'bestrated', '', '', '', '', ''),
(21, 'Canon STM Kit...', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_5.png', 0, 'bestrated', '', '', '', '', ''),
(22, 'Samsung J330F...', '400', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_6.png', 0, 'bestrated', '', '', '', '', ''),
(23, 'Lenovo IdeaPad', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_7.png', 0, 'bestrated', '', '', '', '', ''),
(24, 'Digitus EDNET...', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_8.png', 0, 'bestrated', '', '', '', '', '2018'),
(25, 'Huawei MediaPad', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light1.jpg', 0, '', '', 'top20', '', '', ''),
(26, 'Apple iPod shuffle', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light2.jpg', 0, '', '', 'top20', '', '', '2018'),
(27, 'Apple iPod shuffle', '400', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'fan.jpg', 0, '', '', 'top20', '', '', ''),
(28, 'Sony MDRZX310W', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light5.jpg', 0, '', '', 'top20', '', '', ''),
(29, 'LUNA Smartphone', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_5.png', 0, '', '', 'top20', '', '', '2018'),
(30, 'Canon STM Kit', '600', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_6.png', 0, '', '', 'top20', '', '', ''),
(31, 'Samsung J330F', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_7.png', 0, '', '', 'top20', '', '', ''),
(32, 'Digitus EDNET', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_8.png', 0, '', '', 'top20', '', '', ''),
(33, 'Huawei MediaPad...', '300', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light1.jpg', 0, '', 'featured', '', '', '', ''),
(34, 'Apple iPod shuffle', '500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light2.jpg', 0, '', 'featured', '', '', '', ''),
(35, 'Sony MDRZX310W', '340', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'fan.jpg', 0, '', 'featured', '', '', '', ''),
(36, 'LUNA Smartphone', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light5.jpg', 0, '', 'featured', '', '', '', ''),
(37, 'Canon STM Kit...', '200', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_5.png', 0, '', 'featured', '', '', '', ''),
(38, 'Samsung J330F...', '400', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_6.png', 0, '', 'featured', '', '', '', ''),
(39, 'Lenovo IdeaPad', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_7.png', 0, '', 'featured', '', '', '', ''),
(40, 'Digitus EDNET...', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_8.png', 0, '', 'featured', '', '', '', '2018'),
(41, 'Huawei MediaPad', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light1.jpg', 0, '', '', 'audio&video', '', '', ''),
(42, 'Apple iPod shuffle', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light2.jpg', 0, '', '', 'audio&video', '', '', '2018'),
(43, 'Apple iPod shuffle', '700', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'fan.jpg', 0, '', '', 'audio&video', '', '', ''),
(44, 'Sony MDRZX310W', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light5.jpg', 0, '', '', 'audio&video', '', '', ''),
(45, 'LUNA Smartphone', '500', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_5.png', 0, '', '', 'audio&video', '', '', ''),
(46, 'Canon STM Kit', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_6.png', 0, '', '', 'audio&video', '', '', ''),
(47, 'Samsung J330F', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_7.png', 0, '', '', 'audio&video', '', '', ''),
(48, 'Digitus EDNET', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_8.png', 0, '', '', 'audio&video', '', '', ''),
(49, 'Huawei MediaPad...', '300', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light1.jpg', 0, '', 'audio&video', '', '', '', ''),
(50, 'Apple iPod shuffle', '320', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light2.jpg', 0, '', 'audio&video', '', '', '', ''),
(51, 'Sony MDRZX310W', '340', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'fan.jpg', 0, '', 'audio&video', '', '', '', '2018'),
(52, 'LUNA Smartphone', '600', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light5.jpg', 0, '', 'audio&video', '', '', '', '2018'),
(53, 'Canon STM Kit...', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_5.png', 0, '', 'audio&video', '', '', '', '2018'),
(54, 'Samsung J330F...', '400', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_6.png', 0, '', 'audio&video', '', '', '', ''),
(55, 'Lenovo IdeaPad', '200', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_7.png', 0, '', 'audio&video', '', '', '', ''),
(56, 'Digitus EDNET...', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_8.png', 0, '', 'audio&video', '', '', '', ''),
(57, 'Huawei MediaPad...', '300', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light1.jpg', 0, '', 'laptops & computers', '', '', '', ''),
(58, 'Apple iPod shuffle', '320', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light2.jpg', 0, '', 'laptops & computers', '', '', '', ''),
(59, 'Sony MDRZX310W', '340', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'fan.jpg', 0, '', 'laptops & computers', '', '', '', ''),
(60, 'LUNA Smartphone', '360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'light5.jpg', 0, '', 'laptops & computers', '', '', '', ''),
(61, 'Canon STM Kit...', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_5.png', 0, '', 'laptops & computers', '', '', '', ''),
(62, 'Samsung J330F...', '900', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_6.png', 0, '', 'laptops & computers', '', '', '', ''),
(63, 'Lenovo IdeaPad', '380', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_7.png', 0, '', 'laptops & computers', '', '', '', ''),
(64, 'Digitus EDNET...', '1400', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'featured_8.png', 0, '', 'laptops & computers', '', '', '', ''),
(65, 'Huawei MediaPad', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light1.jpg', 0, '', '', 'laptop&computers', '', '', ''),
(66, 'Apple iPod shuffle', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light2.jpg', 0, '', '', 'laptop&computers', '', '', ''),
(67, 'Apple iPod shuffle', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'fan.jpg', 0, '', '', 'laptop&computers', '', '', ''),
(68, 'Sony MDRZX310W', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'light5.jpg', 0, '', '', 'laptop&computers', '', '', ''),
(69, 'LUNA Smartphone', '400', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_5.png', 0, '', '', 'laptop&computers', '', '', ''),
(70, 'Canon STM Kit', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_6.png', 0, '', '', 'laptop&computers', '', '', ''),
(71, 'Samsung J330F', '800', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_7.png', 0, '', '', 'laptop&computers', '', '', ''),
(72, 'Digitus EDNET', '225', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'featured_8.png', 0, '', '', 'laptop&computers', '', '', ''),
(73, 'jaydeep', '100', 'asd', 'asd', 1, 'asd', 'asd', 'asd', 'asd', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `trading_login`
--

CREATE TABLE `trading_login` (
  `id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trading_reg`
--

CREATE TABLE `trading_reg` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trading_reg`
--

INSERT INTO `trading_reg` (`id`, `name`, `contact`, `email`, `password`, `category`) VALUES
(1, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Retailer'),
(2, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw materi'),
(3, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw material'),
(4, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw material'),
(5, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw material'),
(6, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw material'),
(7, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw material'),
(8, 'jaydeep', 2147483647, 'jay@gmail.com', '741', 'Raw material');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_child`
--
ALTER TABLE `menu_child`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `trading_login`
--
ALTER TABLE `trading_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trading_reg`
--
ALTER TABLE `trading_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_child`
--
ALTER TABLE `menu_child`
  MODIFY `child_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `trading_login`
--
ALTER TABLE `trading_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trading_reg`
--
ALTER TABLE `trading_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_child`
--
ALTER TABLE `menu_child`
  ADD CONSTRAINT `menu_child_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
