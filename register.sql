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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `cpassword`, `created_at`, `updated_at`, `role`) VALUES
(18, 'Diku', 'mihir@gmail.com', '123', '123', '2023-04-07 10:28:08', '2023-04-07 10:28:08', 0),
(20, 'henil', 'henil3492@gmail.com', '3492', '3492', '2023-04-08 02:04:34', '2023-04-08 02:04:34', 0),
(21, 'mihir', 'm@gmail.com', '1234', '1234', '2023-04-08 02:30:50', '2023-04-15 00:33:20', 0),
(22, 'Mihir Vaghela', 'mihirvaghela1811@gmail.com', '1811', '1811', '2023-04-11 05:49:13', '2023-04-11 05:49:13', 1),
(25, 'Henu', 'henil@gmail.com', 'henuraj', 'henuraj', '2023-04-11 06:58:24', '2023-04-11 06:58:24', 0),
(26, 'Admin', 'admin@gmail.com', 'admin123', 'admin123', '2023-04-11 07:04:39', '2023-04-11 07:04:39', 1),
(27, 'nayan', 'pitrodanayan03@gmail.com', '12346', '12346', '2023-04-14 02:21:33', '2023-04-14 02:55:23', 0),
(28, 'yash', 'yash@gmail.com', '1234', '1234', '2023-04-14 06:53:10', '2023-04-14 06:53:10', 0),
(29, 'emial', 'a2@gmail.com', '12', '12', '2023-04-14 22:03:44', '2023-04-14 22:03:44', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
