-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2022 at 09:12 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typroject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `uname`, `upass`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_no` int NOT NULL AUTO_INCREMENT,
  `subtotal` varchar(10) DEFAULT NULL,
  `gst` varchar(10) DEFAULT NULL,
  `grandtotal` varchar(10) DEFAULT NULL,
  `billdate` date DEFAULT NULL,
  `cuname` varchar(30) DEFAULT NULL,
  `ostatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`bill_no`)
);

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `subtotal`, `gst`, `grandtotal`, `billdate`, `cuname`, `ostatus`) VALUES
(1, '806', '145.08', '951.08', '0000-00-00', 'mohan123', 'In Transit'),
(2, '256', '46.08', '302.08', '2022-05-24', 'rohan123', 'In Transit'),
(3, '200', '36', '236', '2022-05-24', 'mohan123', 'Ordered'),
(4, '100', '18', '118', '2022-05-24', 'mohan123', 'Ordered'),
(5, '280', '50.4', '330.4', '2022-05-24', 'mohan123', 'Ordered'),
(6, '150', '27', '177', '2022-05-24', 'mohan123', 'Ordered');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cuname` varchar(30) NOT NULL,
  `cpass` varchar(50) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `cmob` varchar(15) DEFAULT NULL,
  `cadd` varchar(100) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `cemail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cuname`)
); 

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cuname`, `cpass`, `cname`, `cmob`, `cadd`, `pincode`, `cemail`) VALUES
('mohan123', 'e2fc714c4727ee9395f324cd2e7f331f', 'Mohan Pal', '9874563215', 'Pune', '411030', 'mohan@gmail.com'),
('rohan123', 'e2fc714c4727ee9395f324cd2e7f331f', 'rohan pattar', '9758475874', 'Pune', '411045', 'rohan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) DEFAULT NULL,
  `pprice` varchar(10) DEFAULT NULL,
  `pdesc` text,
  `pqty` int DEFAULT NULL,
  `pimage` varchar(200) DEFAULT NULL,
  `pcat` varchar(40) DEFAULT NULL,
  `uid` int DEFAULT NULL,
  PRIMARY KEY (`pid`)
); 

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pdesc`, `pqty`, `pimage`, `pcat`, `uid`) VALUES
(1, 'ParleG500G', '100', 'Best to Eat', 20, '../uploads/1648815204parle.jpg', 'Food', 1),
(2, 'Coca Cola 500ml', '100', 'soft drink', 100, '../uploads/1653320212coc.jpg', 'Drink', 1),
(3, 'Dettol Hand Wash 250ml', '150', 'Anti Bacterial Hand wash', 10, '../uploads/1653321569dettol.jpg', 'Cleaning Material', 1),
(4, 'Lifebuoy hand Wash', '250', 'Hand Wash ', 15, '../uploads/1653321756lb.jpg', 'Cleaning Material', 1),
(5, 'Pears Soap', '56', 'Soap', 5, '../uploads/1653321792soap.jpg', 'Cleaning Material', 1),
(6, 'Jar', '800', 'Best Docaration product', 12, '../uploads/1653321845jar.jpg', 'Decoration', 1),
(7, 'Camel Marker ', '32', 'White board Marker', 110, '../uploads/1653380442marker.webp', 'Stationary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `short_bill`
--

DROP TABLE IF EXISTS `short_bill`;
CREATE TABLE IF NOT EXISTS `short_bill` (
  `billno` int DEFAULT NULL,
  `pid` int DEFAULT NULL
);

--
-- Dumping data for table `short_bill`
--

INSERT INTO `short_bill` (`billno`, `pid`) VALUES
(1, 6),
(1, 5),
(2, 5),
(2, 1),
(2, 1),
(3, 2),
(3, 1),
(4, 1),
(5, 7),
(5, 3),
(5, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `pqty` int DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  PRIMARY KEY (`sid`)
); 

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

DROP TABLE IF EXISTS `temp_cart`;
CREATE TABLE IF NOT EXISTS `temp_cart` (
  `cuname` varchar(30) DEFAULT NULL,
  `pid` int DEFAULT NULL,
  `ostatus` varchar(20) DEFAULT NULL,
  `cr_date` date DEFAULT NULL
); 
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
