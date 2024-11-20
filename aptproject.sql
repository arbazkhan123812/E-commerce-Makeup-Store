-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 01:14 PM
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
-- Database: `aptproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_data` (`id` INT)   begin
DELETE FROM `products` WHERE `Pro_Id`=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_all_product` ()   begin
	SELECT * FROM `products`;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_All_Products` (`id` INT)   begin
SELECT * FROM products where Pro_Id = id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `save_product` (`name` VARCHAR(50), `qty` INT, `price` DECIMAL(10,0), `image` VARCHAR(250), `details` VARCHAR(250), `catid` INT)   begin
INSERT INTO `products`(`Pro_Name`, `Pro_Qty`, `Pro_Price`, `Pro_Image`, `Pro_Details`, `Cat_Name`) VALUES (name,qty,price,image,details,catid);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_category` ()   begin 
	SELECT * from `category`;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_product` (IN `id` INT, IN `name` VARCHAR(50), IN `qty` INT, IN `price` DECIMAL(10,0), IN `image` VARCHAR(200), IN `detail` VARCHAR(200))   begin 
	UPDATE `products` SET `Pro_Name`=name,`Pro_Qty`=qty,`Pro_Price`=price,`Pro_Image`=image,`Pro_Details`=detail WHERE `Pro_Id`=id;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catName` varchar(100) NOT NULL,
  `catImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catName`, `catImage`) VALUES
(4, 'Jewelry', 'Jewelry-08-1122-neckace.jpg'),
(5, 'Cosmetics', 'Cosmetics-08-1115-makeup2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Email`, `Phone`, `Address`, `created_at`) VALUES
(1, '', '', '', '', '2024-11-13 06:42:12'),
(2, 'arbaz kHAN', 'jani@gmail.com', '03122688350', 'Shah Faisal Colony No 3\r\nKarachi', '2024-11-13 06:51:47'),
(3, 'arbaz kHAN', 'jani@gmail.com', '03122688350', 'Shah Faisal Colony No 3\r\nKarachi', '2024-11-13 06:54:36'),
(4, 'Brother', 'Brother@gmail.com', '0313131311', 'Landhi', '2024-11-13 06:59:08'),
(5, 'rohan', 'rohan@gmail.com', '031122334445', 'Landhi', '2024-11-14 06:59:00'),
(6, 'Ali bhai', 'ali@gmail.com', '03111212121', 'Shah faisal colony', '2024-11-14 07:38:04'),
(7, 'Ayan', 'ayan@gmail.com', '0313300000', 'Korangi', '2024-11-18 12:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Total_Amount` varchar(100) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Total_Amount`, `Created_at`, `customer_id`) VALUES
(1, '0', '2024-11-12 21:41:53', NULL),
(2, '22000', '2024-11-12 21:43:28', NULL),
(3, '22000', '2024-11-12 21:46:31', NULL),
(4, '22000', '2024-11-12 21:51:15', NULL),
(5, '22800', '2024-11-12 21:51:35', NULL),
(6, '22800', '2024-11-12 21:51:42', NULL),
(7, '23800', '2024-11-12 22:04:50', NULL),
(8, '25800', '2024-11-12 22:06:06', NULL),
(9, '25800', '2024-11-12 22:06:25', NULL),
(10, '25800', '2024-11-12 22:07:46', NULL),
(11, '15800', '2024-11-12 22:12:45', NULL),
(12, '5000', '2024-11-12 22:13:35', NULL),
(13, '24000', '2024-11-12 22:27:05', NULL),
(14, '6000', '2024-11-12 22:42:12', NULL),
(15, '4000', '2024-11-12 22:54:36', 3),
(16, '2400', '2024-11-12 22:59:08', 4),
(17, '2000', '2024-11-13 22:59:00', 5),
(18, '32000', '2024-11-13 23:38:04', 6),
(19, '1600', '2024-11-18 04:09:57', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `productname` varchar(100) DEFAULT NULL,
  `productprice` decimal(10,2) DEFAULT NULL,
  `productqty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `orderid`, `productid`, `productname`, `productprice`, `productqty`) VALUES
(4, 4, 6, 'Necklace', 2000.00, 1),
(5, 4, 7, 'Gold Watches', 5000.00, 4),
(6, 5, 6, 'Necklace', 2000.00, 1),
(7, 5, 7, 'Gold Watches', 5000.00, 4),
(8, 5, 5, 'Rings', 800.00, 1),
(9, 6, 6, 'Necklace', 2000.00, 1),
(10, 6, 7, 'Gold Watches', 5000.00, 4),
(11, 6, 5, 'Rings', 800.00, 1),
(12, 7, 6, 'Necklace', 2000.00, 1),
(13, 7, 7, 'Gold Watches', 5000.00, 4),
(14, 7, 5, 'Rings', 800.00, 1),
(15, 7, 8, 'MakeUp Kit', 1000.00, 1),
(16, 8, 6, 'Necklace', 2000.00, 1),
(17, 8, 7, 'Gold Watches', 5000.00, 4),
(18, 8, 5, 'Rings', 800.00, 1),
(19, 8, 8, 'MakeUp Kit', 1000.00, 3),
(20, 9, 6, 'Necklace', 2000.00, 1),
(21, 9, 7, 'Gold Watches', 5000.00, 4),
(22, 9, 5, 'Rings', 800.00, 1),
(23, 9, 8, 'MakeUp Kit', 1000.00, 3),
(24, 10, 6, 'Necklace', 2000.00, 1),
(25, 10, 7, 'Gold Watches', 5000.00, 4),
(26, 10, 5, 'Rings', 800.00, 1),
(27, 10, 8, 'MakeUp Kit', 1000.00, 3),
(28, 11, 6, 'Necklace', 2000.00, 1),
(29, 11, 7, 'Gold Watches', 5000.00, 2),
(30, 11, 5, 'Rings', 800.00, 1),
(31, 11, 8, 'MakeUp Kit', 1000.00, 3),
(32, 12, 7, 'Gold Watches', 5000.00, 1),
(33, 13, 5, 'Rings', 800.00, 5),
(34, 13, 8, 'MakeUp Kit', 1000.00, 5),
(35, 13, 7, 'Gold Watches', 5000.00, 3),
(36, 14, 6, 'Necklace', 2000.00, 3),
(37, 15, 6, 'Necklace', 2000.00, 2),
(38, 16, 5, 'Rings', 800.00, 3),
(39, 17, 6, 'Necklace', 2000.00, 1),
(40, 18, 7, 'Gold Watches', 5000.00, 4),
(41, 18, 9, 'Farmoola kit', 3000.00, 3),
(42, 18, 8, 'MakeUp Kit', 1000.00, 3),
(43, 19, 5, 'Rings', 800.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(100) NOT NULL,
  `Pro_Qty` decimal(10,0) NOT NULL,
  `Pro_Price` varchar(250) NOT NULL,
  `Pro_Image` varchar(200) NOT NULL,
  `Pro_Details` varchar(150) NOT NULL,
  `Cat_Name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Qty`, `Pro_Price`, `Pro_Image`, `Pro_Details`, `Cat_Name`) VALUES
(5, 'Rings', 11, '800', 'ed925d022fa24797.jpg', 'High Quality freshly imported rings', 4),
(6, 'Necklace', 8, '2000', '4785be6b15771027.jpeg', 'High Quality freshly imported Gold Necklace', 4),
(7, 'Gold Watches', 7, '5000', 'ba7ef87a7229d087.jpg', 'Gold Imported Rado Watch', 4),
(8, 'MakeUp Kit', 10, '1000', 'bbea9d23b6557b24.jpg', 'Made from honey makeup kit', 5),
(9, 'Farmoola kit', 22, '3000', '358e6c69f04a4ed5.jpg', 'Very nice goat milk farmula', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_id` (`customer_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pro_Id`),
  ADD KEY `fk_category` (`Cat_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pro_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`Pro_Id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`Cat_Name`) REFERENCES `category` (`catid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
