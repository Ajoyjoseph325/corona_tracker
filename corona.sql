-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 08:46 AM
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
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `dailybook`
--

CREATE TABLE `dailybook` (
  `did` int(10) NOT NULL,
  `shopid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `members` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `exit_time` time(6) NOT NULL,
  `positive` date NOT NULL,
  `in_date_time` datetime(6) DEFAULT NULL,
  `exit_date_time` datetime(6) DEFAULT NULL,
  `punm` bigint(10) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailybook`
--

INSERT INTO `dailybook` (`did`, `shopid`, `userid`, `Name`, `members`, `date`, `time`, `exit_time`, `positive`, `in_date_time`, `exit_date_time`, `punm`, `report`) VALUES
(47, 7, 5, 'Ajoy John ', '5', '2021-02-01', '06:52:32.000000', '06:52:34.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(48, 13, 5, 'Ajoy John ', '2', '2021-02-02', '09:13:48.000000', '09:14:12.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(51, 1, 2, 'karthi', '5', '2021-02-03', '05:07:18.000000', '05:07:21.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(52, 1, 2, 'karthi', '50', '2021-02-03', '05:30:23.000000', '05:30:27.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(53, 1, 5, 'Ajoy John ', '50', '2021-02-08', '01:11:36.000000', '01:11:43.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(54, 4, 7, 'angel', '2', '2021-02-12', '11:17:55.000000', '11:19:20.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(55, 16, 7, 'angel', '5', '2021-02-12', '02:03:21.000000', '02:04:06.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(56, 1, 7, 'angel', '3', '2021-02-12', '04:04:46.000000', '04:05:07.000000', '2021-03-01', NULL, NULL, NULL, NULL),
(57, 10, 7, 'angel', '25', '2021-02-15', '01:04:11.000000', '01:04:22.000000', '2021-03-01', NULL, NULL, NULL, NULL);

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
(1, 'JISMON', 'dfhdjy', '33485', '415955', 'ajoymp@gmail.com', '123'),
(2, 'karthi', 'dfhdjy', '33485', '415955', 'karthi@gmail.com', '123'),
(3, 'Ajith pm', 'Pattathu house,south thuravoor,pudukad,thrissur, kerala', '680301', '6238078724', 'ajithpm@gmail.com', '321'),
(4, 'Christin Davis', 'Kurissingal house,pariyaram p.o,chalakudy,Thrissur,kerala', '680721', '7510908725', 'christindavis@gmail.com', '321'),
(5, 'Ajoy John ', 'peechi,thrissur', '680231', '9955125663', 'ajoy@gmail.com', '321'),
(6, 'Jestin davis', 'Kurissingal house,pariyaram p.o,chalakudy,Thrissur,kerala', '680721', '4849848484', 'jestindavis@gmail.com', '321'),
(7, 'angel', 'demo', '680005', '9895663140', 'angel@gmail.com', '123'),
(8, 'anmaria', 'westfort', '680003', '8578221453', 'anmariawilson2000@gmail.com', 'anmaria123'),
(9, 'Anmaria', 'westfort', '680009', '9846251152', 'westcenter@gmail.com', '');

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
  `fixlots` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopregister`
--

INSERT INTO `shopregister` (`sid`, `shopname`, `address`, `pincode`, `phonenumber`, `category`, `lots`, `fixlots`, `email`, `password`, `approve`) VALUES
(1, 'Kalyan Hypermarket', 'hdfyusgiu', '680004', '04872700800', 'Supermarket', '0', 100, 'kalyanhypermarket@gmail.com', '123', 'APPROVED'),
(2, 'Elite Supermarket', 'ggewjmhh?&#7717;?', '680005', '04872422433', 'Supermarket', '0', 75, 'elitesupermarket@gmail.com', '123', 'APPROVED'),
(3, 'City Supermarket', 'City Supermarket\r\ncity center', '680001', '0487 233 4352', 'Supermarket', '0', 80, 'city@gmail.com', '123', 'APPROVED'),
(4, 'Nandilath G mart', 'Nandilath G- Mart Ikkanda Warrier Road, Chicago Tower, Near Malayala Manorama, Thrissur', '680001', '04872381613', 'Electronics', '0', 50, 'nandilathgmart@gmail.com', '123', 'APPROVED'),
(7, 'Thattil Supermarket', 'West Fort,Asvary Nagar,Ayyanthole,Thrissur,kerala', '680011', '07025259111', 'Supermarket', '0', 55, 'thattilsupermarket@gmail.com', '123', 'APPROVED'),
(8, 'Sahakarana Supermarket', 'Post Office Road,Kuruppam,Thekkinkadmaidanam,Thrissur,Kerala', '680001', '04872422234', 'Supermarket', '0', 25, 'sahakaranasupermarket@gmail.com', '123', 'NOTAPPROVED'),
(9, 'More Supermarker', 'Palisseri Towers,Ground Floor,Near Tata Motor,Pookunnam,Thrissur,Kerala', '680002', '09961883495', 'Supermarket', '0', 30, 'moresupermarket@gamil.com', '123', 'NOTAPPROVED'),
(10, 'Omega Hypermarket', 'Omega Crown Groundfloor,Sitaram Mill,Main Road ,Poonkunnam ,Thrissur , Kerala', '680002', '04872388204', 'Supermarket', '0', 45, 'omegahypermarket@gamil.com', '123', 'NOTAPPROVED'),
(11, 'Westend Supermarket', 'Vanian Ln,Pookunnam,Thrissur,Kerala', '680020', '04872381723', 'Supermarket', '0', 20, 'westendsupermarket@gmail.com', '123', 'NOTAPPROVED'),
(12, 'Groskit Supermarket', 'A Tower, Kalvery Jn,Aranatukara Road,Thrissur,Kerala', '680004', '07034032770', 'Supermarket', '0', 25, 'groskitsupermarket@gamil.com', '123', 'NOTAPPROVED'),
(13, 'Real Hypermarket', 'Thrissur-Palghat Rd,Paravattani,Thrissur,Kerala', '680000', '04872322803', 'Supermarket', '0', 40, 'realhypermarket@gamil.com', '123', 'NOTAPPROVED'),
(14, 'PIKnSAVE Supermarket', 'AVM Tower,Civillan Jn,Ayyanthole,Thrisssur,Kerala', '680618', '07594030303', 'Supermarket', '0', 60, 'piknsavesupermarket@gamil.com', '123', 'NOTAPPROVED'),
(15, 'demo', 'rr', '680006', '3214566', 'Supermarket', '0', 15, 'wesggt@gmail.com', '123', 'NOTAPPROVED'),
(16, 'neethi', 'moorkanikara', '680751', '8129100441', 'Supermarket', '0', 50, 'neethi@gmail.com', '123', 'APPROVED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailybook`
--
ALTER TABLE `dailybook`
  ADD PRIMARY KEY (`did`);

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
-- AUTO_INCREMENT for table `dailybook`
--
ALTER TABLE `dailybook`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shopregister`
--
ALTER TABLE `shopregister`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
