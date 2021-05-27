-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 08:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblazerosa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courierName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courierName`) VALUES
('JRS Express'),
('MrSpeedy'),
('Ninja Van');

-- --------------------------------------------------------

--
-- Table structure for table `customerpo`
--

CREATE TABLE `customerpo` (
  `custPO` int(11) NOT NULL,
  `custName` varchar(100) NOT NULL,
  `custEmail` varchar(100) NOT NULL,
  `custNumber` int(15) NOT NULL,
  `custAddress` varchar(255) NOT NULL,
  `custMOP` varchar(50) NOT NULL,
  `custDateOrder` date NOT NULL,
  `custDatePickup` date NOT NULL,
  `custPlatform` varchar(50) NOT NULL,
  `custCourier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerpo`
--

INSERT INTO `customerpo` (`custPO`, `custName`, `custEmail`, `custNumber`, `custAddress`, `custMOP`, `custDateOrder`, `custDatePickup`, `custPlatform`, `custCourier`) VALUES
(1, 'test', 'test', 1, 'test', 'test', '2021-05-05', '2021-05-05', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custID` int(11) NOT NULL,
  `custName` varchar(100) NOT NULL,
  `custEmail` varchar(100) NOT NULL,
  `custNumber` varchar(45) NOT NULL,
  `custAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custID`, `custName`, `custEmail`, `custNumber`, `custAddress`) VALUES
(1, 'test', 'test@gmail.com', '1', 'Quezon City'),
(2, 'Francis', 'francis@gmail.com', '2', 'Quezon City'),
(3, 'Raphael', 'raphael@gmail.com', '3', 'Pasay'),
(4, 'John', 'john@gmail.com', '4', 'Manila'),
(5, 'Paolo', 'paolo@gmail.com', '5', 'Pasig'),
(6, 'Noel', 'noel@gmail.com', '6', 'Lipa'),
(7, 'Miguel', 'miguel@gmail.com', '7', 'Bulacan'),
(8, 'Anthony', 'anthony@gmail.com', '8', 'Intramuros'),
(9, 'test9', 'test9@gmail.com', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `custOR` int(11) NOT NULL,
  `custPO` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `custName` varchar(100) NOT NULL,
  `custEmail` varchar(100) NOT NULL,
  `custNumber` int(12) NOT NULL,
  `custAddress` varchar(255) NOT NULL,
  `custMOP` varchar(100) NOT NULL,
  `custDateOrdered` date NOT NULL,
  `custDatePickup` date NOT NULL,
  `custPlatform` varchar(50) NOT NULL,
  `custCourier` varchar(50) NOT NULL,
  `custStatus` varchar(50) NOT NULL,
  `custTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`custOR`, `custPO`, `custID`, `custName`, `custEmail`, `custNumber`, `custAddress`, `custMOP`, `custDateOrdered`, `custDatePickup`, `custPlatform`, `custCourier`, `custStatus`, `custTotal`) VALUES
(1, 1, 1, 'test', 'test@gmail.com', 1, 'Quezon City', 'Cash on Delivery', '2021-05-21', '2021-05-22', 'Facebook/Instagram', 'JRS Express', 'Packing', 0),
(2, 2, 1, 'test', 'test@gmail.com', 1, 'Quezon City', 'Cash on Delivery', '2021-05-25', '2021-05-27', 'Facebook/Instagram', 'JRS Express', 'Pending', 0),
(3, 3, 2, 'Francis', 'francis@gmail.com', 2, 'Quezon City', 'Cash on Delivery', '2021-05-26', '2021-05-26', 'Shopee', 'MrSpeedy', 'Received', 0),
(4, 4, 3, 'Raphael', 'raphael@gmail.com', 3, 'Pasay', 'Cash on Delivery', '2021-05-27', '2021-05-28', 'Facebook/Instagram', 'JRS Express', 'Pending', 0),
(5, 5, 7, 'Miguel', 'miguel@gmail.com', 7, 'Bulacan', 'G-Cash', '2021-05-27', '2021-05-27', 'Shopee', 'MrSpeedy', 'Pending', 0),
(6, 6, 8, 'Anthony', 'anthony@gmail.com', 8, 'Intramuros', 'G-Cash', '2021-05-27', '2021-05-27', 'Shopee', 'MrSpeedy', 'Pending', 0),
(7, 7, 2, 'Francis', 'francis@gmail.com', 2, 'Quezon City', 'Cash on Delivery', '2021-05-20', '2021-05-27', 'Facebook/Instagram', 'JRS Express', 'Pending', 0),
(8, 8, 1, 'test', 'test@gmail.com', 1, 'Quezon City', 'Cash on Delivery', '2021-05-27', '2021-05-28', 'Facebook/Instagram', 'JRS Express', 'Received', 0),
(9, 9, 4, 'John', 'john@gmail.com', 4, 'Manila', 'Cash on Delivery', '2021-05-27', '2021-05-27', 'Facebook/Instagram', 'JRS Express', 'Pending', 0),
(10, 10, 4, 'John', 'john@gmail.com', 4, 'Manila', 'Cash on Delivery', '2021-05-26', '2021-05-27', 'Facebook/Instagram', 'JRS Express', 'Pending', 0),
(11, 11, 5, 'Paolo', 'paolo@gmail.com', 5, 'Pasig', 'Cash on Delivery', '2021-05-27', '2021-05-27', 'Facebook/Instagram', 'JRS Express', 'Packing', 0),
(12, 12, 6, '', 'noel@gmail.com', 6, 'Lipa', 'Cash on Delivery', '2021-05-28', '2021-05-28', 'Facebook/Instagram', 'JRS Express', 'Packing', 0),
(13, 13, 0, '', '', 0, '', 'Cash on Delivery', '2021-05-27', '2021-05-27', 'Facebook/Instagram', 'JRS Express', 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `itemName`) VALUES
(1, 'bb aha'),
(2, 'bb aha'),
(3, 'bb aha');

-- --------------------------------------------------------

--
-- Table structure for table `modeofpayment`
--

CREATE TABLE `modeofpayment` (
  `MOP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modeofpayment`
--

INSERT INTO `modeofpayment` (`MOP`) VALUES
('Cash on Delivery'),
('Credit/Debit Card'),
('G-Cash'),
('Online Bank Payment'),
('Shopee Pay');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `platformName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`platformName`) VALUES
('Facebook/Instagram'),
('Shopee');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `purchaseID` int(11) NOT NULL,
  `supplierID` int(5) NOT NULL,
  `PONumber` int(4) NOT NULL,
  `dateOrdered` datetime NOT NULL,
  `deliveryDate` date DEFAULT NULL,
  `paymentMethod` varchar(45) NOT NULL,
  `courier` varchar(45) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `discountfee` decimal(10,0) NOT NULL,
  `shopeefee` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `status` varchar(45) NOT NULL,
  `shiptoAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`purchaseID`, `supplierID`, `PONumber`, `dateOrdered`, `deliveryDate`, `paymentMethod`, `courier`, `subtotal`, `discountfee`, `shopeefee`, `total`, `status`, `shiptoAddress`) VALUES
(6, 1, 1, '2021-04-29 22:12:54', NULL, 'cash', 'j&t', '0', '0', '0', '0', 'Deleted', NULL),
(7, 2, 2, '2021-04-29 22:28:31', NULL, 'cash', 'j&t', '0', '0', '0', '0', 'Deleted', NULL),
(8, 3, 3, '2021-04-29 22:30:16', NULL, 'cash', 'j&t', '0', '0', '0', '0', 'pending', NULL),
(9, 4, 4, '2021-04-29 22:31:16', NULL, 'cash', 'j&t', '0', '0', '0', '0', 'pending', NULL),
(11, 1, 0, '2021-05-12 23:17:51', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Deleted', NULL),
(12, 1, 0, '2021-05-12 23:22:53', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Deleted', NULL),
(13, 1, 0, '2021-05-12 23:25:36', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Deleted', NULL),
(14, 1, 0, '2021-05-12 23:26:48', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Received', NULL),
(15, 1, 0, '2021-05-12 23:31:09', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Deleted', NULL),
(16, 1, 0, '2021-05-12 23:42:29', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Received', NULL),
(17, 1, 0, '2021-05-26 08:49:21', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Deleted', NULL),
(18, 1, 0, '2021-05-26 09:08:38', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Deleted', NULL),
(19, 1, 0, '2021-05-26 10:22:29', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Pending', NULL),
(20, 15, 0, '2021-05-26 10:29:06', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Received', NULL),
(21, 6, 0, '2021-05-26 10:32:39', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Pending', NULL),
(22, 2, 0, '2021-05-27 01:31:52', NULL, 'Cash on Delivery', '', '0', '0', '0', '0', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_items`
--

CREATE TABLE `purchase_order_items` (
  `poitemsID` int(11) NOT NULL,
  `itemID` int(5) NOT NULL,
  `purchaseID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `amount` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order_items`
--

INSERT INTO `purchase_order_items` (`poitemsID`, `itemID`, `purchaseID`, `quantity`, `unitPrice`, `amount`) VALUES
(5, 1, 11, 213, '312', '66456'),
(6, 1, 11, 321, '312', '100152'),
(7, 1, 12, 12, '3', '36'),
(8, 1, 13, 321, '312', '100152'),
(9, 1, 14, 213, '213', '45369'),
(10, 1, 15, 123, '21', '2583'),
(11, 1, 16, 13, '321', '4173'),
(12, 1, 17, 3, '0', '0'),
(13, 2, 17, 4, '0', '0'),
(14, 1, 18, 312, '0', '0'),
(15, 4, 19, 4, '0', '0'),
(16, 166, 20, 21, '0', '0'),
(17, 6, 21, 3, '0', '0'),
(18, 6, 22, 3, '34', '102'),
(19, 8, 22, 3, '25', '75');

-- --------------------------------------------------------

--
-- Table structure for table `sales_customer`
--

CREATE TABLE `sales_customer` (
  `PONumber` int(11) NOT NULL,
  `dateOrdered` date NOT NULL,
  `custName` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierID` int(5) NOT NULL,
  `supplierName` varchar(45) NOT NULL,
  `supplierEmail` varchar(45) NOT NULL,
  `supplierNumber` varchar(45) NOT NULL,
  `supplierAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `supplierName`, `supplierEmail`, `supplierNumber`, `supplierAddress`) VALUES
(1, 'Supplier 1', 'Supplier1@yahoo.com', '099999999999', 'manila'),
(2, 'Supplier 2', 'Supplier2@gmail.com', '099992138128', 'qc'),
(6, 'Jeremy', 'jeremy@yahoo.com', '09998210611', 'manila'),
(7, '123321', '321312@yahoo.com', '312321', '321312'),
(8, '123321', '321312@yahoo.com', '312321', '321312'),
(9, 'kurt', 'kurt@yahoo.com', '09998210611', 'jkasfnjkawnsef'),
(10, 'Alec', 'alec@yahoo.com', '1234231412', 'amnina'),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'Desmond', 'suppplierdesmojnd@gmail.com', '099921310231', 'qc'),
(15, 'Francis', 'Francis@gmail.com', '099241823', 'manila'),
(16, 'Raphael', 'raphaelsupplier@gmail.com', '09999999999', 'Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_items`
--

CREATE TABLE `suppliers_items` (
  `supplieritemID` int(11) NOT NULL,
  `itemID` int(5) NOT NULL,
  `supplierID` int(5) NOT NULL,
  `itemPrice` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers_items`
--

INSERT INTO `suppliers_items` (`supplieritemID`, `itemID`, `supplierID`, `itemPrice`) VALUES
(1, 1, 1, NULL),
(2, 2, 1, NULL),
(3, 3, 1, NULL),
(4, 4, 1, NULL),
(5, 5, 1, NULL),
(6, 6, 2, NULL),
(7, 7, 2, NULL),
(8, 8, 2, NULL),
(9, 9, 2, NULL),
(10, 10, 2, NULL),
(11, 6, 6, '1200'),
(12, 7, 7, '312'),
(13, 8, 8, '312'),
(14, 9, 9, '12312'),
(15, 10, 10, '2131'),
(16, 11, 11, '0'),
(17, 12, 12, '0'),
(18, 13, 13, '0'),
(19, 164, 14, NULL),
(20, 165, 14, NULL),
(21, 166, 15, NULL),
(22, 167, 16, NULL),
(23, 168, 16, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `pID` int(5) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pBrand` varchar(50) NOT NULL,
  `pQuantity` int(5) NOT NULL,
  `pReorderPoint` int(5) NOT NULL,
  `pSRP` decimal(10,0) NOT NULL,
  `pBuyingPrice` decimal(10,0) NOT NULL,
  `pDiscountRate` decimal(11,0) NOT NULL,
  `pShopeeRate` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinventory`
--

INSERT INTO `tblinventory` (`pID`, `pName`, `pBrand`, `pQuantity`, `pReorderPoint`, `pSRP`, `pBuyingPrice`, `pDiscountRate`, `pShopeeRate`) VALUES
(1, 'AHA', 'BB', 132, 32, '220', '152', '10', '5'),
(2, 'BETTER FUTURE', 'BB', 0, 15, '220', '152', '10', '5'),
(3, 'GLASS SKIN', 'BB', 0, 15, '220', '152', '10', '5'),
(4, 'HYDRO BOOST', 'BB', 0, 15, '220', '152', '10', '5'),
(5, 'TOMATO', 'BB', 0, 15, '220', '152', '10', '5'),
(6, 'VITAMIN C', 'BB', 0, 15, '220', '152', '10', '5'),
(7, 'SNAIL WHIPP', 'BEAUTY VAULT', 6, 15, '220', '150', '10', '5'),
(8, 'AVOCADO HAIR MASQUE', 'BABE FORMULA', 33, 40, '349', '225', '10', '5'),
(9, 'BABE BOX SET BLUE', 'BABE FORMULA', 16, 20, '172', '145', '10', '5'),
(10, 'BABE BOX SET PINK', 'BABE FORMULA', 14, 20, '172', '145', '10', '5'),
(11, 'BLOSSOM CONDITIONER', 'BABE FORMULA', 22, 40, '670', '455', '10', '5'),
(12, 'BLOSSOM GLEAM SPRAY', 'BABE FORMULA', 10, 20, '850', '575', '10', '5'),
(13, 'BLOSSOM SHAMPOO', 'BABE FORMULA', 24, 40, '249', '155', '10', '5'),
(14, 'DOPP KIT', 'BABE FORMULA', 12, 10, '180', '120', '10', '5'),
(15, 'FANTASY BAR CELESTIAL BLOOMS', 'BABE FORMULA', 12, 15, '249', '155', '10', '5'),
(16, 'FANTASY BAR IVORY DREAMS', 'BABE FORMULA', 13, 15, '235', '179', '10', '5'),
(17, 'FANTASY BAR LAVANDER SPELL', 'BABE FORMULA', 13, 15, '159', '90', '10', '5'),
(18, 'FANTASY BAR PURE PARADISO', 'BABE FORMULA', 12, 15, '159', '90', '10', '5'),
(19, 'NECTAR CONDITIONER', 'BABE FORMULA', 30, 50, '159', '90', '10', '5'),
(20, 'NECTAR GLEAM SPRAY', 'BABE FORMULA', 34, 32, '159', '90', '10', '5'),
(21, 'NECTAR SHAMPOO', 'BABE FORMULA', 22, 30, '249', '155', '20', '5'),
(22, 'SILICONE BOTTLE BLUE', 'BABE FORMULA', 16, 20, '80', '55', '5', '8'),
(23, 'SILICONE BOTTLE PEACH', 'BABE FORMULA', 14, 20, '80', '55', '5', '8'),
(24, 'SKIN PERFECTING SET', 'BB', 8, 10, '299', '200', '20', '8'),
(25, 'REJUVINATING SET', 'BRIGHTEST SKIN', 10, 10, '180', '135', '15', '8'),
(26, 'GLOW UP KIT', 'CALI SKIN', 44, 10, '390', '280', '20', '8'),
(27, 'GET WINGED BROWN 12MM', 'CLISSORA', 2, 5, '695', '485', '22', '8'),
(28, 'GET WINGED BLACK 8MM', 'CLISSORA', 1, 5, '695', '485', '22', '8'),
(29, 'REVITALIZE KIT', 'DOLL SKIN', 9, 5, '300', '210', '21', '8'),
(30, 'COFFEE', 'GLUTA LIPO', 9, 5, '350', '210', '20', '8'),
(31, 'DARK CHOCO', 'GLUTA LIPO', 6, 5, '395', '255', '20', '8'),
(32, 'GOLD COFFEE', 'GLUTA LIPO', 6, 5, '395', '255', '20', '8'),
(33, 'ICED TEA', 'GLUTA LIPO', 4, 10, '350', '210', '20', '8'),
(34, 'MILK TEA', 'GLUTA LIPO', 4, 5, '300', '215', '20', '8'),
(35, 'MILKY MELON', 'GLUTA LIPO', 12, 10, '395', '255', '20', '8'),
(36, 'REVITA GLOW', 'HER SKIN', 9, 5, '349', '250', '20', '8'),
(37, 'JADE ROLLER', '', 1, 3, '50', '18', '20', '8'),
(38, 'REJUVINATING SET', 'JENNA ESSENSE', 9, 5, '298', '210', '20', '8'),
(39, 'PAMATAY NA KILLAY KIT', '', 30, 5, '299', '260', '3', '8'),
(40, 'COLLAGEN', 'KATTY MERA', 0, 5, '999', '899', '0', '8'),
(41, 'MILKY MIGHTY FACIAL KIT', 'KATTY MERA', 7, 15, '390', '314', '5', '8'),
(42, 'MILKY WHITE BODY SOAP', 'KATTY MERA', 1, 5, '199', '149', '10', '8'),
(43, 'SERUM', 'KATTY MERA', 8, 5, '140', '120', '0', '8'),
(44, 'SUN SHIELD', 'KATTY MERA', 8, 5, '99', '79', '0', '8'),
(45, 'TONER', 'KATTY MERA', 5, 5, '149', '139', '0', '8'),
(46, 'BRIGHTENING SOAP', 'LOOCA', 6, 10, '160', '95', '0', '8'),
(47, 'GLOW GANG SET', 'LOOCA', 6, 10, '480', '360', '5', '8'),
(48, 'POUCH', 'LOOCA', 3, 2, '100', '80', '5', '8'),
(49, 'TONER MIST', 'LOOCA', 7, 5, '280', '210', '5', '8'),
(50, 'TOTE BAG', 'LOOCA', 2, 1, '280', '210', '5', '8'),
(51, 'HOT & SPICY', 'NERI\'S GOURMET TUYO', 5, 5, '230', '180', '5', '8'),
(52, 'ORIGINAL', 'NERI\'S GOURMET TUYO', 8, 5, '215', '165', '5', '8'),
(53, 'SPICY', 'NERI\'S GOURMET TUYO', 4, 3, '225', '175', '5', '8'),
(54, '4 PAIRS DAMN', 'PAULASH', 1, 0, '200', '150', '5', '8'),
(55, '4 PAIRS GOSH', 'PAULASH', 1, 0, '200', '150', '5', '8'),
(56, '4 PAIRS OOPS', 'PAULASH', 0, 0, '200', '150', '5', '8'),
(57, '5 PAIRS FAB', 'PAULASH', 1, 0, '240', '180', '5', '8'),
(58, '5 PAIRS GNARLY', 'PAULASH', 0, 0, '240', '180', '5', '8'),
(59, '5 PAIRS SLAY', 'PAULASH', 0, 0, '240', '180', '5', '8'),
(60, 'GLUE', 'PAULASH', 3, 2, '350', '280', '5', '8'),
(61, 'GOLD BAR ATHENA', 'PAULASH', 0, 0, '189', '130', '5', '8'),
(62, 'GOLD BAR CLIO', 'PAULASH', 0, 0, '189', '130', '5', '8'),
(63, 'GOLD BAR HERA', 'PAULASH', 1, 0, '189', '130', '5', '8'),
(64, 'GOLD BAR SELENE', 'PAULASH', 1, 0, '189', '130', '5', '8'),
(65, 'GOLD BAR THALIA', 'PAULASH', 0, 0, '189', '130', '5', '8'),
(66, 'LASH APPLICATOR', 'PAULASH', 2, 0, '99', '80', '5', '8'),
(67, 'BLUSH BOMB BEACH', 'SCOUT BEAUTY', 11, 5, '159', '110', '15', '8'),
(68, 'BLUSH BOMBS KILL IT', 'SCOUT BEAUTY', 7, 5, '159', '110', '15', '8'),
(69, 'BLUSH BOMB SUGAR COATED', 'SCOUT BEAUTY', 4, 5, '159', '110', '15', '8'),
(70, 'BLUSH BOMB SUNSET', 'SCOUT BEAUTY', 5, 5, '159', '110', '15', '8'),
(71, 'BLUSH BOMB TAN', 'SCOUT BEAUTY', 6, 5, '159', '110', '15', '8'),
(72, 'CHICC PAINT AL3', 'SCOUT BEAUTY', 9, 5, '149', '101', '15', '8'),
(73, 'CHICC PAINT MACCHIATO', 'SCOUT BEAUTY', 7, 10, '149', '101', '15', '8'),
(74, 'CHICC PAINT OKINAWA', 'SCOUT BEAUTY', 10, 10, '149', '101', '15', '8'),
(75, 'CHICC PAINT PETAL POP ', 'SCOUT BEAUTY', 4, 5, '149', '101', '15', '8'),
(76, 'CHICC PAINT SML', 'SCOUT BEAUTY', 10, 10, '149', '101', '15', '8'),
(77, 'CHICC PAINT SUMMER RAIN', 'SCOUT BEAUTY', 7, 5, '149', '101', '15', '8'),
(78, 'LIP LUSH CARAMEL POPCORN', 'SCOUT BEAUTY', 5, 3, '149', '101', '15', '8'),
(79, 'LIP LUSH COTTON CANDY', 'SCOUT BEAUTY', 4, 3, '149', '101', '15', '8'),
(80, 'LIP LUSH MANGO', 'SCOUT BEAUTY', 3, 3, '149', '101', '15', '8'),
(81, 'LIP LUSH STRAWBERRY', 'SCOUT BEAUTY', 4, 3, '149', '101', '15', '8'),
(82, 'LIP LUSH VANILLA', 'SCOUT BEAUTY', 4, 4, '149', '101', '15', '8'),
(83, 'POUCH', 'SCOUT BEAUTY', 1, 3, '100', '70', '15', '8'),
(84, 'SLEEK STICK 25', 'SCOUT BEAUTY', 7, 5, '249', '169', '15', '8'),
(85, 'SLEEK STICK CHARITOO', 'SCOUT BEAUTY', 4, 10, '249', '169', '15', '8'),
(86, 'SLEEK STICK HEY LUX', 'SCOUT BEAUTY', 9, 5, '249', '169', '15', '8'),
(87, 'SLEEK STICK LUVANDAIRE', 'SCOUT BEAUTY', 2, 1, '249', '169', '15', '8'),
(88, 'SLEEK STICK NUDE TASTE', 'SCOUT BEAUTY', 7, 5, '249', '169', '15', '8'),
(89, 'SLEEK STICK PETIT BISCUIT', 'SCOUT BEAUTY', 4, 5, '249', '169', '15', '8'),
(90, 'CALMDLES BAMBOO', 'SKIN CAN TELL', 0, 0, '650', '550', '10', '8'),
(91, 'CALMDLES LAVANDER', 'SKIN CAN TELL', 0, 0, '650', '550', '10', '8'),
(92, 'CALMDLES WHITE TEA', 'SKIN CAN TELL', 0, 0, '650', '550', '10', '8'),
(93, 'CLASSIC', 'SKIN CAN TELL', 0, 0, '350', '255', '10', '8'),
(94, 'INTENSE', 'SKIN CAN TELL', 4, 3, '250', '200', '5', '8'),
(95, 'MINI', 'SKIN CAN TELL', 5, 3, '130', '100', '5', '8'),
(96, 'REJUVINATING SET', 'SKIN CAN TELL', 4, 3, '300', '220', '10', '8'),
(97, 'PITS PERFECT DEO SPRAY', 'SKIN HEROES', 10, 5, '250', '185', '10', '8'),
(98, 'SOLEIL LOTION', 'SKIN HEROES', 6, 10, '250', '170', '10', '8'),
(99, 'SOLEIL REGULAR SOAP', 'SKIN HEROES', 35, 20, '129', '79', '10', '8'),
(100, 'SOLEIL SOAP W/ MESH', 'SKIN HEROES', 35, 20, '139', '89', '10', '8'),
(101, 'WONDERTINT FELICIA', 'SKIN HEROES', 5, 3, '160', '90', '10', '8'),
(102, 'WONDERTINT FRANCES', 'SKIN HEROES', 5, 5, '160', '90', '10', '8'),
(103, 'WONDERTINT SUMMER', 'SKIN HEROES', 5, 5, '160', '90', '10', '8'),
(104, 'REJUVINATING SET', 'SKIN GOAL', 0, 0, '300', '210', '10', '8'),
(105, 'BRIGHT & FREE LOTION', 'SKIN PLAY', 30, 10, '299', '250', '10', '8'),
(106, 'LITTLE PLAY BAG', 'SKIN PLAY', 16, 5, '230', '185', '5', '8'),
(107, 'COLLAGEN', 'THE DIET COACH', 14, 5, '999', '800', '10', '8'),
(108, 'COLLAGEN PER BOTTLE', 'THE DIET COACH', 6, 5, '650', '550', '10', '8'),
(109, 'GLUTA GLOW', 'THE DIET COACH', 2, 5, '990', '800', '10', '8'),
(110, 'LET IT GLOW', 'THE DIET COACH', 0, 0, '100', '60', '5', '8'),
(111, 'SKIN BOOSTER SET', 'THE DAILY SKINCARE', 11, 20, '300', '185', '5', '8'),
(112, 'SOAPERSTAR', 'THE DAILY SKINCARE', 0, 0, '80', '50', '5', '8'),
(113, 'SUNBODY TO LOVE', 'THE DAILY SKINCARE', 0, 0, '100', '60', '5', '8'),
(114, 'YOU GIVE ME THE PEELS', 'THE DAILY SKINCARE', 4, 3, '120', '65', '5', '8'),
(115, 'BRIGHTENING SET', 'THE GO GLASS', 0, 10, '450', '330', '10', '8'),
(116, 'RESURFACING SET NEW', 'THE GO GLASS', 42, 20, '370', '270', '10', '8'),
(117, 'RESURFACING SKIN SHIELD', 'THE GO GLASS', 20, 15, '170', '138', '10', '8'),
(118, 'RESURFACING TONER', 'THE GO GLASS', 27, 20, '210', '175', '10', '8'),
(119, 'ATHENS', 'THE PRETTY HUE', 2, 5, '180', '130', '20', '8'),
(120, 'BRISBANE', 'THE PRETTY HUE', 2, 1, '180', '130', '20', '8'),
(121, 'BUDAPEST', 'THE PRETTY HUE', 3, 1, '180', '130', '0', '8'),
(122, 'COLOMBO', 'THE PRETTY HUE', 2, 2, '180', '130', '5', '8'),
(123, 'GLOSSY', 'THE PRETTY HUE', 1, 3, '180', '130', '5', '8'),
(124, 'GOLD', 'THE PRETTY HUE', 3, 3, '180', '130', '5', '8'),
(125, 'HAVANA', 'THE PRETTY HUE', 4, 3, '180', '130', '0', '8'),
(126, 'ISTANBUL', 'THE PRETTY HUE', 2, 2, '180', '130', '5', '8'),
(127, 'JAKARTA', 'THE PRETTY HUE', 2, 2, '180', '130', '5', '8'),
(128, 'LISBON', 'THE PRETTY HUE', 4, 3, '180', '130', '5', '8'),
(129, 'LONDON', 'THE PRETTY HUE', 5, 3, '180', '130', '5', '8'),
(130, 'MADRID', 'THE PRETTY HUE', 4, 3, '180', '130', '5', '8'),
(131, 'MANILA', 'THE PRETTY HUE', 3, 2, '180', '130', '5', '8'),
(132, 'MATTE', 'THE PRETTY HUE', 0, 1, '180', '130', '5', '8'),
(133, 'MILAN', 'THE PRETTY HUE', 4, 3, '180', '130', '5', '8'),
(134, 'MOSCOW', 'THE PRETTY HUE', 4, 3, '180', '130', '5', '8'),
(135, 'NEW YORK', 'THE PRETTY HUE', 4, 3, '180', '130', '5', '8'),
(136, 'PARIS', 'THE PRETTY HUE', 5, 3, '180', '130', '5', '8'),
(137, 'PARIS', 'THE PRETTY HUE', 5, 3, '180', '130', '5', '8'),
(138, 'ROME', 'THE PRETTY HUE', 3, 2, '180', '130', '5', '8'),
(139, 'SEOUL', 'THE PRETTY HUE', 2, 3, '180', '130', '5', '8'),
(140, 'SILVER', 'THE PRETTY HUE', 3, 2, '180', '130', '5', '8'),
(141, 'SYDNEY', 'THE PRETTY HUE', 5, 3, '180', '130', '5', '8'),
(142, 'TAIPEI', 'THE PRETTY HUE', 2, 2, '180', '130', '20', '8'),
(143, 'TALLIN', 'THE PRETTY HUE', 2, 2, '180', '130', '5', '8'),
(144, 'TOKYO', 'THE PRETTY HUE', 3, 2, '180', '130', '5', '8'),
(145, 'VENICE', 'THE PRETTY HUE', 3, 2, '180', '130', '5', '8'),
(146, 'BARCELONA', 'THE PRETTY HUE', 2, 1, '180', '130', '5', '8'),
(147, 'DOHA', 'THE PRETTY HUE', 1, 1, '180', '130', '5', '8'),
(148, 'FLORENCE', 'THE PRETTY HUE', 2, 1, '180', '130', '5', '8'),
(149, 'NUDE', 'THE PRETTY HUE', 1, 1, '180', '130', '5', '8'),
(150, 'MUSCAT', 'THE PRETTY HUE', 2, 1, '180', '130', '5', '8'),
(151, 'TORONTO', 'THE PRETTY HUE', 1, 1, '180', '130', '5', '8'),
(152, 'BANGKOK', 'THE PRETTY HUE', 3, 1, '180', '130', '5', '8'),
(153, 'BEIJING', 'THE PRETTY HUE', 2, 1, '180', '130', '5', '8'),
(154, 'DELHI', 'THE PRETTY HUE', 2, 1, '180', '130', '5', '8'),
(155, 'HANOI', 'THE PRETTY HUE', 2, 1, '180', '130', '5', '8'),
(156, 'KYOTO', 'THE PRETTY HUE', 2, 2, '180', '130', '5', '8'),
(164, '2312312', '', 0, 0, '0', '0', '0', '0'),
(165, 'BB AHA', '', 0, 0, '0', '0', '0', '0'),
(166, 'BB BAHA', '', 0, 0, '0', '0', '0', '0'),
(167, 'AHA', '', 0, 0, '0', '0', '0', '0'),
(168, 'BETTER FUTURE', '', 0, 0, '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ufname` varchar(50) NOT NULL,
  `ulname` varchar(50) NOT NULL,
  `uemail` varchar(70) NOT NULL,
  `upassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ufname`, `ulname`, `uemail`, `upassword`) VALUES
('admin', 'admin', 'admin@admin', '0192023a7bbd73250516f069df18b500'),
('test2', 'test2', 'test2@gmail.com', ''),
('francis', 'devera', 'test3@gmail.com', ''),
('test', 'test', 'test5@gmail.com', '202cb962ac59075b964b07152d234b70'),
('test6', 'test6', 'test6@gmail.com', '202cb962ac59075b964b07152d234b70'),
('francis', 'devera', 'test@gmail', ''),
('test', 'test', 'test@gmail.com', 'test'),
('test', 'test', 'test@gmail.com4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerpo`
--
ALTER TABLE `customerpo`
  ADD PRIMARY KEY (`custPO`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`custOR`),
  ADD KEY `fk_customer_orders_customers1_idx` (`custID`),
  ADD KEY `fk_customer_orders_customerpo1_idx` (`custPO`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `modeofpayment`
--
ALTER TABLE `modeofpayment`
  ADD PRIMARY KEY (`MOP`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`purchaseID`),
  ADD KEY `fk_purchase_orders_suppliers1_idx` (`supplierID`);

--
-- Indexes for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD PRIMARY KEY (`poitemsID`),
  ADD KEY `fk_purchase_order_items_tblinventory1_idx` (`itemID`),
  ADD KEY `fk_purchase_order_items_purchase_orders1_idx` (`purchaseID`);

--
-- Indexes for table `sales_customer`
--
ALTER TABLE `sales_customer`
  ADD PRIMARY KEY (`PONumber`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `suppliers_items`
--
ALTER TABLE `suppliers_items`
  ADD PRIMARY KEY (`supplieritemID`),
  ADD KEY `fk_suppliers_items_tblinventory1_idx` (`itemID`),
  ADD KEY `fk_suppliers_items_suppliers1_idx` (`supplierID`);

--
-- Indexes for table `tblinventory`
--
ALTER TABLE `tblinventory`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerpo`
--
ALTER TABLE `customerpo`
  MODIFY `custPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `custOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `purchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  MODIFY `poitemsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplierID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `suppliers_items`
--
ALTER TABLE `suppliers_items`
  MODIFY `supplieritemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblinventory`
--
ALTER TABLE `tblinventory`
  MODIFY `pID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD CONSTRAINT `fk_customer_orders_customerpo1` FOREIGN KEY (`custPO`) REFERENCES `customerpo` (`custPO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_orders_customers1` FOREIGN KEY (`custID`) REFERENCES `customers` (`custID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD CONSTRAINT `fk_purchase_orders_suppliers1` FOREIGN KEY (`supplierID`) REFERENCES `suppliers` (`supplierID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD CONSTRAINT `fk_purchase_order_items_purchase_orders1` FOREIGN KEY (`purchaseID`) REFERENCES `purchase_orders` (`purchaseID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchase_order_items_tblinventory1` FOREIGN KEY (`itemID`) REFERENCES `tblinventory` (`pID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `suppliers_items`
--
ALTER TABLE `suppliers_items`
  ADD CONSTRAINT `fk_suppliers_items_suppliers1` FOREIGN KEY (`supplierID`) REFERENCES `suppliers` (`supplierID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_suppliers_items_tblinventory1` FOREIGN KEY (`itemID`) REFERENCES `tblinventory` (`pID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
