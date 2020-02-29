-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 10:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodcts`
--

CREATE TABLE `prodcts` (
  `ID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productPrice` int(7) NOT NULL,
  `Quantity` int(7) NOT NULL,
  `productImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodcts`
--

INSERT INTO `prodcts` (`ID`, `productName`, `productPrice`, `Quantity`, `productImage`) VALUES
(111, 'Fractured Fairy Tales', 45, 24, 'book1.jpg'),
(112, 'Cursed Beauty', 25, 19, 'book3.jpg'),
(113, 'Cindrerella', 33, 18, 'book4.jfif'),
(114, 'The Day You Begin', 25, 55, 'book5.jpg'),
(115, 'The Squirrels ', 40, 30, 'book6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodcts`
--
ALTER TABLE `prodcts`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
