-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 08:36 AM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `C_id` int(10) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `color` varchar(20) NOT NULL,
  `speed` double NOT NULL,
  `handling` double NOT NULL,
  `acceleration` double NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `G_id` int(10) NOT NULL,
  `G_name` varchar(30) NOT NULL,
  `G_speciality` varchar(30) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Installation`
--

CREATE TABLE `Installation` (
  `I_id` int(10) NOT NULL,
  `I_price` double NOT NULL,
  `G_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `C_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spare`
--

CREATE TABLE `spare` (
  `S_id` int(10) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `S_model` varchar(30) NOT NULL,
  `S_price` double NOT NULL,
  `S_weight` double NOT NULL,
  `S_place` varchar(10) NOT NULL,
  `S_picture` varchar(50) NOT NULL,
  `G_id` int(10) NOT NULL,
  `C_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_id` int(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `privilege` varchar(5) NOT NULL,
  `C_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`G_id`);

--
-- Indexes for table `Installation`
--
ALTER TABLE `Installation`
  ADD PRIMARY KEY (`I_id`);

--
-- Indexes for table `spare`
--
ALTER TABLE `spare`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `C_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `G_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Installation`
--
ALTER TABLE `Installation`
  MODIFY `I_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spare`
--
ALTER TABLE `spare`
  MODIFY `S_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
