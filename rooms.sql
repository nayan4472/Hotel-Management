-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 05:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_name` varchar(191) NOT NULL,
  `room_name` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `img_name`, `room_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'room3.jpeg', 'Maharaja room', '10000', '2023-04-14 12:10:49', '2023-04-15 00:17:18'),
(2, 'hotel_feture_1.jpg', 'henil ra', '10000', '2023-04-14 12:21:05', '2023-04-14 12:21:05'),
(3, 'slider3.jpg', 'nayan', '1233', '2023-04-14 12:23:55', '2023-04-14 12:23:55'),
(4, 'room4.jpeg', 'Hotel taj', '26500', '2023-04-14 14:20:24', '2023-04-15 00:17:35'),
(5, 'room5.jpeg', 'Hotel Taj', '123456', '2023-04-14 14:22:09', '2023-04-14 23:24:30'),
(6, 'hotel_feture_3.jpg', 'lalallal', '12345', '2023-04-14 14:23:44', '2023-04-14 14:23:44'),
(7, 'room12.jfif', 'Mannat', '11234', '2023-04-14 22:28:00', '2023-04-15 00:18:11'),
(8, 'Room1.jpeg', 'Delux Room', '123400', '2023-04-14 22:39:57', '2023-04-15 00:44:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
