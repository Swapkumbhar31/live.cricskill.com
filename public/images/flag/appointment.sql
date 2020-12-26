-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 08:19 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampaisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `brand` varchar(600) NOT NULL,
  `email` varchar(600) NOT NULL,
  `number` varchar(600) NOT NULL,
  `contact` varchar(600) NOT NULL,
  `type` varchar(600) NOT NULL,
  `date` varchar(600) NOT NULL,
  `servicing` varchar(600) NOT NULL,
  `shampoowash` varchar(600) NOT NULL,
  `Diesel` varchar(600) NOT NULL,
  `diesel_wash_with_shampoo_and_cleaning` varchar(600) NOT NULL,
  `time` varchar(600) NOT NULL,
  `t_id` varchar(600) NOT NULL,
  `msg_receipt` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`brand`, `email`, `number`, `contact`, `type`, `date`, `servicing`, `shampoowash`, `Diesel`, `diesel_wash_with_shampoo_and_cleaning`, `time`, `t_id`, `msg_receipt`) VALUES
('honda', 'sagaranute@gmail.com', '324872349', '234873222', 'zsdakj', '12/12/17', '2938', 'yes', 'yes', '', '10:00am', '', ''),
('BAJAJ', 'sumith_ronaldo@yahoo.com', 'mh1000', '09769271625', 'T', '31/10/2017', 'undefined', '0', '0', '0', '10:00 AM', '0000mh1000', 'failure'),
('BAJAJ', 'sumith_ronaldo@yahoo.com', 'mh1000', '09769271625', 'T', '31/10/2017', 'undefined', '0', '0', '0', '10:00 AM', '0000mh1000', 'failure'),
('BAJAJ', 'sumith_ronaldo@yahoo.com', 'mh1000', '09769271625', 'T', '31/10/2017', 'undefined', '0', '0', '0', '10:00 AM', '0000mh1000', 'failure');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
