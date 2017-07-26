-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 06:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehice_id` int(11) NOT NULL,
  `vehicle_category` varchar(200) NOT NULL,
  `vehicle_name` varchar(200) NOT NULL,
  `vehicle_model` int(200) NOT NULL,
  `manufacturer` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehice_id`, `vehicle_category`, `vehicle_name`, `vehicle_model`, `manufacturer`, `color`, `price`, `image`) VALUES
(3, 'Bus', 'Mazda', 1991, 'Honda', 'White', 800000, ''),
(4, 'car', 'civic', 2005, 'honda', 'white', 850000, ''),
(5, 'car', 'charade', 1994, 'dihatsu', 'white', 200000, ''),
(6, 'bike', 'CD-70', 2016, 'superstar', 'black', 60000, ''),
(7, 'bike', 'CG-125', 2005, 'honda', 'red', 50000, ''),
(8, 'bike', 'CD-70', 2015, 'super power', 'black', 35000, ''),
(9, 'car', 'mira', 2012, 'dihatsu', 'black', 125000, ''),
(10, 'cycle', 'cycle', 2017, 'sohrab', 'black', 10000, ''),
(11, 'bike', 'CD-70', 2016, 'superstar', 'red', 45000, ''),
(12, 'car', 'margalla', 1998, 'suzuki', 'white', 320000, ''),
(13, 'car', 'bolan', 2005, 'suzuki', 'white', 450000, ''),
(14, 'car', 'alto', 2006, 'suzuki', 'silver', 350000, ''),
(15, 'bike', 'cg-125', 2016, 'honda', 'red', 120000, ''),
(16, 'asdasd', 'asdasd', 2020, 'fdss', 'ASasA', 10000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
