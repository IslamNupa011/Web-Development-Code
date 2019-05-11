-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 01:03 PM
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
-- Database: `ajaxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sampledata`
--

CREATE TABLE `sampledata` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cont_no` char(11) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampledata`
--

INSERT INTO `sampledata` (`id`, `email`, `cont_no`, `cgpa`) VALUES
(1, 'a@gmail.com', '01818009801', 3.8),
(2, 'b@gmail.com', '01818009802', 3.82),
(3, 'c@gmail.com', '01818009803', 3.83),
(4, 'd@gmail.com', '01818009804', 3.84),
(5, 'e@gmail.com', '01818009805', 3.85),
(6, 'f@gmail.com', '01818009806', 3.86),
(7, 'g@gmail.com', '01818009807', 3.87),
(8, 'h@gmail.com', '01818009808', 3.88),
(9, 'i@gmail.com', '01818009809', 3.89),
(10, 'j@gmail.com', '01818009810', 3.9),
(11, 'k@gmail.com', '01818009811', 3.91),
(12, 'l@gmail.com', '01818009812', 3.92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sampledata`
--
ALTER TABLE `sampledata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cont_no` (`cont_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
