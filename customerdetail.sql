-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 05:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customerdetail`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_cd`
--

CREATE TABLE `table_cd` (
  `Email` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_cd`
--

INSERT INTO `table_cd` (`Email`, `Name`, `Address`, `Username`) VALUES
('', '', '', ''),
('chauhan.abhishek1801@gmail.com', 'Abhishek Chauhan', 'Meerut', 'Abhishek'),
('chauhan.avinash@gmail.com', 'Avinash Chauhan', 'Meerut', 'Avinash'),
('chauhan.vanika506@gmail.com', 'Vanika Chauhan', 'Meerut', 'Teddy'),
('gupta.radhika@gmail.com', 'RADHIKA gupta', 'Ghaziabad', 'Radhika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_cd`
--
ALTER TABLE `table_cd`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
