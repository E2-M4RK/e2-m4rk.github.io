-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 02:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Coffee'),
(2, 'Non-Coffee'),
(3, 'Frappe'),
(4, 'Foods'),
(5, 'Add-ons');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(4) NOT NULL,
  `categoryID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `code`) VALUES
(1, 1, 'Latte', 'LAT'),
(2, 1, 'Americano', 'AMR'),
(3, 1, 'Cappuccino', 'CAP'),
(4, 1, 'Vanilla Latte', 'VLAT'),
(5, 1, 'Caramel Macchiato', 'CRMAC'),
(6, 2, 'Hot Chocolate', 'HTCHC'),
(7, 2, 'Matcha Latte', 'MTLAT'),
(8, 2, 'Chai Tea Latte', 'CHTLAT'),
(9, 2, 'Fresh Milk', 'FMLK'),
(10, 2, 'Iced Tea', 'ICTEA'),
(11, 3, 'Coffee Frappe', 'CFFRP'),
(12, 3, 'Mocha Frappe', 'MCFRP'),
(13, 3, 'Caramel Frappe', 'CRFRP'),
(14, 3, 'Vanilla Frappe', 'VNFRP'),
(15, 3, 'Matcha Frappe', 'MTFRP'),
(16, 4, 'Bagel & Cream Cheese', 'BGLCC'),
(17, 4, 'Chicken Sandwich', 'CHKSDW'),
(18, 4, 'Tuna Sandwich', 'TNSDW'),
(19, 4, 'Club Sandwich', 'CLBSDW'),
(20, 4, 'Pasta Carbonara', 'PSTCRB'),
(21, 5, 'Extra Shot', 'EXTSHT'),
(22, 5, 'Whipped Cream', 'WHPCRM'),
(23, 5, 'Caramel Syrup', 'CRMSYR'),
(24, 5, 'Vanilla Syrup', 'VANSYR'),
(25, 5, 'Almond Milk', 'ALMDM');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `variantID` int(4) NOT NULL,
  `productID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`variantID`, `productID`, `name`, `code`, `price`) VALUES
(1, 1, 'Hot Star (16oz)', 'HSTR', 120),
(2, 1, 'Hot Champ (22oz)', 'HCHP', 140),
(3, 1, 'Cold Star (16oz)', 'CSTR', 130),
(4, 1, 'Cold Champ (22oz)', 'CCHP', 150),
(5, 2, 'Hot Star (16oz)', 'HSTR', 110),
(6, 2, 'Hot Champ (22oz)', 'HCHP', 130),
(7, 2, 'Cold Star (16oz)', 'CSTR', 120),
(8, 2, 'Cold Champ (22oz)', 'CCHP', 140),
(9, 3, 'Hot Star (16oz)', 'HSTR', 130),
(10, 3, 'Hot Champ (22oz)', 'HCHP', 150),
(11, 3, 'Cold Star (16oz)', 'CSTR', 140),
(12, 3, 'Cold Champ (22oz)', 'CCHP', 160),
(13, 4, 'Hot Star (16oz)', 'HSTR', 140),
(14, 4, 'Hot Champ (22oz)', 'HCHP', 160),
(15, 4, 'Cold Star (16oz)', 'CSTR', 150),
(16, 4, 'Cold Champ (22oz)', 'CCHP', 170),
(17, 5, 'Hot Star (16oz)', 'HSTR', 150),
(18, 5, 'Hot Champ (22oz)', 'HCHP', 170),
(19, 5, 'Cold Star (16oz)', 'CSTR', 160),
(20, 5, 'Cold Champ (22oz)', 'CCHP', 180),
(21, 6, 'Hot Star (16oz)', 'HSTR', 120),
(22, 6, 'Hot Champ (22oz)', 'HCHP', 140),
(23, 6, 'Cold Star (16oz)', 'CSTR', 130),
(24, 6, 'Cold Champ (22oz)', 'CCHP', 150),
(25, 7, 'Hot Star (16oz)', 'HSTR', 140),
(26, 7, 'Hot Champ (22oz)', 'HCHP', 160),
(27, 7, 'Cold Star (16oz)', 'CSTR', 150),
(28, 7, 'Cold Champ (22oz)', 'CCHP', 170),
(29, 8, 'Hot Star (16oz)', 'HSTR', 130),
(30, 8, 'Hot Champ (22oz)', 'HCHP', 150),
(31, 8, 'Cold Star (16oz)', 'CSTR', 140),
(32, 8, 'Cold Champ (22oz)', 'CCHP', 160),
(33, 9, 'Hot Star (16oz)', 'HSTR', 100),
(34, 9, 'Hot Champ (22oz)', 'HCHP', 120),
(35, 9, 'Cold Star (16oz)', 'CSTR', 110),
(36, 9, 'Cold Champ (22oz)', 'CCHP', 130),
(37, 10, 'Star (16oz)', 'STR', 90),
(38, 10, 'Champ (22oz)', 'CHP', 110),
(39, 11, 'Star (16oz)', 'STR', 160),
(40, 11, 'Champ (22oz)', 'CHP', 180),
(41, 12, 'Star (16oz)', 'STR', 170),
(42, 12, 'Champ (22oz)', 'CHP', 190),
(43, 13, 'Star (16oz)', 'STR', 170),
(44, 13, 'Champ (22oz)', 'CHP', 190),
(45, 14, 'Star (16oz)', 'STR', 165),
(46, 14, 'Champ (22oz)', 'CHP', 185),
(47, 15, 'Star (16oz)', 'STR', 175),
(48, 15, 'Champ (22oz)', 'CHP', 195),
(49, 16, 'Regular', 'REG', 130),
(50, 17, 'Regular', 'REG', 150),
(51, 18, 'Regular', 'REG', 140),
(52, 19, 'Regular', 'REG', 160),
(53, 20, 'Regular', 'REG', 180),
(54, 21, 'Regular', 'REG', 30),
(55, 22, 'Regular', 'REG', 25),
(56, 23, 'Regular', 'REG', 20),
(57, 24, 'Regular', 'REG', 20),
(58, 25, 'Regular', 'REG', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`variantID`),
  ADD KEY `productID` (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `variantID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);

--
-- Constraints for table `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `variants_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
