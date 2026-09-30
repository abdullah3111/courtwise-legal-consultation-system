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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  `lawyer_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `status` enum('pending','confirmed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `meeting_date` date DEFAULT NULL,
  `meeting_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `customer_id`, `date_time`, `lawyer_id`, `schedule_id`, `status`, `created_at`, `email`, `phone`, `meeting_date`, `meeting_time`) VALUES
(1, 3, NULL, 1, 1, 'confirmed', '2024-11-05 04:36:13', NULL, NULL, NULL, NULL),
(10, 4, NULL, 1, NULL, 'confirmed', '2024-11-05 08:46:18', NULL, NULL, NULL, NULL),
(11, 4, NULL, 1, NULL, 'confirmed', '2024-11-05 08:49:35', NULL, NULL, NULL, NULL),
(12, 4, NULL, 1, NULL, 'confirmed', '2024-11-06 04:18:09', NULL, NULL, NULL, NULL),
(13, 4, NULL, 1, NULL, 'confirmed', '2024-11-06 04:20:37', NULL, NULL, NULL, NULL),
(14, 4, NULL, 1, NULL, 'confirmed', '2024-11-06 04:31:25', NULL, NULL, NULL, NULL),
(15, 4, NULL, 1, NULL, 'confirmed', '2024-11-06 04:34:12', NULL, NULL, NULL, NULL),
(16, 4, NULL, 2, NULL, 'confirmed', '2024-11-06 04:34:34', NULL, NULL, NULL, NULL),
(17, 4, NULL, 1, NULL, 'confirmed', '2024-11-06 05:41:52', 'hashir@example.com', '3150232965', '2024-12-03', '10:40:00'),
(19, 4, NULL, 3, NULL, 'confirmed', '2024-11-06 05:50:45', 'hashir@example.com', '3150232965', '2024-11-20', '10:54:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `lawyer_id` (`lawyer_id`),
  ADD KEY `schedule_id` (`schedule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
