-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 22, 2021 at 11:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--
-- Error reading structure for table internet.data: #1932 - Table 'internet.data' doesn't exist in engine
-- Error reading data for table internet.data: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `internet`.`data`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Speed` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`ID`, `Username`, `Password`, `Email`, `Speed`, `Price`, `Date`) VALUES
(1, 'Omar Ghieh', '1234', 'omarghieh@gmail.com', '200 KB', '20$', '2021-01-01'),
(2, 'Ahmad Ali', 'ahmad123', 'ahmad123@gmail.com', '500 KB', '30$', '2019-05-10'),
(3, 'Ali Mhamad', '3465', 'ali.mhamad@gmail.com', '800 KB', '50$', '2016-03-15'),
(4, 'Omar Hajj', '534121omar', 'omar.hajj.123@gmail.com', '250 KB', '25$', '2019-09-20'),
(5, 'Khaled wter', 'lilo123', 'khaled.khaled@gmail.com', '700 KB', '50$', '2016-03-06'),
(6, 'Mhamad karim', '122@44', 'mhamad2001@gmail.com', '450 KB', '30$', '2016-09-20'),
(7, 'jad ahmad', '%1232@', 'jadjadjad999@gmail.com', '1 MB', '60$', '2014-04-11'),
(8, 'Rita hamad', '..@rita@..', 'rita091204@gmail.com', '100 KB', '10$', '2019-02-01'),
(9, 'Fida talal', '159753', 'fida.oo.123@gmail.com', '900 KB', '50$', '2019-10-08'),
(10, 'Karim karim', '0315489', 'kik.kk.kk1123@gmail.com', '1.5 MB', '100$', '2020-06-04'),
(11, 'jalal charaf', 'jalaljalal.123', 'jala.jalal@gmail.com', '500 KB', '45$', '2021-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `Nmofms` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`Nmofms`, `Email`, `Name`, `Message`) VALUES
(4, 'asffas@gmail.com', 'omar', 'My problems ................');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`Nmofms`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `Nmofms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
