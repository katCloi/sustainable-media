-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 12:54 AM
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
-- Table structure for table `COMMUNITY_MEMBER`
--

CREATE TABLE `COMMUNITY_MEMBER` (
  `CName` varchar(30) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `Township` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `emailAdd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `COMMUNITY_MEMBER`
--

INSERT INTO `COMMUNITY_MEMBER` (`CName`, `MemberID`, `Township`, `userName`, `userPassword`, `emailAdd`) VALUES
('Lori Long', 1, 'Ewing', 'longlori1', 'sauciloriishere123', 'longL@gmail.com'),
('Aiesha Gilliam', 2, 'Trenton', 'aieshaGill95', 'afgar45$SE', 'aieshaG@gmail.com'),
('Tim Simons', 3, 'Trenton', 'MrSimons33', 'DDFFGGHH', 'timonthysim@yahoo.com'),
('Cecile Drennan', 76539, 'Cherry Hill', 'cece12', 'poke1', 'drenn@gmail.com'),
('Mia Williams', 82662, 'Ewing', 'willMia1', 'password123', 'miawill@gmail.com'),
('Zac Kavanagh', 98765, 'Robbinsville', 'ZacAttacKav', 'pancakesRgood44', 'kavanagh_zan@gmail.com'),
('Keyleigh Galindo', 293847, 'Warren', 'KeyGal89', 'key2mylife', 'galindo_is_key@gmail.com'),
('Debbie McGrath', 439827, 'Dunellen', 'Debdeb1', 'debblewiththedevil', 'mcgrathD_14@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COMMUNITY_MEMBER`
--
ALTER TABLE `COMMUNITY_MEMBER`
  ADD PRIMARY KEY (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
