-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 01:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(11) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `cntry` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `loc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `aname`, `cntry`, `state`, `contact`, `loc`) VALUES
(13, 'Mangalore International Airpor', 'India', 'Karnataka', '7576555689', 'Banglore'),
(18, 'Kannur International Airport', 'India', 'Kerala', '9876843210', 'Kannur'),
(19, 'Cochin International Airport', 'India', 'Kerala', '9876843210', 'kochi'),
(20, 'TVM International Airport', 'India', 'Kerala', '9876843210', 'Trivandrum'),
(21, 'MangloreInternational Airport', 'India', 'karnataka', '8670132456', 'Mangalore'),
(22, 'Trivandrum International Airp', 'India', 'Kerala', '9876843211', 'Trivandrum'),
(23, 'Kannur International Airport', 'India', 'kerala', '9876843210', 'Kannur,kerala'),
(25, 'kjkikl', 'hjkjk', 'yhjujk', '9089087656', 'uhiui'),
(26, 'jhkjkl', 'uiijki', 'uhjukkj', '9087909876', 'hjujuj'),
(27, 'kochi', 'India', 'kerala', '9987776666', 'kochi'),
(28, 'kochi', 'India', 'kerala', '9987776666', 'kochi');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(11) NOT NULL,
  `book` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `book`) VALUES
(1, '0'),
(2, '0'),
(3, 'book'),
(4, 'book'),
(5, 'book'),
(6, 'book'),
(7, 'A'),
(8, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flightdetails`
--

CREATE TABLE `flightdetails` (
  `id` int(11) NOT NULL,
  `fno` varchar(20) NOT NULL,
  `flname` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `depdate` date NOT NULL,
  `arrdate` date NOT NULL,
  `deptime` time NOT NULL,
  `arrtime` time NOT NULL,
  `costfirst` int(11) NOT NULL,
  `costeconomic` int(11) NOT NULL,
  `costbuisness` int(11) NOT NULL,
  `cfirst` int(10) NOT NULL,
  `ceconomic` int(10) NOT NULL,
  `cbuisness` int(10) NOT NULL,
  `afirst` int(10) NOT NULL,
  `aeconomic` int(10) NOT NULL,
  `abuisness` int(10) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flightdetails`
--

INSERT INTO `flightdetails` (`id`, `fno`, `flname`, `departure`, `arrival`, `depdate`, `arrdate`, `deptime`, `arrtime`, `costfirst`, `costeconomic`, `costbuisness`, `cfirst`, `ceconomic`, `cbuisness`, `afirst`, `aeconomic`, `abuisness`, `status`) VALUES
(13, 'h222', 'airindia', 'MUMBAI', 'CHENNAI', '2021-03-13', '2021-03-13', '13:13:00', '14:14:00', 1000, 1200, 1500, 20, 20, 20, 0, 0, 0, '0'),
(14, 's333', 'kingfisher', 'MUMBAI', 'CHENNAI', '2021-03-25', '2021-03-25', '08:21:00', '15:40:00', 2000, 2300, 3000, 30, 20, 10, 0, 17, 9, '0');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `utype` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_09_084334_create_registers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `cdate` date NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification`, `cdate`, `fid`) VALUES
(9, '1 hr delay', '2021-03-13', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` bigint(11) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `fname`, `lname`, `dob`, `age`, `gender`, `address`, `phno`, `adharno`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'serdtfghj', 'fghjk', '2021-03-02', 23, 'female', 'dzfxgchvjb', 9877667788, 45676788909, 'kripa@gmail.com', '$2y$10$6k0cXnfLIzPXdF6DN8seK.VTW3jmslhGKFZURMSHSLcTV3OmFf/Ya', NULL, NULL),
(2, 'limi', 'mathew', '2021-03-05', 67, 'female', 'LIMI HOME', 9888888888, 88888888880, 'limi@gmail.com', '$2y$10$13ya9/EUx4CyTpkhHko3W.vYjsCzMGBwTPIP4vqbVyYQFcFMfAYMS', NULL, NULL),
(3, 'admin', 'admin', '2021-03-11', 22, 'male', 'admin', 9877668899, 67856787, 'admin@gmail.com', '$2y$10$zzAIguQ.CEyn6M3POrEW5uqQmLP8muEmtzoOUwiKhpV6VZSyeUEoK', NULL, NULL),
(4, 'anisha', 'n', '1998-03-12', 67, 'female', 'jkklkk,k', 9990056789, 3014532145678, 'anisha@gmail.com', '$2y$10$zDRKX6hlhZeaNf4ZPdlNGu7RdJbrV9KCQhTlmfzZfny1BgYzwPoDe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticketbookings`
--

CREATE TABLE `ticketbookings` (
  `id` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `ticketcharge` int(11) NOT NULL,
  `flightid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketbookings`
--

INSERT INTO `ticketbookings` (`id`, `class`, `ticketcharge`, `flightid`, `userid`) VALUES
(116788470, 'Buisness class', 2250, 11, 2),
(116788475, 'Economic class', 1200, 13, 1),
(116788488, 'Economic class', 2070, 14, 4),
(116788489, 'Buisness class', 2700, 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flightdetails`
--
ALTER TABLE `flightdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketbookings`
--
ALTER TABLE `ticketbookings`
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
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flightdetails`
--
ALTER TABLE `flightdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticketbookings`
--
ALTER TABLE `ticketbookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116788490;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
