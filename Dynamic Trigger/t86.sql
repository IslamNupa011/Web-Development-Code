-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 06:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t86`
--

-- --------------------------------------------------------

--
-- Table structure for table `tester_turjo_trigger`
--

CREATE TABLE `tester_turjo_trigger` (
  `id` int(11) NOT NULL,
  `Service_Name` varchar(20) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tester_turjo_trigger`
--

INSERT INTO `tester_turjo_trigger` (`id`, `Service_Name`, `Status`, `Address`) VALUES
(1, 'Weeding', 'Yes', 'Dhaka'),
(2, 'Weeding', 'Yes', 'Chittagong'),
(3, 'Birthday', 'Yes', 'Sylhet'),
(4, 'Weeding', NULL, 'Chittagong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tester_turjo_trigger`
--
ALTER TABLE `tester_turjo_trigger`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tester_turjo_trigger`
--
ALTER TABLE `tester_turjo_trigger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
