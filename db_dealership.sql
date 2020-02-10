-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 09:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dealership`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `vin_number` varchar(255) DEFAULT NULL,
  `miles` int(6) DEFAULT NULL,
  `accident` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `year`, `color`, `vin_number`, `miles`, `accident`) VALUES
(1, 'Honda Accord', 2020, 'White', '43433dd', 245000, 0),
(2, 'Honda CR-V', 2020, 'Silver', '773433dd', 240, 0),
(3, 'Honda Civic', 2020, 'Black', '83433dd', 140, 0),
(4, 'Honda HR-V', 2020, 'Black', '83433dd', 140, 0),
(5, 'Honda Odyssey', 2020, 'Black', '83433dd', 140, 0),
(6, 'Honda Pilot', 2020, 'Black', '83433dd', 140, 0),
(7, 'Honda Acord', 2019, 'white', '5454gdg', 56788, 1),
(8, 'Honda Accort ', 2016, 'silver', 'dfd455', 90000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
