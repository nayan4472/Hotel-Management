-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 07:00 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'jadu', 'j@gmail.com', 'gooood', NULL, NULL),
(2, 'Mihir', 'mihirvaghela1811@gmail.com', 'good', NULL, NULL),
(3, 'Mihir', 'mihirvaghela1811@gmail.com', 'good', NULL, NULL),
(4, 'Arya Shah', 'aryashah10@gmail.com', 'Mast Website che tamari bhadha ae saro kharcho karyo che and mehanat mane maro bhai Henil Shah ni j vadhari lage che Niceeeeee  Website......10/10', NULL, NULL),
(5, 'Dhruvan Jani', 'dhruvanjani18@gmail.com', 'Good', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_04_07_005626_create_register_table', 1),
(10, '2023_04_08_043312_create_feedback_table', 2),
(11, '2023_04_14_165135_create_rooms_table', 3),
(12, '2023_04_19_210401_create_book_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(18, 'Diku', 'diku@gmail.com', '1234', '1234', '2023-04-07 10:28:08', '2023-04-19 21:53:07', 0),
(20, 'henil', 'henil3492@gmail.com', '3492', '3492', '2023-04-08 02:04:34', '2023-04-08 02:04:34', 0),
(21, 'mihir', 'm@gmail.com', '1234', '1234', '2023-04-08 02:30:50', '2023-04-15 00:33:20', 0),
(22, 'Mihir Vaghela', 'mihirvaghela1811@gmail.com', '1811', '1811', '2023-04-11 05:49:13', '2023-04-11 05:49:13', 1),
(25, 'Henu', 'henil@gmail.com', 'henuraj', 'henuraj', '2023-04-11 06:58:24', '2023-04-11 06:58:24', 0),
(26, 'Admin', 'admin@gmail.com', 'admin123', 'admin123', '2023-04-11 07:04:39', '2023-04-11 07:04:39', 1),
(27, 'nayan', 'pitrodanayan03@gmail.com', '12346', '12346', '2023-04-14 02:21:33', '2023-04-14 02:55:23', 0),
(28, 'yash', 'yash@gmail.com', '1234', '1234', '2023-04-14 06:53:10', '2023-04-14 06:53:10', 0),
(29, 'emial', 'a2@gmail.com', '12', '12', '2023-04-14 22:03:44', '2023-04-14 22:03:44', 0),
(30, 'mita', 'mita@gmail.com', '2324', '2324', '2023-04-18 00:44:49', '2023-04-18 00:44:49', 0),
(31, 'aditya', 'aditya123@gmail.com', '123456', '123456', '2023-04-18 01:22:33', '2023-04-19 23:41:58', 0),
(32, 'ajay', 'ajay12@gmail.com', '4472', '4472', '2023-04-18 01:24:09', '2023-04-18 01:24:09', 0),
(33, 'Arya Shah', 'aryashah10@gmail.com', 'arya123', 'arya123', '2023-04-19 02:26:49', '2023-04-19 02:26:49', 0),
(36, 'Hardik', 'hr@gmail.com', 'hr123', 'hr123', '2023-04-19 21:02:26', '2023-04-19 21:02:26', 0),
(37, 'Dhruvan Jani', 'dhruvanjani18@gmail.com', '12345', '12345', '2023-04-19 23:35:05', '2023-04-19 23:35:05', 0);

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
(8, 'Room1.jpeg', 'Delux Room', '123400', '2023-04-14 22:39:57', '2023-04-15 00:44:51'),
(10, 'h1.jpg', 'Abhi bhai ke bapu ka alisan ghar', '1234567', '2023-04-19 01:22:29', '2023-04-19 01:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
