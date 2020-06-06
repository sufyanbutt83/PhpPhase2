-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 06:40 PM
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
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(55) NOT NULL,
  `username` varchar(120) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'Farhan', 'aliali');

-- --------------------------------------------------------

--
-- Table structure for table `tblporducts`
--

CREATE TABLE `tblporducts` (
  `productId` int(255) NOT NULL,
  `productName` varchar(60) NOT NULL,
  `productPrice` float NOT NULL,
  `productCode` varchar(40) NOT NULL,
  `productInStock` varchar(1) NOT NULL,
  `productDiscount` float NOT NULL,
  `productSizes` varchar(80) NOT NULL,
  `productDetails` text NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblporducts`
--

INSERT INTO `tblporducts` (`productId`, `productName`, `productPrice`, `productCode`, `productInStock`, `productDiscount`, `productSizes`, `productDetails`, `pimage`) VALUES
(8, 'SALTED CARAMEL', 55, '21', 'Y', 0, 'large', 'Rich caramel a hint of salt and fresh espresso', 'product1.PNG'),
(9, 'SALTED CARAMEL1', 20, '35', 'Y', 0, 'Large', 'Rich caramel a hint of salt and fresh espresso', 'product2.PNG'),
(10, 'SALTED CARAMEL3', 40, '14', 'Y', 0, 'small', 'Rich caramel a hint of salt and fresh espresso', 'product3.PNG'),
(11, 'Super', 55, '20', 'Y', 0, 'small', 'Rich caramel a hint of salt and fresh espresso', 'product4.PNG'),
(12, 'Super', 30, '21', 'Y', 0, 'small', 'fjasdhfkjlasdhfgwef usaofyawehsd f fguweyfgab', 'product5.PNG'),
(13, 'kuch bhi', 50, '30', 'y', 15, 'small', 'dghfjlsdhffsdajkfhkasjdlfgasjlf  fsdafhjkasdlf', 'product6.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblporducts`
--
ALTER TABLE `tblporducts`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblporducts`
--
ALTER TABLE `tblporducts`
  MODIFY `productId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
