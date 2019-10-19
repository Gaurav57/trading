-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 01:57 PM
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
-- Database: `electric_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `product_id` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `user_id` int(11) NOT NULL,
  `p_user` varchar(255) NOT NULL,
  `p_password` varchar(255) NOT NULL,
  `p_contact` int(20) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_listing`
--

CREATE TABLE `product_listing` (
  `pro_id` int(20) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pkg_of_product` varchar(255) NOT NULL,
  `case_studies` varchar(255) NOT NULL,
  `loyalty_point` varchar(255) NOT NULL,
  `spec_sheet` varchar(255) NOT NULL,
  `ref_clients` varchar(255) NOT NULL,
  `testimonials` varchar(255) NOT NULL,
  `pro_video` varchar(255) NOT NULL,
  `discounts_offers` varchar(255) NOT NULL,
  `warrenty_support` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_credential`
--

CREATE TABLE `user_credential` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `GST` varchar(255) NOT NULL,
  `IMP_EXP_CODE` varchar(255) NOT NULL,
  `latch_on` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `brands` varchar(255) NOT NULL,
  `subscribe` int(10) NOT NULL,
  `catalouge` int(10) NOT NULL,
  `multiple_catalouge` int(10) NOT NULL,
  `installation_partner` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_roll`
--

CREATE TABLE `user_roll` (
  `user` int(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `product_listing`
--
ALTER TABLE `product_listing`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user_credential`
--
ALTER TABLE `user_credential`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roll`
--
ALTER TABLE `user_roll`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_credential`
--
ALTER TABLE `user_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
