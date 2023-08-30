-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 04:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshoprecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblhimalaya`
--

CREATE TABLE `tblhimalaya` (
  `placename` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `ShopName` varchar(50) NOT NULL,
  `GrossSale` double NOT NULL,
  `Discount` int(11) NOT NULL,
  `DisAmount` int(11) NOT NULL,
  `NetSales` double NOT NULL,
  `Paid` double NOT NULL,
  `AccBalance` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhimalaya`
--

INSERT INTO `tblhimalaya` (`placename`, `Date`, `ShopName`, `GrossSale`, `Discount`, `DisAmount`, `NetSales`, `Paid`, `AccBalance`) VALUES
('kalmunai', '2023-06-03', 'sopan', 12650, 35, 2162, 10489, 6900, 3588.5),
('kalmunai', '2023-06-03', 'kisorjan', 200, 102, 4, 196, 400, -204),
('kalmunai', '2023-06-03', 'kisor', 200, 1, 2, 198, 2000, -1802);

-- --------------------------------------------------------

--
-- Table structure for table `tblhimalayarec`
--

CREATE TABLE `tblhimalayarec` (
  `placename` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `InNo` varchar(20) NOT NULL,
  `ShopName` varchar(50) NOT NULL,
  `GrossSale` double NOT NULL,
  `Discount` int(11) NOT NULL,
  `DisAmount` varchar(50) NOT NULL,
  `NetSales` double NOT NULL,
  `Paid` double NOT NULL,
  `AccBalance` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhimalayarec`
--

INSERT INTO `tblhimalayarec` (`placename`, `cname`, `Date`, `InNo`, `ShopName`, `GrossSale`, `Discount`, `DisAmount`, `NetSales`, `Paid`, `AccBalance`) VALUES
('sopan', 'Encanteur', '2023-06-03', 'IN-0000010', 'sopan', 200, 100, '200', 0, 20, -20),
('kalmunai', 'Himalaya', '2023-06-03', 'IN-0000009', 'kisor', 200, 1, '2', 198, 2000, -1802),
('sopan', 'Himalaya', '2023-06-03', 'IN-0000005', 'sopan', 200, 5, '10', 190, 200, -10),
('sopan', 'Himalaya', '2023-06-03', 'IN-0000006', 'sopan', 200, 10, '20', 180, 100, 80),
('sopan', 'Himalaya', '2023-06-03', 'IN-0000007', 'sopan', 2000, 2, '40', 1960, 2000, -40),
('kalmunai', 'Himalaya', '2023-06-03', 'IN-0000008', 'kisorjan', 200, 100, '50', 30, 200, -200),
('sopan', 'Center', '2023-06-03', 'IN-0000011', 'kisorjan', 200, 2, '4', 196, 200, -4);

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `username` varchar(50) NOT NULL,
  `passowrd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`username`, `passowrd`) VALUES
('', ''),
('hs', '123'),
('hs', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblreturn`
--

CREATE TABLE `tblreturn` (
  `placename` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `InNo` int(11) NOT NULL,
  `ShopName` varchar(50) NOT NULL,
  `AccBalance` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreturn`
--

INSERT INTO `tblreturn` (`placename`, `cname`, `Date`, `InNo`, `ShopName`, `AccBalance`) VALUES
('Town', 'Himalaya', '2023-05-25', 200010, 'Mathu CoolBar', '-10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblhimalaya`
--
ALTER TABLE `tblhimalaya`
  ADD PRIMARY KEY (`ShopName`);

--
-- Indexes for table `tblhimalayarec`
--
ALTER TABLE `tblhimalayarec`
  ADD PRIMARY KEY (`InNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
