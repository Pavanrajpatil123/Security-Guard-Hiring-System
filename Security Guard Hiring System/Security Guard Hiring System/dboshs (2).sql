-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 07:35 AM
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
-- Database: `dboshs`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', '123'),
(2, 'root', '123');

-- --------------------------------------------------------

--
-- Table structure for table `applist`
--

CREATE TABLE `applist` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pexp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applist`
--

INSERT INTO `applist` (`id`, `name`, `address`, `phone`, `age`, `email`, `pexp`) VALUES
(10, 'James Paulson', 'Washington', 89765658, 28, 'james@gmail.com', 'no past experience'),
(11, 'Nolan Grayson', 'Texas', 945521244, 47, 'nolangrayson@gmail.com', 'worked previously at tesla comply as security guard'),
(13, 'Monkey D Luffy', 'sky island', 124234, 18, 'hankok@gmail.com', 'worked as pirate crew captain');

-- --------------------------------------------------------

--
-- Table structure for table `applogin`
--

CREATE TABLE `applogin` (
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applogin`
--

INSERT INTO `applogin` (`id`, `uname`, `pass`) VALUES
(1, 'john', '123'),
(2, 'john', '7890'),
(3, 'ppp', '123'),
(4, 'tom', 'tom123'),
(5, 'shyam', '123'),
(6, 'shyam', 'shyam123'),
(7, 'luffy', '12345'),
(8, 'shyam', '123'),
(9, 'user1', '123'),
(10, 'user3', '123'),
(11, 'user5', '123'),
(12, 'luffy', 'luffy123'),
(13, 'zoro', 'zoro123'),
(14, 'sanji', 'sanji123');

-- --------------------------------------------------------

--
-- Table structure for table `custlist`
--

CREATE TABLE `custlist` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `manpower` int(10) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custlist`
--

INSERT INTO `custlist` (`id`, `name`, `address`, `email`, `service`, `manpower`, `phone`) VALUES
(14, 'saurabh shinde', 'nagpur', 'saurabhs@gmail.com', 'HS', 3, 2147483647),
(17, 'Rohit Sharma', 'Dadar', 'rohitman@gmail.com', 'HS', 3, 89675645),
(19, 'john travis', 'dakota', 'john@gmail.com', 'ES', 4, 765812712),
(20, 'john doe', 'texas', 'john656@gmail.com', 'HS', 3, 43253212),
(21, 'john doe', 'texas', 'aa@gmail.com', 'BS', 4, 1415135);

-- --------------------------------------------------------

--
-- Table structure for table `custlogin`
--

CREATE TABLE `custlogin` (
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custlogin`
--

INSERT INTO `custlogin` (`id`, `uname`, `pass`) VALUES
(1, 'john', 'john123'),
(3, 'pankaj', '1234'),
(4, 'saurabh', '234'),
(5, 'ahan', '7410'),
(6, 'anand', '123'),
(7, 'user2', '123'),
(8, 'user4', '123'),
(9, 'user6', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applist`
--
ALTER TABLE `applist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applogin`
--
ALTER TABLE `applogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custlist`
--
ALTER TABLE `custlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custlogin`
--
ALTER TABLE `custlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applist`
--
ALTER TABLE `applist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `applogin`
--
ALTER TABLE `applogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `custlist`
--
ALTER TABLE `custlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `custlogin`
--
ALTER TABLE `custlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
