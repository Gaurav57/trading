-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 12:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

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
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `product_id` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `imageFile` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(10) NOT NULL,
  `latest_featured` varchar(50) NOT NULL,
  `new_arrival` varchar(50) NOT NULL,
  `best_seller` varchar(50) NOT NULL,
  `new` varchar(50) NOT NULL,
  `offers` varchar(50) NOT NULL,
  `trends` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`product_id`, `name_product`, `price`, `code`, `imageFile`, `description`, `cat_id`, `latest_featured`, `new_arrival`, `best_seller`, `new`, `offers`, `trends`) VALUES
(1, 'Huawei MediaPad', '225', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(2, 'Apple iPod shuffle', '225', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(3, 'Apple iPod shuffle', '225', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(4, 'Sony MDRZX310W', '225', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(5, 'LUNA Smartphone', '225', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(6, 'Canon STM Kit', '225', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(7, 'Samsung J330F', '225', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(8, 'Digitus EDNET', '225', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, 'feature', '', '', '', '', ''),
(9, 'Huawei MediaPad...', '300', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(10, 'Apple iPod shuffle', '320', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(11, 'Sony MDRZX310W', '340', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(12, 'LUNA Smartphone', '360', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(13, 'Canon STM Kit...', '380', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(14, 'Samsung J330F...', '400', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(15, 'Lenovo IdeaPad', '380', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(16, 'Digitus EDNET...', '360', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'onsale', '', '', '', '', ''),
(17, 'Huawei MediaPad...', '300', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(18, 'Apple iPod shuffle', '320', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(19, 'Sony MDRZX310W', '340', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(20, 'LUNA Smartphone', '360', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(21, 'Canon STM Kit...', '380', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(22, 'Samsung J330F...', '400', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(23, 'Lenovo IdeaPad', '380', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', ''),
(24, 'Digitus EDNET...', '360', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, 'bestrated', '', '', '', '', '2018'),
(25, 'Huawei MediaPad', '225', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', ''),
(26, 'Apple iPod shuffle', '225', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', '2018'),
(27, 'Apple iPod shuffle', '400', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', ''),
(28, 'Sony MDRZX310W', '225', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', ''),
(29, 'LUNA Smartphone', '225', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', '2018'),
(30, 'Canon STM Kit', '600', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', ''),
(31, 'Samsung J330F', '225', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', ''),
(32, 'Digitus EDNET', '225', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'top20', '', '', ''),
(33, 'Huawei MediaPad...', '300', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(34, 'Apple iPod shuffle', '500', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(35, 'Sony MDRZX310W', '340', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(36, 'LUNA Smartphone', '360', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(37, 'Canon STM Kit...', '200', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(38, 'Samsung J330F...', '400', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(39, 'Lenovo IdeaPad', '380', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', ''),
(40, 'Digitus EDNET...', '360', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'featured', '', '', '', '2018'),
(41, 'Huawei MediaPad', '225', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(42, 'Apple iPod shuffle', '225', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', '2018'),
(43, 'Apple iPod shuffle', '700', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(44, 'Sony MDRZX310W', '225', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(45, 'LUNA Smartphone', '500', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(46, 'Canon STM Kit', '225', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(47, 'Samsung J330F', '225', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(48, 'Digitus EDNET', '225', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'audio&video', '', '', ''),
(49, 'Huawei MediaPad...', '300', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', ''),
(50, 'Apple iPod shuffle', '320', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', ''),
(51, 'Sony MDRZX310W', '340', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', '2018'),
(52, 'LUNA Smartphone', '600', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', '2018'),
(53, 'Canon STM Kit...', '380', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', '2018'),
(54, 'Samsung J330F...', '400', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', ''),
(55, 'Lenovo IdeaPad', '200', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', ''),
(56, 'Digitus EDNET...', '360', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'audio&video', '', '', '', ''),
(57, 'Huawei MediaPad...', '300', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(58, 'Apple iPod shuffle', '320', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(59, 'Sony MDRZX310W', '340', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(60, 'LUNA Smartphone', '360', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(61, 'Canon STM Kit...', '380', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(62, 'Samsung J330F...', '900', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(63, 'Lenovo IdeaPad', '380', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(64, 'Digitus EDNET...', '1400', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 0, '', 'laptops & computers', '', '', '', ''),
(65, 'Huawei MediaPad', '225', '', 'light1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(66, 'Apple iPod shuffle', '225', '', 'light2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(67, 'Apple iPod shuffle', '225', '', 'fan.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(68, 'Sony MDRZX310W', '225', '', 'light5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(69, 'LUNA Smartphone', '400', '', 'featured_5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(70, 'Canon STM Kit', '225', '', 'featured_6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(71, 'Samsung J330F', '800', '', 'featured_7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', ''),
(72, 'Digitus EDNET', '225', '', 'featured_8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 0, '', '', 'laptop&computers', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
