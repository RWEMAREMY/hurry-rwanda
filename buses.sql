-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 09:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `bus` varchar(255) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `time` time(4) NOT NULL,
  `orginal` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus`, `plate`, `time`, `orginal`, `destination`) VALUES
('number 1', 'rac 005', '23:36:00.0000', 'remera', 'kacyiru'),
('number 1', 'rac 005', '22:04:00.0000', 'remera', 'kicukiro'),
('number 1', 'rac 005', '22:04:00.0000', 'remera', 'kicukiro'),
('number 1', 'rac 005', '22:04:00.0000', 'remera', 'kicukiro'),
('yahoo 205', 'rac 201', '15:20:00.0000', 'gikondo', 'downtown'),
('number 2', 'rac 008', '14:06:00.0000', 'remera', 'kicukiro'),
('yahoo 206', 'rac 123', '15:23:00.0000', 'gikondo', 'downtown'),
('yahoo 206', 'rac 005', '16:31:00.0000', 'gikondo', 'remera'),
('number 2', 'rac 005', '12:30:00.0000', 'gikondo', 'kimironko'),
('number 3', 'rac 005', '12:33:00.0000', 'gikondo', 'nyabugogo'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga'),
('number 1', 'rac 005', '20:24:00.0000', 'gikondo', 'kabuga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
