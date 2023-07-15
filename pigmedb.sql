-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 08:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pigmedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pigme_cart`
--

CREATE TABLE `pigme_cart` (
  `id` int(11) NOT NULL,
  `foodname` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pricesubtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pigme_confirmed_orders`
--

CREATE TABLE `pigme_confirmed_orders` (
  `id` int(11) NOT NULL,
  `customername` text NOT NULL,
  `contactnumber` int(20) NOT NULL,
  `customeraddress` text NOT NULL,
  `order1` text NOT NULL,
  `order2` text NOT NULL,
  `order3` text NOT NULL,
  `order4` text NOT NULL,
  `order5` text NOT NULL,
  `order6` text NOT NULL,
  `order7` text NOT NULL,
  `order8` text NOT NULL,
  `order9` text NOT NULL,
  `order10` text NOT NULL,
  `quantity1` int(11) NOT NULL,
  `quantity2` int(11) NOT NULL,
  `quantity3` int(11) NOT NULL,
  `quantity4` int(11) NOT NULL,
  `quantity5` int(11) NOT NULL,
  `quantity6` int(11) NOT NULL,
  `quantity7` int(11) NOT NULL,
  `quantity8` int(11) NOT NULL,
  `quantity9` int(11) NOT NULL,
  `quantity10` int(11) NOT NULL,
  `subtotal1` int(11) NOT NULL,
  `subtotal2` int(11) NOT NULL,
  `subtotal3` int(11) NOT NULL,
  `subtotal4` int(11) NOT NULL,
  `subtotal5` int(11) NOT NULL,
  `subtotal6` int(11) NOT NULL,
  `subtotal7` int(11) NOT NULL,
  `subtotal8` int(11) NOT NULL,
  `subtotal9` int(11) NOT NULL,
  `subtotal10` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pigme_cart`
--
ALTER TABLE `pigme_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pigme_confirmed_orders`
--
ALTER TABLE `pigme_confirmed_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pigme_cart`
--
ALTER TABLE `pigme_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pigme_confirmed_orders`
--
ALTER TABLE `pigme_confirmed_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
