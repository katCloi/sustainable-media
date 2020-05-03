-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 12:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SMdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `JOURNALIST`
--

CREATE TABLE `JOURNALIST` (
  `JName` varchar(30) NOT NULL,
  `JournalID` int(11) NOT NULL,
  `Verified` varchar(50) NOT NULL,
  `Publication` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `JOURNALIST`
--

INSERT INTO `JOURNALIST` (`JName`, `JournalID`, `Verified`, `Publication`) VALUES
('Jeff Marbles', 123456, 'Verified', 'Vogue'),
('Jenna Foxworthy', 314159, 'Verified', 'New York Times'),
('Helin Hopper', 385768, 'Verified', 'The Atlantic'),
('Harry Truman', 456789, 'Pending', 'People Magazine'),
('Bill Haggerdy', 987654, 'Pending', 'New York Times');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `JOURNALIST`
--
ALTER TABLE `JOURNALIST`
  ADD PRIMARY KEY (`JournalID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
