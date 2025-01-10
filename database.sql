-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 07:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fasttrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(111) NOT NULL,
  `branch_code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_code`) VALUES
(1, 'Cadpur', '3434'),
(2, 'Noakhli', '32423');

-- --------------------------------------------------------

--
-- Table structure for table `customer_section`
--

CREATE TABLE `customer_section` (
  `id` int(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_address` varchar(100) NOT NULL,
  `sender_phone` varchar(100) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_address` varchar(100) NOT NULL,
  `receiver_phone` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_section`
--

INSERT INTO `customer_section` (`id`, `service_type`, `sender_name`, `sender_address`, `sender_phone`, `receiver_name`, `receiver_address`, `receiver_phone`, `product`) VALUES
(6, 'Standard', 'Rafi', '23marpur', '37982437', 'Alo Akther', 'Noyakhali', '3873823', 'parcel'),
(35, 'Standard', 'fsd', 'Cumilla', 'sdf', 'rajib', 'Noakhali', '4er5', 'wer'),
(36, 'Express', 'fds', '', 'dsf', 'sdaf', '2', 'dsadf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `driver_management`
--

CREATE TABLE `driver_management` (
  `id` int(100) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_phone` varchar(100) NOT NULL,
  `available` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_management`
--

INSERT INTO `driver_management` (`id`, `driver_name`, `driver_phone`, `available`) VALUES
(15, 'MUNNA', '02324234', 'available'),
(21, 'MUNNA', '02324234', 'unavailable'),
(22, 'naim', 'bokachoda', 'unavailable'),
(23, 'MUNNA', '02324234', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `register_staf`
--

CREATE TABLE `register_staf` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_staf`
--

INSERT INTO `register_staf` (`id`, `name`, `email`, `password`, `role`) VALUES
(15, 'rafiuser', 'rafiuser@gmail.com', '$2y$10$AyXQBxAdJlL6GG5hKYS8ZOWEUYmASBg5OKckhmyFnAYBN1LpD6e0y', 'user'),
(16, 'shahriar', 'shahriar@gmail.com', '$2y$10$ntXhkOEXm4TJVKEAs.ST1Oz105o/1aLXu5ipSxXs6PuzIwcMfgiOW', 'user'),
(17, 'munna', 'munna420@gmail.com', '$2y$10$nbAcy.O6V4wYfW4EoPd8jO4jmthPVudsk0YrPtShGh8Z1TN4A8.tW', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gendar` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `mobail`, `password`, `gendar`, `country`) VALUES
(8, 'rafi', 'rafi@gmail.com', '01301441194', '$2y$10$P9NCQ57SCItdloyilKUlO..eQw2a0gI8I4/eHQVOtUs3i.L/Ynogu', 'Male', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `customer_section`
--
ALTER TABLE `customer_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_management`
--
ALTER TABLE `driver_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_staf`
--
ALTER TABLE `register_staf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_section`
--
ALTER TABLE `customer_section`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `driver_management`
--
ALTER TABLE `driver_management`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `register_staf`
--
ALTER TABLE `register_staf`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
