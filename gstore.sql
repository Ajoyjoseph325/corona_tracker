-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 10:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` varchar(100) NOT NULL,
  `Phonenumber` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Address`, `Pincode`, `Phonenumber`, `Email`, `Password`) VALUES
(1, 'JISMON', 'dfhdjy', '33485', '415955', 'ajoyjohnm@gmail.com', '123'),
(2, 'JISMON', 'dfhdjy', '33485', '415955', 'ajoyjohnm@gmail.com', 'dfsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `shopregister`
--

CREATE TABLE `shopregister` (
  `sid` int(100) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `lots` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopregister`
--

INSERT INTO `shopregister` (`sid`, `shopname`, `address`, `pincode`, `phonenumber`, `category`, `lots`, `email`, `password`) VALUES
(1, 'kalyan', 'hdfyusgiu', '48496', '984546', 'hggiu', '40', 'ajoyjohnm@gmail.com', '1846846'),
(2, 'josco', 'ggewjmhh?&#7717;?', '24524547', '587932555', 'hkswq', '25', 'hfxhmegkehhk@gmail.com', '44545555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopregister`
--
ALTER TABLE `shopregister`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shopregister`
--
ALTER TABLE `shopregister`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
