-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 06:59 AM
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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `room_name` varchar(191) NOT NULL,
  `room_price` varchar(191) NOT NULL,
  `check_in` varchar(191) NOT NULL,
  `check_out` varchar(191) NOT NULL,
  `adult` varchar(191) NOT NULL,
  `children` varchar(191) NOT NULL,
  `additional_requests` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `fname`, `lname`, `email`, `phone`, `address`, `room_name`, `room_price`, `check_in`, `check_out`, `adult`, `children`, `additional_requests`, `created_at`, `updated_at`) VALUES
(1, 'Hardik', 'Ravji bhai', 'admin@gmail.com', '12345678', 'Isanpur', 'Maharaja room', '10000', '2023-04-21', '2023-04-24', '2', '1', 'No Thanks', '2023-04-19 22:54:50', '2023-04-19 22:54:50'),
(2, 'Mihir', 'Vaghela', 'm@gmail.com', '7383265192', 'Isanpur', 'Maharaja room', '10000', '2023-04-21', '2023-04-23', '2', '0', 'NO Thanks', '2023-04-19 23:16:22', '2023-04-19 23:16:22'),
(3, 'Nayan', 'pitroda', 'pitrodanayan03@gmail.com', '1234567890', 'Ghodasar', 'henil ra', '10000', '2023-04-21', '2023-04-26', '2', '0', 'Yo', '2023-04-20 00:32:15', '2023-04-20 00:32:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
