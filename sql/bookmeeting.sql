-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 08:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmeeting`
--

CREATE TABLE `bookmeeting` (
  `id` int(11) NOT NULL,
  `lawyer_name` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `meeting_date` varchar(255) DEFAULT NULL,
  `meeting_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmeeting`
--

INSERT INTO `bookmeeting` (`id`, `lawyer_name`, `customer_name`, `email`, `phone`, `meeting_date`, `meeting_time`, `status`, `created_at`) VALUES
(1, 'jazil', 'abdullah', 'umama@gmail.com', '3150232967', '2024-11-08', '09:45', 'confirmed', '2024-11-08 09:45:42'),
(2, 'siddiqui1234', 'abdullah', 'debbiehayes456@outlook.com', '3150232967', '2024-11-08', '09:46', 'canceled', '2024-11-08 09:46:15'),
(3, 'jazil', 'oris', 'siddiquiab31@gmail.com', '3150232967', '2024-11-08', '09:49', 'confirmed', '2024-11-08 09:50:00'),
(4, 'siddiqui1234', 'oris', 'umama@gmail.com', '3150232967', '2024-11-08', '09:50', 'confirmed', '2024-11-08 09:50:28'),
(5, 'John Doe', 'oris', 'hashir@example.com', '3150232965', '2024-11-08', '10:00', 'confirmed', '2024-11-08 10:00:53'),
(6, 'siddiqui1234', 'abdullah', 'hashir@example.com', '3150232965', '2024-11-08', '11:48', 'canceled', '2024-11-08 11:48:11'),
(7, 'jazil', 'abdullah', 'hashir@example.com', '3150232965', '2024-11-08', '12:17', 'pending', '2024-11-08 12:17:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmeeting`
--
ALTER TABLE `bookmeeting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmeeting`
--
ALTER TABLE `bookmeeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
