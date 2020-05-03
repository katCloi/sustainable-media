-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 12:52 AM
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
-- Table structure for table `COMMUNITY_FORM`
--

CREATE TABLE `COMMUNITY_FORM` (
  `FormID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `Township` varchar(30) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Summary` varchar(250) NOT NULL,
  `Importance` varchar(10) NOT NULL,
  `Affected` varchar(50) NOT NULL,
  `Solutions` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `COMMUNITY_FORM`
--

INSERT INTO `COMMUNITY_FORM` (`FormID`, `MemberID`, `Township`, `Category`, `Summary`, `Importance`, `Affected`, `Solutions`) VALUES
(1, 1, 'EWING', 'Water', 'Dirty Water', 'High', 'Neighborhood', 'Replace Tank?'),
(2, 2, 'Trenton', 'Air', 'Air Pollution', 'High', 'Township', 'Contact Business Owner'),
(3, 3, 'Trenton', 'Water', 'Dirty Water', 'High', 'Township', 'Change Water Tank'),
(4, 293847, 'Warren', 'Air', 'Air Pollution', 'High', 'County', 'Contact Factory Owner'),
(5, 439827, 'Dunellen', 'Chemicals and Toxics', 'Neighbor has lead paint', 'Medium', 'Neighborhood', 'Re-paint house'),
(70, 82662, 'Neptune', 'Health', 'The hospital lacks proper ppe ', 'High', 'Everyone', 'Obtain more ppe'),
(92, 1, 'Ewing', 'Chemicals and Toxics', 'the water is toxic', 'Medium', 'College students', 'clean that water'),
(2160, 82662, 'Freehold', 'Water', 'dirty water', 'High', 'community', 'clean the water'),
(4259, 3, 'Newark', 'Air', 'Air pollution in the area is strong', 'High', 'Neighborhood, city', 'control the pollution'),
(245673, 439827, 'Trenton', 'Land, Waste, and Cleanup', 'It\'s beginning to smell really bad in Trenton because the sewage and garbage control is getting out of hand. I live 15 miles away from the garbage disposal and I can barely stand outside for more than 3 minutes because of the strong smell.', 'High', 'Township', 'Get rid of the garbage? ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COMMUNITY_FORM`
--
ALTER TABLE `COMMUNITY_FORM`
  ADD PRIMARY KEY (`FormID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `COMMUNITY_FORM`
--
ALTER TABLE `COMMUNITY_FORM`
  ADD CONSTRAINT `COMMUNITY_FORM_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `COMMUNITY_MEMBER` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
