-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 04:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(10) NOT NULL,
  `sender` text DEFAULT NULL,
  `receiver` text DEFAULT NULL,
  `amount` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `sender`, `receiver`, `amount`) VALUES
(1, 'Person-1', 'Person-2', 20),
(2, 'Person-2', 'Person-4', 1000),
(3, 'Person-5', 'Person-1', 400),
(4, 'Person-7', 'Person-2', 88),
(5, 'Person-4', 'Person-6', 507),
(6, 'Person-8', 'Person-5', 40),
(7, 'Person-9', 'Person-3', 60),
(8, 'Person-10', 'Person-8', 887),
(9, 'Person-8', 'Person-10', 70),
(10, 'Person-10', 'Person-4', 679);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `amount`) VALUES
(1, 'Person-1', 'person1@gmail.com', 5000),
(2, 'Person-2', 'person2@gmail.com', 1000),
(3, 'Person-3', 'person3@gmail.com', 16500),
(4, 'Person-4', 'person4@gmail.com', 1800),
(5, 'Person-5', 'person5@gmail.com', 2200),
(6, 'Person-6', 'person6@gmail.com', 6956),
(7, 'Person-7', 'person7@gmail.com', 800),
(8, 'Person-8', 'person8@gmail.com', 9100),
(9, 'Person-9', 'person9@gmail.com', 4000),
(10, 'Person-10', 'person10@gmail.com', 5759);

-- --------------------------------------------------------

--
-- Table structure for table `y`
--

CREATE TABLE `y` (
  `id` int(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `y`
--

INSERT INTO `y` (`id`, `sender`, `receiver`, `amount`) VALUES
(1, 'Person-1', 'Person-5', 20),
(2, 'Person-2', 'Person-7', 50),
(3, 'Person-8', 'Person-5', 80),
(4, 'Person-1', 'Person-7', 9),
(5, 'Person-2', 'Person-3', 71),
(6, 'Person-9', 'Person-10', 100),
(7, 'Person-4', 'Person-10', 25),
(8, 'Person-5', 'Person-2', 18),
(9, 'Person-8', 'Person-6', 90),
(10, 'Person-10', 'Person-1', 108);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y`
--
ALTER TABLE `y`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
