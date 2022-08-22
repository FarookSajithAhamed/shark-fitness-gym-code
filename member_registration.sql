-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 08:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(2) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `medicalCondition` varchar(30) NOT NULL,
  `membershipType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`firstname`, `lastname`, `email`, `dob`, `gender`, `contactno`, `address`, `username`, `password`, `medicalCondition`, `membershipType`) VALUES
('Kate', 'James', 'kjames@gmail.com', '2022-08-10', 'f', '0789123675', '3,Main Street,Jaffna ', 'JKates', 'JKa12345', 'Breathing Difficulties', 'monthly'),
('John', 'Richard', 'jrichard@gmail.com', '1998-12-23', 'm', '0712345687', '  23.Main Road,Colombo  ', 'JRichard', 'JR@12345', '								None', 'annual'),
('Ram', 'Linga', 'rlinga@gmail.com', '1999-08-16', 'm', '0786126544', '12,abc street, Jaffna', 'RLinga', 'lll12666', 'None', 'monthly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
